<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$base_url = CI_BASE_URL;
?>
<html lang="en" class="no-js">
<head>
	<meta charset="utf-8"/>
	<title>FlameOnePage Free Template by FairTech</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1" name="viewport"/>
	<meta content="FlameOnePage freebie theme for web startups by FairTech SEO." name="description"/>
	<meta content="FairTech" name="author"/>
	<?php echo isset($meta) ? Lib_html_tags::load_meta_data($meta) : false; ?>
	<link href="http://fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet" type="text/css">
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
	<link href="<?php echo "{$base_url}assets/vendor/simple-line-icons/simple-line-icons.min.css"; ?>" rel="stylesheet" type="text/css"/>
	<link href="<?php echo "{$base_url}assets/vendor/bootstrap/css/bootstrap.min.css"; ?>" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo "{$base_url}assets/css/animate.css"; ?>">
	<link href="<?php echo "{$base_url}assets/vendor/swiper/css/swiper.min.css"; ?>" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo "{$base_url}assets/css/layout.min.css"; ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo $base_url; ?>assets/css/frontend.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $base_url; ?>assets/css/style.css">
    
	<link rel="shortcut icon" href="favicon.ico"/>
    <script>
        var ci_base_url = "<?php echo CI_BASE_URL; ?>";
    </script>
</head>

<body id="body" data-spy="scroll" data-target=".header">

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
								<li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="#work">Credentials</a></li>
                                <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="#pricing">Pricing</a></li>
                                <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="#about">Team</a></li>
                                <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="#contact">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
			</header>