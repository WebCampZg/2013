<!DOCTYPE html>
<html>

<head>

	<meta charset="utf-8">
	
	<meta content="IE=Edge,chrome=1" http-equiv="X-UA-Compatible">
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable = no" name="viewport">

	<meta property="og:type" content="website" />
	<meta property="og:title" content="<?php bloginfo('name'); ?>" />
	<meta property="og:description" content="<?php bloginfo('description'); ?>" />
	<meta property="og:url" content="<?php echo get_permalink(); ?>" />
	<meta property="og:image" content="http://2013.webcampzg.org/wp-content/uploads/2013/09/facebook.jpg" />
	
	<meta name="apple-itunes-app" content="app-id=726115644" />
	
	<meta property="fb:admins" content="500311732" />
	<meta property="fb:app_id" content="722382704443005"/>
	<!-- Naći ne-prozirni logo za ovo? -->
	<!--<meta property="og:image" content="" />-->

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

	<title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>

	<?php wp_head(); ?>

	<link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet-0.6.4/leaflet.css" />
	<!--[if lte IE 8]>
		<link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet-0.6.4/leaflet.ie.css" />
	<![endif]-->
</head>

<body <?php body_class(); ?>>

	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>

	<header id="page_head">

		<div class="graphics_wrap">

			<div class="inner_wrap cf">

				<h1><a href="<?php echo home_url('/'); ?>" title="<?php bloginfo('name'); ?>"><strong>Webcamp</strong> Zagreb</a></h1>

				<aside class="social">
					<a class="fb-icon" href="https://www.facebook.com/WebCampZg" target="_blank"><span>Facebook</span></a>
					<a class="tw-icon" href="https://twitter.com/webcampzg" target="_blank"><span>Twitter</span></a>
				</aside>

				<?php
					$args = array(
						'menu' => 'Top',
						'container' => 'nav'
					);
					wp_nav_menu( $args );
				?>

				<?php if(is_front_page()): ?>
				<section class="intro">
					<h2><?php bloginfo('description'); ?></h2>
					<p>Subota 26/10/2013<br /> 
					Kongresni centar Hypo Expo XII<br />
					Slavonska avenija 6, Zagreb</p>
				</section>
				<?php endif; ?>

			</div>

		</div>

	</header>

	<div id="content_wrap">
