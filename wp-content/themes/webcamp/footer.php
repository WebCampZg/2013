
        <div class="organizers_block" id="organizatori">
			<div class="inner_wrap">
                <h2>Organizatori</h2>
				<a href="http://codeatsix.infinum.hr/meetup" target="_blank" title="Code at Six"><img src="<?php bloginfo("template_directory") ?>/images/organizers/code_at_six.png" alt="Code at Six" /></a>
                <a href="http://croatia.girlgeekdinners.com/" title="Girl Geek Dinners" target="_blank"><img src="<?php bloginfo("template_directory") ?>/images/organizers/girl_geek_dinners.png" alt="Girl Geek Dinners" /></a>
                <a href="http://www.frontman-hr.org/" title="Frontman HR" target="_blank"><img src="<?php bloginfo("template_directory") ?>/images/organizers/frontman_hr.png" alt="Frontman HR" /></a>
                <a href="http://www.mscommunity.hr/" title="FutureDEV" target="_blank"><img src="<?php bloginfo("template_directory") ?>/images/organizers/ms_community.png" alt="FutureDEV" /></a>
                <br />
                <a href="http://hujak.hr/" title="HUJAK" target="_blank"><img src="<?php bloginfo("template_directory") ?>/images/organizers/hujak.png" alt="HUJAK" /></a>
                <a href="http://www.hgk.hr/" title="Hrvatska gospodarska komora" target="_blank"><img src="<?php bloginfo("template_directory") ?>/images/organizers/hgk.png" alt="Hrvatska gospodarska komora" /></a>
                <a href="http://www.meetup.com/JavaScript-Zagreb/" title="Javascript Zagreb" target="_blank"><img src="<?php bloginfo("template_directory") ?>/images/organizers/javascriptzagreb.png" alt="Javascript Zagreb" /></a>
				<a href="https://groups.google.com/forum/?fromgroups=#!forum/python-hr" title="Python Hrvatska" target="_blank"><img src="<?php bloginfo("template_directory") ?>/images/organizers/python_hr.png" alt="Python Hrvatska" /></a>
				<a href="http://zgphp.org/" title="ZgPHP" target="_blank"><img src="<?php bloginfo("template_directory") ?>/images/organizers/zgphp.png" alt="ZgPHP" /></a>
			</div>
		</div>
        
		<div class="sponsors_block" id="sponzori">
            <div class="inner_wrap">
                <h2>Sponzori</h2>
                
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
            <p>Hosted by: <a href="http://www.dobarkod.hr/">Dobar Kod</a></p>
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
