<?php get_header(); ?>

		<div id="top_content_mask">

			<section id="newsletter_sub">
				<div class="inner_wrap cf">
					<p>Ostani u toku. Pretplati se na newsletter.</p>
					<form method="post" action="#" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
						<fieldset>
							<input id="newsletter-box" name="EMAIL" type="text" class="text" placeholder="Upiši svoju e-mail adresu" />
							<button class="submit right-circle-icon" type="submit"><span>pošalji</span></button>
						</fieldset>
					</form>

				</div>
			</section>

			<div class="news_block col_3_grid">
				<div class="inner_wrap cf">
					
					<div class="inner_wrap_02">

						<?php
							query_posts('showposts=3&cat=1');
							if ( have_posts() ): while ( have_posts() ): the_post();
						?>

						<div class="col">

							<article>
								<strong><?php the_time('d/m/Y'); ?></strong>
								<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
								<?php the_content('opširnije'); ?>
							</article>

						</div>

						<?php
							endwhile; endif;
							wp_reset_query();
						?>

					</div>

					<?php /*
					<div class="show_more">
						<a href="#" class="down-icon">Prikaži još vijesti</a>
					</div>
					*/ ?>

				</div>
			</div>

		</div>

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


		<?php
			$postid = url_to_postid( 'raspored' );
			$queried_post = get_post($postid);
		?>
		<div class="lectures_block">
			<div class="inner_wrap">

				<h2><?php echo $queried_post->post_title; ?></h2>

				<strong class="mark h_a">Dvorana <b>A</b></strong>
				<strong class="mark h_b">Dvorana <b>B</b></strong>

				<?php echo $queried_post->post_content; ?>

			</div>
		</div>
		<?php wp_reset_query(); ?>

<?php get_footer(); ?>
