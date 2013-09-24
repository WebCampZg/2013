<?php get_header(); ?>

		<div id="top_content_mask">
			<div class="news_block">
				<div class="inner_wrap cf">
					<?php
						if (have_posts()):
						while (have_posts()) : the_post();
					?>
					<article id="post-<?php the_ID(); ?>">
						<strong><?php the_time('d/m/Y'); ?></strong>
						<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
						<?php the_content('opširnije'); ?>
					</article>
					<?php endwhile; ?>
					<div class="paging">
						<span class="prev"><?php next_posts_link('Prethodna') ?></span>
						<span class="next"><?php previous_posts_link('Sljedeća') ?></span>
					</div>
					<?php else: ?>
					<article>
						<h2>Pogreška</h2>
						<div class="detail_view">
							<p>Nažalost nema sadržaja</p>
						</div>
					</article>
					<?php endif; ?>

				</div>
			</div>
		</div>

<?php get_footer(); ?>
