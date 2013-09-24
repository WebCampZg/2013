<?php get_header(); ?>

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div id="top_content_mask">

			<div class="news_block">
				<div class="inner_wrap cf">						

					<article>
						<strong><?php the_time('d/m/Y'); ?></strong>
						<h2><?php the_title(); ?></h2>

						<div class="detail_view">

							<aside class="social cf">
								<div class="fb">
									<div class="fb-like" data-width="450" data-layout="button_count" data-show-faces="false" data-send="false"></div>
								</div>
								<div class="tw">
									<a href="https://twitter.com/share" class="twitter-share-button" data-via="webcampzg">Tweet</a>
								</div>
							</aside>

							<?php the_content(); ?>

						</div>

					</article>

				</div>
			</div>

		</div>
		<?php endwhile; endif; ?>

<?php get_footer(); ?>
