<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>"/>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
	<title><?php bloginfo('name'); ?></title>
	<link rel="icon" type="image/x-icon" href="<?php bloginfo('template_url')?>/assets/images/favicon.ico" />

	<?php wp_head(); ?>

<body id="body">

	<?php include('src/components/navbar.php'); ?>
<main>
	<?php if(is_front_page()): include('src/components/header.php'); ?>
	<?php else: include('src/components/headerpage.php'); endif?>
	