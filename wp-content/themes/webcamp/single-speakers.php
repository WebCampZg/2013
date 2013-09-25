<?php get_header(); ?>

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php
        
        // Extract post meta data
        $custom = get_post_custom($post->ID);
        $level = $custom['wpcf-level'][0];
        $abstract = $custom['wpcf-abstract'][0];
        $title = $custom['wpcf-title'][0];
        
        $levels = array(
            1 => "početnički",
            2 => "srednji",
            3 => "napredni"
        );
        $level = $levels[$level];
        ?>
        
		<div id="top_content_mask">
			<div class="news_block">
				<div class="inner_wrap cf">						

					<article>
                        <div style="float: left; margin-right: 10px">
                            <?php the_post_thumbnail('thumbnail'); ?>
                        </div>
						<h1><?php the_title(); ?></h1>

						<div class="detail_view">
							<?php the_content(); ?>
                            <aside class="social cf">
								<div class="fb">
									<div class="fb-like" data-width="450" data-layout="button_count" data-show-faces="false" data-send="false"></div>
								</div>
								<div class="tw">
									<a href="https://twitter.com/share" class="twitter-share-button" data-via="webcampzg">Tweet</a>
								</div>
							</aside>

                            <div style="clear: both"></div>

                            <h2><?= $title ?></h2>

                            <p><?= wpautop($abstract) ?></p>

                            <p><strong>Nivo predavanja:</strong> <?= $level ?></p>

                            <div class="navigation">
                                <p class="nav-prev"><?php previous_post_link(); ?></p>
                                <p class="nav-next"><?php next_post_link(); ?></p>
                            </div>
						</div>
					</article>
				</div>
			</div>

		</div>
		<?php endwhile; endif; ?>

<?php get_footer(); ?>
