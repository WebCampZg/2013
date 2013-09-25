

		<div class="sponsors_block">
			<div class="inner_wrap">

                <?php include __DIR__ . '/sponsors-data.php'; ?>
            
				<div class="main">
                    <?php foreach ($sponsorsBig as $sponsor) { ?>
					<a href="<?= $sponsor['url'] ?>" target="_blank"><img src="<?php bloginfo("template_directory") ?>/<?= $sponsor['logo'] ?>" alt="<?= $sponsor['title'] ?>" title="<?= $sponsor['title'] ?>" /></a>
                    <?php } ?>
				</div>
                
                <?php foreach ($sponsorsSmall as $sponsor) { ?>
					<a href="<?= $sponsor['url'] ?>" target="_blank"><img src="<?php bloginfo("template_directory") ?>/<?= $sponsor['logo'] ?>" alt="<?= $sponsor['title'] ?>" title="<?= $sponsor['title'] ?>" /></a>
                <?php } ?>
			</div>
		</div>

		<div class="social_block">
			<div class="inner_wrap">

				<h4>Prati nas na društvenim mrežama</h4>

				<a class="fb-icon" href="https://www.facebook.com/WebCampZg" target="_blank">fb.com/webcampzg</a>
				<a class="tw-icon" href="https://twitter.com/webcampzg" target="_blank">@webcampzg</a>

			</div>
		</div>

		<footer id="page_footer">
			<p>Copyright 2013. Webcamp Zagreb. Design &amp; development: <a href="http://www.trikoder.hr/">Trikoder</a></p>
		</footer>

	</div>

	<script>
		new wczg.main();
	</script>

<?php wp_footer(); ?>
</body>
</html>