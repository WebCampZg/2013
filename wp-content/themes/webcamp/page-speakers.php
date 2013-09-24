<?php // Template Name: Predavači ?>

<?php get_header(); ?>

		<div class="speaker_block">

			<div class="fluid_grid">

				<?php
					query_posts('showposts=-1&post_type=speakers');
					if ( have_posts() ):
				?>
				<ul>
					<?php while (have_posts()) : the_post(); ?>
					<li>
						<a href="<?php the_permalink() ?>" class="box">
							<?php the_post_thumbnail('thumbnail'); ?>
							<div class="data"><div><p><strong><?php the_title(); ?></strong> <?php echo get_post_meta($post->ID,'wpcf-title',TRUE) ?></p></div></div>
						</a>
					</li>
					<?php endwhile; ?>
				</ul>
				<?php
					endif;
					wp_reset_query();
				?>

			</div>

		</div>


<?php get_footer(); ?>
