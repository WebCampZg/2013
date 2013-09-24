<!DOCTYPE html>
<html>

<head>
	
	<meta charset="utf-8">
	
	<meta content="IE=Edge,chrome=1" http-equiv="X-UA-Compatible">
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable = no" name="viewport">

	<title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>

	<?php wp_head(); ?>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

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
					<p>Subota 21/04/2013 Hrvatska Gospodarska Komora Nova cesta 3, Zagreb</p>
				</section>
				<?php endif; ?>

			</div>

		</div>

	</header>

	<div id="content_wrap">
