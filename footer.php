				<div class="clear"></div>
			</div>
			
			<footer>
				<section>
					<span class="icon-statistics"></span>
					<h4>Stats</h3>
					<p><strong><?php echo wp_count_posts('post')->publish; ?></strong> Vidéos exceptionnelles actuellement sur le domaine PatCorn et</p>
					<p><strong><?php echo wp_count_posts('articles')->publish; ?></strong> Articles super pertinants.</p>
					<p>Des milliards de visiteurs(euses)</p>
				</section>
				<section>
					<span class="icon-warning2"></span>
					<h4>Attention</h3>
					<p>Si tu cliques sur le lien en dessous, tu meurs.</p>
					<a class="the_lien" href="/?random=1" target="_blank">The Lien</a>
				</section>
				<section>
					<span class="icon-question2"></span>
					<h4>C'est quoi ce site ?</h3>
					<p>PatCorn référence diverses vidéos de qualité postés sur Internet. 
					Découvrez cette riche culture apportant bien plus qu'on ne l'imagine.</p>
				</section>
				<section>
					<span class="icon-info3"></span>
					<h4>Plus d'informations</h3>
					<p>Ce site est un complot en lien direct avec les gens de chez Actinium Studio. 
					Il fait passer aussi la pensée des illuminatis et vous manipule. 
					Attention <a href="http://www.youtube.com/watch?v=wLeDSSw8DYA" target="_blank">aux boucs</a> !</p>
				</section>
				<section>
					<span class="icon-cc-nc-eu"></span>
					<h4>La théorie du chat</h3>
					<p>Vous l'aurez compris, vous ne trouverez pas de chat ni de porno sur ce site. 
					Bref pas de culture du buzz. 
					Ni de pub par ailleurs.</p>
				</section>
				<section>
					<span class="icon-user-add"></span>
					<h4>Batisseur</h3>
					<p>Vous pouvez aider à construire ce site en nous proposant des vidéos via le <a href="http://patcorn.fr/contact/" target="_blank">formulaire de contact</a> ! 
					Ça nous ferait super plaisir !</p>
				</section>
				<section>
					<span class="icon-directions"></span>
					<h4>Où suis-je ?</h3>
					<p>Comme vous semblez perdu, vous pouvez aller à l'<a href="http://patcorn.fr/" target="_blank">accueil</a> ou chercher une vidéo plus précisément avec la <a href="http://patcorn.fr/encore/" target="_blank">recherche avancée</a>. 
					Ou alors vous vouliez vous perdre.</p>
				</section>
				<section>
					<span class="icon-chat"></span>
					<h4>Piplette</h3>
					<p>La meilleure façon de populariser quelquechose est d'en parler. 
					Si vous trouvez un vidéo géniale, partagez là, commentez (de façon constructive...) et parlez-en autour de vous ! 
					Sinon vous pouvez la signaler parceque c'est trop de la merde.</p>
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