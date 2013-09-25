<?php get_header(); ?>

		<div id="top_content_mask">

            <?php include __DIR__ . '/newsletter.php'; ?>

			<div class="news_block col_3_grid" id="novosti">
				<div class="inner_wrap cf">
					
					<div class="inner_wrap_02">

						<?php
							query_posts('showposts=3&cat=3');
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

					<div class="show_more_news">
						<a href="novosti">Prikaži starije vijesti</a>
					</div>

				</div>
			</div>

		</div>

        <?php
            $talks = array();
            $schedule = array();
        
            $posts = get_posts(array(
                'posts_per_page' => -1,
                'post_type' => 'speakers'
            ));
            
            $timeZone = new \DateTimeZone('Europe/Zagreb');
            
            foreach ($posts as $post) {
                $custom = get_post_custom();
                
                // Talk scheduled time
                $time = null;
                if (!empty($custom['wpcf-time'][0])) {
                    $timestamp = $custom['wpcf-time'][0];
                    $time = date('H:i', $timestamp);
                }
                
                // On which track 
                $track = isset($custom['wpcf-track'][0]) ? $custom['wpcf-track'][0] : null;
               
                // Collect all needed data
                $talk = (object) array(
                    'speaker' => $post->post_title,
                    'title' => $custom['wpcf-title'][0],
                    'twitter' => $custom['wpcf-twitter'][0],
                    'time' => $time,
                    'abstract' => $custom['wpcf-abstract'][0],
                    'biography' => $post->post_content,
                    'track' => $track,
                    'level' => $custom['wpcf-level'][0],
                    'url' => get_post_permalink($post->ID),
                    'thumbnail' => get_the_post_thumbnail($post->ID, 'thumbnail'),
                );

                $talks[] = $talk;
                
                if (isset($time) && isset($track)) {
                    $schedule[$time][$track] = $talk;
                }
            }
            
        ?>
        
		<div class="speaker_block" id="predavaci">
			<div class="fluid_grid">
				<ul>
                    <?php foreach ($talks as $talk) { ?>
					<li>
						<a href="<?= $talk->url ?>" class="box">
							<?= $talk->thumbnail ?>
							<div class="data"><div><p><strong><?= $talk->speaker ?></strong> <?= $talk->title ?></p></div></div>
						</a>
                        <?php } ?>
					</li>
				</ul>
			</div>
		</div>

        <?php /* REMOVE COMMENTS TO DISPLAY SCHEDULE

		<div class="lectures_block" id="raspored">
			<div class="inner_wrap">

				<h2>Raspored predavanja</h2>

				<strong class="mark h_a">Dvorana <b>A</b></strong>
				<strong class="mark h_b">Dvorana <b>B</b></strong>

				<ul>
					<li>
						<article>
							<time>09:00</time>
							<p>Akreditacije i druženje</p>
						</article>
					</li>
					<li>
						<article>
							<time>09:30</time>
							<p>Otvaranje konferencije</p>
						</article>
					</li>

                    <?php foreach($schedule as $time => $timeTalks) { ?>
					<li>
						<article>
							<time><?= $time ?></time>
                            <?php foreach($timeTalks as $track => $talk) { ?>
							<div class="hall_<?= $track == 1 ? 'a' : 'b' ?>">
								<p>
									<a href="<?= $talk->url ?>">
										<?= $talk->title ?>
										<strong><?= $talk->speaker ?></strong>
									</a>
								</p>
							</div>
                            <?php } ?>
						</article>
					</li>
                    <?php } ?>
				</ul>
			</div>
		</div>
        */ ?>

<?php get_footer(); ?>
