<?php // Template Name: Raspored ?>

<?php get_header(); ?>

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>	
		<div class="lectures_block">
			<div class="inner_wrap">

				<h2><?php the_title(); ?></h2>

				<strong class="mark h_a">Dvorana <b>A</b></strong>
				<strong class="mark h_b">Dvorana <b>B</b></strong>

				<?php echo get_the_content(); // without <p> tags ?>

			</div>
		</div>
		<?php endwhile; endif; ?>

<?php get_footer(); ?>
