<!doctype html>

<head>

	<meta charset="utf-8">

	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title><?php bloginfo('name'); echo " | "; bloginfo('description'); wp_title(); ?></title>

	<meta name="description" content="">

	<meta name="author" content="">

	<!-- icons & favicons -->

	<!-- For iPhone 4 -->

	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/library/images/icons/h/apple-touch-icon.png">

	<!-- For iPad 1-->

	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/library/images/icons/m/apple-touch-icon.png">

	<!-- For iPhone 3G, iPod Touch and Android -->

	<link rel="apple-touch-icon-precomposed" href="<?php echo get_template_directory_uri(); ?>/library/images/icons/l/apple-touch-icon-precomposed.png">

	<!-- For Nokia -->

	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/library/images/icons/l/apple-touch-icon.png">

	<!-- For everything else -->

	<link rel="shortcut icon" href="<?php echo home_url(); ?>/favicon.ico">

	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/example-style.css">

	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

	<!-- wordpress head functions -->
	<?php wp_head(); ?>
	<!-- end of wordpress head -->

</head>

<body>