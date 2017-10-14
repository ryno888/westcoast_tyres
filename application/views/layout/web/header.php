<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$base_url = CI_BASE_URL;
?>
<html lang="en">
<head>
    <?php echo isset($meta) ? Lib_html_tags::load_meta_data($meta) : false; ?>
    <link rel="stylesheet" type="text/css" href="<?php echo $base_url; ?>assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $base_url; ?>assets/bootstrap/fonts/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $base_url; ?>assets/css/web.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $base_url; ?>assets/css/style.css">
    
    <script type="text/javascript" src="<?php echo $base_url; ?>assets/js/jquery.min.js"></script>
    <script>
        var ci_base_url = "<?php echo CI_BASE_URL; ?>";
    </script>
</head>

<body>
    <div class="margin-bottom-50">