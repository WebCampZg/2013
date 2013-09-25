

		<div class="sponsors_block" id="sponzori">
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

    <!-- Google analytics -->
    <script type="text/javascript">
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-35198834-1']);
        _gaq.push(['_trackPageview']);

        (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        })();
    </script>

<?php wp_footer(); ?>
</body>
</html>
