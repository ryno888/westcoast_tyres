<?php

/**
 * File: SimpleImage.php
 * Author: Simon Jarvis
 * Modified by: Miguel Fermín
 * Based in: http://www.white-hat-web-design.co.uk/articles/php-image-resizing.php
 * 
 * This program is free software; you can redistribute it and/or 
 * modify it under the terms of the GNU General Public License 
 * as published by the Free Software Foundation; either version 2 
 * of the License, or (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful, 
 * but WITHOUT ANY WARRANTY; without even the implied warranty of 
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the 
 * GNU General Public License for more details: 
 * http://www.gnu.org/licenses/gpl.html
 */
class Image_compression_helper {

    public $src;
    public $image;
    public $image_type;

    public function __construct($filename = null) {
        if (!empty($filename)) {
            $this->load($filename);
        }
    }

    public function load($filename) {
        $image_info = getimagesize($filename);
        $this->image_type = $image_info[2];
		$this->src = $filename;

        if ($this->image_type == IMAGETYPE_JPEG) {
            $this->image = imagecreatefromjpeg($filename);
        } elseif ($this->image_type == IMAGETYPE_GIF) {
            $this->image = imagecreatefromgif($filename);
        } elseif ($this->image_type == IMAGETYPE_PNG) {
            $this->image = imagecreatefrompng($filename);
        } else {
            throw new Exception("The file you're trying to open is not supported");
        }
    }
    
    public function example($url) {
        // Usage:
        // Load the original image
        $image = new SimpleImage($url);

        // Resize the image to 600px width and the proportional height
        $image->resizeToWidth(600);
        $image->save('lemon_resized.jpg');

        // Create a squared version of the image
        $image->square(200);
        $image->save('lemon_squared.jpg');

        // Scales the image to 75%
        $image->scale(75);
        $image->save('lemon_scaled.jpg');

        // Resize the image to specific width and height
        $image->resize(80, 60);
        $image->save('lemon_resized2.jpg');

        // Resize the canvas and fill the empty space with a color of your choice
        $image->maxareafill(600, 400, 32, 39, 240);
        $image->save('lemon_filled.jpg');

        // Output the image to the browser:
        $image->output();
    }

    public function save($filename, $image_type = IMAGETYPE_JPEG, $compression = 75, $permissions = null) {
        if ($image_type == IMAGETYPE_JPEG) {
            imagejpeg($this->image, $filename, $compression);
        } elseif ($image_type == IMAGETYPE_GIF) {
            imagegif($this->image, $filename);
        } elseif ($image_type == IMAGETYPE_PNG) {
            imagepng($this->image, $filename);
        }

        if ($permissions != null) {
            chmod($filename, $permissions);
        }
    }

	//--------------------------------------------------------------------------------
	public function upload_and_compress($dest, $options = []) {
        // options
		$options = array_merge([
            "crop" => "square",
            "width" => false,
            "height" => false,
            "size" => 200,
		], $options);

		File_function_helper::mkdir(dirname($dest));
        
        switch ($options['crop']) {
            case 'square': $this->square($options['size']); break;
            case 'scale': $this->scale($options['size']); break;
            case 'to_height': 
                $image_info = getimagesize($this->src);
                if($image_info[0] > 1000){
					$this->tofixedscaled($this->src, $this->src, 1000);
                }
                $this->resizeToHeight($options['height']); break;
            case 'resize': $this->resize($options['width'], $options['height']); break;
            case 'resize_to_width': $this->resizeToWidth($options['width']); break;
            case 'resize_to_height': $this->resizeToHeight($options['height']); break;
            case 'from_center': 
                $image_info = getimagesize($this->src);
                if($image_info[0] < $options['width']){
                    $this->resizeToWidth(($options['width'] * 1.5)); 
                }
                if($image_info[1] < $options['height']){
                    $this->resizeToHeight(($options['height'] * 1.5)); 
                }
                $this->cutFromCenter($options['width'], $options['height']); 
                break;
            case 'crop_to_max_height': 
                $this->cropToHeight($options['width'], $options['height']);
                break;
            case 'crop_to_max_width': 
                $this->cropToWidth($options['width'], $options['height']); 
                break;
            default: $this->square($options['size']); break;
        }
        $this->save($dest, IMAGETYPE_PNG);
	}
	
	
	//--------------------------------------------------------------------------------
    
    public static function tofixedscaled($src_image, $dest_image, $scale_width, $options = []) {
		// options
		$options = array_merge([
			"scale_height" => false,
			"quality" => 75,
		], $options);

		// resamples a source image to a given fixed and height
		$supported_types = ["image/jpeg", "image/gif", "image/png"];

		// get src image size
		$image_info = getimagesize($src_image);
		if (!in_array($image_info["mime"], $supported_types)) return [false, "File type $image_info[mime] not supported image type (supported types are ".implode(" ,", $supported_types).")"];
		list($src_width, $src_height) = $image_info;

		// image is right scale and doesnt need to be scaled
		if ($src_width == $scale_width && !$options["scale_height"] || $src_width == $scale_width && $src_height == $options["scale_height"]) {
			copy($src_image, $dest_image);
			return [true, ""];
		}

		// resample src image
		$new_width = $src_width;
		$new_height = $src_height;
		if ($scale_width < $new_width) {
			$scale = $scale_width / $new_width;
			$new_width = $scale_width;
			$new_height = floor($new_height * $scale);
		}
		if ($options["scale_height"] && $options["scale_height"] < $new_height) {
			$scale = $options["scale_height"] / $new_height;
			$new_height = $options["scale_height"];
			$new_width = floor($new_width * $scale);
		}

		if ($new_width == $src_width && $new_height == $src_height) {
			copy($src_image, $dest_image);
			return [true, ""];
		}

		$new_image = imagecreatetruecolor($new_width, $new_height);
        
        //if ($image_info["mime"] == "image/gif" || $image_info["mime"] == "image/png") {
        //imagecolortransparent($new_image, imagecolorallocatealpha($new_image, 0, 0, 0));
        imagealphablending($new_image, false);
        imagesavealpha($new_image, true);
		//}
        
		switch ($image_info["mime"]) {
			case "image/jpeg" : $old_image = imagecreatefromjpeg($src_image);
				break;
			case "image/gif" : $old_image = imagecreatefromgif($src_image);
				break;
			case "image/png" : $old_image = imagecreatefrompng($src_image);
				break;
		}
		imagecopyresampled($new_image, $old_image, 0, 0, 0, 0, $new_width, $new_height, $src_width, $src_height);        

		// write image to jpg image
        switch ($image_info["mime"]) {
			case "image/jpeg" : imagejpeg($new_image, $dest_image, $options["quality"]);
				break;
			case "image/gif" : $old_image = imagecreatefromgif($src_image);
				break;
			case "image/png" : imagepng($new_image, $dest_image, 2);
				break;
		}
		

		return [true, ""];
	}
	
	
    public function output($image_type = IMAGETYPE_JPEG, $quality = 80) {
        if ($image_type == IMAGETYPE_JPEG) {
            header("Content-type: image/jpeg");
            imagejpeg($this->image, null, $quality);
        } elseif ($image_type == IMAGETYPE_GIF) {
            header("Content-type: image/gif");
            imagegif($this->image);
        } elseif ($image_type == IMAGETYPE_PNG) {
            header("Content-type: image/png");
            imagepng($this->image);
        }
    }

    public function getWidth() {
        return imagesx($this->image);
    }

    public function getHeight() {
        return imagesy($this->image);
    }

    public function resizeToHeight($height) {
        $ratio = $height / $this->getHeight();
        $width = round($this->getWidth() * $ratio);
        $this->resize($width, $height);
    }

    public function resizeToWidth($width) {
        $ratio = $width / $this->getWidth();
        $height = round($this->getHeight() * $ratio);
        $this->resize($width, $height);
    }

    public function square($size) {
        $new_image = imagecreatetruecolor($size, $size);

        if ($this->getWidth() > $this->getHeight()) {
            $this->resizeToHeight($size);

            imagecolortransparent($new_image, imagecolorallocate($new_image, 0, 0, 0));
            imagealphablending($new_image, false);
            imagesavealpha($new_image, true);
            imagecopy($new_image, $this->image, 0, 0, ($this->getWidth() - $size) / 2, 0, $size, $size);
        } else {
            $this->resizeToWidth($size);

            imagecolortransparent($new_image, imagecolorallocate($new_image, 0, 0, 0));
            imagealphablending($new_image, false);
            imagesavealpha($new_image, true);
            imagecopy($new_image, $this->image, 0, 0, 0, ($this->getHeight() - $size) / 2, $size, $size);
        }

        $this->image = $new_image;
    }

    public function scale($scale) {
        $width = $this->getWidth() * $scale / 100;
        $height = $this->getHeight() * $scale / 100;
        $this->resize($width, $height);
    }

    public function resize($width, $height) {
        $new_image = imagecreatetruecolor($width, $height);

        imagecolortransparent($new_image, imagecolorallocate($new_image, 0, 0, 0));
        imagealphablending($new_image, false);
        imagesavealpha($new_image, true);

        imagecopyresampled($new_image, $this->image, 0, 0, 0, 0, $width, $height, $this->getWidth(), $this->getHeight());
        $this->image = $new_image;
    }

    public function cut($x, $y, $width, $height) {
        $new_image = imagecreatetruecolor($width, $height);

        imagecolortransparent($new_image, imagecolorallocate($new_image, 0, 0, 0));
        imagealphablending($new_image, false);
        imagesavealpha($new_image, true);

        imagecopy($new_image, $this->image, 0, 0, $x, $y, $width, $height);

        $this->image = $new_image;
    }

    public function maxarea($width, $height = null) {
        $height = $height ? $height : $width;

        if ($this->getWidth() > $width) {
            $this->resizeToWidth($width);
        }
        if ($this->getHeight() > $height) {
            $this->resizeToheight($height);
        }
    }

    public function minarea($width, $height = null) {
        $height = $height ? $height : $width;

        if ($this->getWidth() < $width) {
            $this->resizeToWidth($width);
        }
        if ($this->getHeight() < $height) {
            $this->resizeToheight($height);
        }
    }

    public function cutFromCenter($width, $height) {

        if ($width < $this->getWidth() && $width > $height) {
            $this->resizeToWidth($width);
        }
        if ($height < $this->getHeight() && $width < $height) {
            $this->resizeToHeight($height);
        }

        $x = ($this->getWidth() / 2) - ($width / 2);
        $y = ($this->getHeight() / 2) - ($height / 2);

        return $this->cut($x, $y, $width, $height);
    }

    public function maxareafill($width, $height, $red = 0, $green = 0, $blue = 0) {
        $this->maxarea($width, $height);
        $new_image = imagecreatetruecolor($width, $height);
        $color_fill = imagecolorallocate($new_image, $red, $green, $blue);
        imagefill($new_image, 0, 0, $color_fill);
        imagecopyresampled($new_image, $this->image, floor(($width - $this->getWidth()) / 2), floor(($height - $this->getHeight()) / 2), 0, 0, $this->getWidth(), $this->getHeight(), $this->getWidth(), $this->getHeight()
        );
        $this->image = $new_image;
    }
	//--------------------------------------------------------------------------------
    public function cropToHeight($width, $height) {

        if ($height < $this->getHeight()) {
            $this->resizeToHeight($height);
        }

        $x = ($this->getWidth() / 2) - ($width / 2);
        $y = ($this->getHeight() / 2) - ($height / 2);

        return $this->cut($x, $y, $width, $height);
    }
    //--------------------------------------------------------------------------------
    public function cropToWidth($width, $height) {

        if ($width < $this->getWidth()) {
            $this->resizeToWidth($width);
        }

        $x = ($this->getWidth() / 2) - ($width / 2);
        $y = ($this->getHeight() / 2) - ($height / 2);

        return $this->cut($x, $y, $width, $height);
    }

}

