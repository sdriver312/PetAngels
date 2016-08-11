<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	
	<?php if (is_search()) { ?>
	   <meta name="robots" content="noindex, nofollow" /> 
	<?php } ?>

	<title>
		   <?php
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
		      elseif (is_archive()) {
		         wp_title(''); echo ' Archive - '; }
		      elseif (is_search()) {
		         echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		         wp_title(''); echo ' - '; }
		      elseif (is_404()) {
		         echo 'Not Found - '; }
		      if (is_home()) {
		         bloginfo('name'); echo ' - '; bloginfo('description'); }
		      else {
		          bloginfo('name'); }
		      if ($paged>1) {
		         echo ' - page '. $paged; }
		   ?>
	</title>
	
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico">
	
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

	<?php if ( is_singular() ) wp_enqueue_script('comment-reply'); ?>
	
	<meta name="google-site-verification" content="VSAPR1-n_9AanTn2WbT0SJj8nq--6_lGgFxI2o0NKf4" />
</head>

<body <?php body_class(); ?>>
	
	<div id="page-wrap">
	<div id="site-wrap">
	<div id="header" style="text-align:center; width:1100px; margin-left:auto; margin-right:auto;">
	<img id="Image-Maps_cats" src="<?php bloginfo('template_url');
		if(is_front_page()){
			echo '/images/header2.jpg';
		} else { 
			echo '/images/header.jpg';} ?>" usemap="#Image-Maps_cats" border="0" width="1100" height="416" alt="" />
<map id="_Image-Maps_cats" name="Image-Maps_cats">
<area shape="rect" coords="0,0,1100,150" href="<?php echo get_option('home'); ?>" alt="home" title="home"/>
<area shape="rect" coords="10,146,300,335" href="ginger" alt="ginger" title="ginger"/>
<area shape="rect" coords="326,166,480,411" href="coco-mouse" alt="coco" title="coco"/>
<area shape="rect" coords="482,147,731,410" href="felix-da-housecat" alt="felix" title="felix"/>
<area shape="rect" coords="733,148,906,411" href="cem" alt="cem" title="cem"/>
<area shape="rect" coords="908,148,1081,411" href="nugget" alt="nugget" title="nugget"/>
		<?php 
		if(!is_front_page()) { ?>
		 <area shape="rect" coords="10,480,250,350" href="<?php echo get_option('home'); ?>" alt="home" title="home"/>
		<?php } ?>


</map>
</div><!-- end div header -->
<?php wp_head(); ?>
