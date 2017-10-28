<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$base_url = CI_BASE_URL;
?>
<html lang="en" class="no-js">
<head>
	<meta charset="utf-8"/>
	<title><?php echo CI_META_TITLE; ?></title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1" name="viewport"/>
	<meta content="FlameOnePage freebie theme for web startups by FairTech SEO." name="description"/>
	<meta content="FairTech" name="author"/>
	
	<?php
		$meta_arr[] = [
			'name' => "title",
			'content' => CI_META_TITLE,
		];
		$meta_arr[] = [
			'name' => "description",
			'content' => CI_META_DESCRIPTION,
		];
		$meta_arr[] = [
			'name' => "keywords",
			'content' => CI_META_KEYWORDS,
		];
		$meta_arr[] = [
			'name' => "robots",
			'content' => CI_META_ROBOTS,
		];
		$meta_arr[] = [
			'name' => "viewport",
			'content' => CI_META_VIEWPORT,
		];
		foreach ($meta_arr as $name => $content) {
			echo meta($content);
		}
	?>
	
	<!--<link href="http://fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet" type="text/css">-->
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
	<link href="<?php echo "{$base_url}assets/vendor/simple-line-icons/simple-line-icons.min.css"; ?>" rel="stylesheet" type="text/css"/>
	<link href="<?php echo "{$base_url}assets/vendor/bootstrap/css/bootstrap.min.css"; ?>" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo "{$base_url}assets/css/animate.css"; ?>">
	<link href="<?php echo "{$base_url}assets/vendor/swiper/css/swiper.min.css"; ?>" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo "{$base_url}assets/css/layout.min.css"; ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo $base_url; ?>assets/css/frontend.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $base_url; ?>assets/css/style.css">
	<link rel="stylesheet" href="<?php echo "{$base_url}assets/vendor/font-awesome-4.7.0/css/font-awesome.min.css" ?>">
    
	<link rel="shortcut icon" href="<?php echo $base_url; ?>assets/img/favicon.png"/>
    <script> var ci_base_url = "<?php echo CI_BASE_URL; ?>"; </script>
	<script src="<?php echo "{$base_url}assets/vendor/jquery.min.js"; ?>" type="text/javascript"></script>
</head>

<body id="body" data-spy="scroll" data-target=".header">
	<div class="__overlay" style="width: 100%;">
        <div class="__overlay-content">
            <div class="__loader"></div>
            <div class='__loader-message'></div>
        </div>
    </div>
	<header class="header navbar-fixed-top">
		<nav class="navbar" role="navigation">
			<div class="container">
				<div class="menu-container js_nav-item">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="toggle-icon"></span>
					</button>

					<div class="logo">
						<a class="logo-wrap" href="#body">
							<img class="logo-img logo-img-main" src="<?php echo "{$base_url}assets/img/logo.png" ?>" alt="FlameOnePage Logo">
							<img class="logo-img logo-img-active" src="<?php echo "{$base_url}assets/img/logo-dark.png" ?>" alt="FlameOnePage Dark Logo">
						</a>
					</div>
				</div>

				<div class="collapse navbar-collapse nav-collapse">
					<div class="menu-container">
						<ul class="nav navbar-nav navbar-nav-right">
							<li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="#body">Home</a></li>
							<li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="#services">Services</a></li>
							<li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="#products">Products</a></li>
							<li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="#about">Team</a></li>
							<li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover1" href="#contact">About Us</a></li>
						</ul>
					</div>
				</div>
			</div>
		</nav>
	</header>
	