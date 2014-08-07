				<div class="clear"></div>
			</div>
			
			<footer>
				<section class="col3">
					<h4>Stats</h3>
					<p><strong><?php echo wp_count_posts('post')->publish; ?></strong> Vidéos exceptionnelles actuellement sur le domaine PatCorn et</p>
					<p><strong><?php echo wp_count_posts('articles')->publish; ?></strong> Articles super pertinant.</p>
				</section>
				<section class="col3">
					<h4>Attention</h3>
					<p>Si tu cliques sur le lien en dessous, tu meurs.</p>
					<a href="/?random=1" target="_blank">The Lien</a>
				</section>
				<section class="col6">
					<h4>C'est quoi ce site ?</h3>
					<p>PatCorn référence diverses vidéos de qualité postés sur Internet. Découvrez cette riche culture apportant bien plus que l'on ne l'imagine.</p>
				</section>
				<section class="col6">
					<h4>Plus d'informations</h3>
					<p>Ce site est un complot en lien direct avec les gens de chez Actinium Studio. Il fait passer aussi la pensée des illuminatis et vous manipule.</p>
				</section>
				
				<div id="copyright">
				<p><?php echo sprintf( __( '%1$s %2$s %3$s. Tous droits réservés.', 'blankslate' ), /*'&copy;'*/'', date('Y'), esc_html(get_bloginfo('name')) ); ?></p>
				</div>
			</footer>
			
		</div>
		<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/heeere.js"></script>
		<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/patcorn.js"></script>
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-15013305-6', 'patcorn.fr');
		  ga('require', 'linkid', 'linkid.js');
		  ga('send', 'pageview');

		</script>
		<?php wp_footer(); ?>
	</body>
</html>