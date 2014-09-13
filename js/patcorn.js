/*
-------------------------------------------------------------------
Javascript de Corentin FLACH pour PatCorn
Based on Jquery

	            |\___/|
	            )     (
	           =\     /=
	             )===(
	            /     \
	            |     |
	           /       \
	           \       /
	            \__  _/
	              ( (
	               ) )
	              (_(

-------------------------------------------------------------------
*/

heeere.bind({
  elems: '.hentry',
  viewportFactor: .15,
  smooth: true,
  smoothSpeed: 250,
  smoothLimit: 3
});

$(document).ready(initialiser);

console.log("Coucou !");

function initialiser() {
	
	window.onresize = function(){
		setTimeout(function(){
			heeere.bind({
			  elems: '.hentry',
			  viewportFactor: .15,
			  smooth: true,
			  smoothSpeed: 250,
			  smoothLimit: 3
			});
		},300);
	};
	//Lien des Articles
	/*if ( $('body').hasClass('home') || $('body').hasClass('search') || $('body').hasClass('category') || $('body').hasClass('archive') )
	{
		$('.post').click(function(e){
			//e.preventDefault();
			var link = $(this).find('.entry-title>a').attr('href');
			window.location.href=link;
		});
	}*/
	//Hover
	/*
	if( ($(window).width())>705 && ($('body').hasClass('home') || $('body').hasClass('search') || $('body').hasClass('category') || $('body').hasClass('archive')) )
	{
		$('.entry-date').css('margin-right','-60px');
		$('.cat-links>a').css('margin-left','-80px');
		$('.vcard>a').css('margin-left','-34px');
		$('.entry-footer').css('margin-right','-200%');
		
		$('.article-content').hover(
			function()
			{
				$(this).find('.entry-date').css('margin-right','6px');
				$(this).find('.cat-links>a').css('margin-left','0');
				$(this).find('.vcard>a').css('margin-left','0');
				$(this).find('.entry-footer').css('margin-right','0');
				/*$(this).siblings().css({
					"filter": "grayscale(0)",
					"-webkit-filter": "grayscale(0)",
					"-moz-filter": "grayscale(0)",
					"-o-filter": "grayscale(0)",
					"-ms-filter": "grayscale(0)",
				});
			},
			function()
			{
				$(this).find('.entry-date').css('margin-right','-60px');
				$(this).find('.cat-links>a').css('margin-left','-80px');
				$(this).find('.vcard>a').css('margin-left','-34px');
				$(this).find('.entry-footer').css('margin-right','-200%');
				/*$(this).siblings().css({
					"filter": "grayscale(20%)",
					"-webkit-filter": "grayscale(20%)",
					"-moz-filter": "grayscale(20%)",
					"-o-filter": "grayscale(20%)",
					"-ms-filter": "grayscale(20%)",
				});
			}
		);
	}
*/
	//Menu Déroulant
	$('#menu-item-186').on('click', function (e) {
		//alert("prout");
		//e.preventDefault();
		var toggled = $(this).data('toggled');
		$(this).data('toggled', !toggled);
		if (!toggled) {
			if(($(window).width())<=705){
				$('#menu-menu>li>ul').height(600);
			}else if(($(window).width())<=1050){
				$('#menu-menu>li>ul').height(450);
			}else{
				$('#menu-menu>li>ul').height(400);
			}
		}
		else {
			$('#menu-menu>li>ul').height(0);
		}
		setTimeout(function(){
			heeere.bind({
			  elems: '.hentry',
			  viewportFactor: .15,
			  smooth: true,
			  smoothSpeed: 250,
			  smoothLimit: 3
			});
		},500);
	});

	//CatIco everywhere
	remplacerCatIco();
	ajouterMenuIco($('#menu-menu>li>.sub-menu>li>.sub-menu>li>a'));
	ajouterMenuIco($('.entry-title>strong'));
	
	//Random Description
	randomDescription();

	//Random Footer
	randomFooter();

	//randomColor();

	//Add Author search link
	addAuthorLink();

	//Up the comments if possible
	/*
	var aside_height = $('#content-single>aside').height();
	var content_height = $('#content-single>.entry-content').height()
	var diff = content_height - aside_height;
	console.log(diff);
	if( diff<0 )
	{
		$('#content-single>footer').css('margin-top',diff+'px');
	}
	*/

	//Durée Form change
	if($('.duree').length!=0)
		$('.duree').html( $('.duree').html().replace('.','m ')+'s' );
	
	//Suppr 'Comments'
	$('.comments-link>a').each(function(){
		var texte = $(this).html();
		texte = texte.split("Comment");
		//texte.join("");
		texte = texte[0];
		$(this).html(texte);
	});
	//$('.entry-footer .meta-sep').hide();
	//$('.entry-footer .comments-link').hide();
	
	//Animations kikoo
	/*
	$('.type-post').each(function(i){
		var it = $(this);
		setTimeout(function(){it.addClass('animScaleOut');},50*i);
	});*/
	/*
	$('.single-post .entry-content p, .page .entry-content p,.equipe p').each(function(i){
		console.log(i);
		var it = $(this);
		setTimeout(function(){it.addClass('noMarginTop');},100*i);
	});
*/
	//Animation début
	//$(window).load(function(){
	//})}

	$('#loader').fadeOut('fast');
}
function addAuthorLink(){
	//Fonction pour ajouter un lien <a> de recherche pour les auteurs.
	var equipe = $('.search_author');
	equipe.each(function() {
		var auteur_linked = "";
		var auteur = $(this).text().split("|");
		console.log(auteur);
		for(var i=0; i<auteur.length; i++)
		{
			auteur_linked += "<a href='http://patcorn.fr/?s="+auteur[i].replace(" ","+")+"' target='_blank'>"+auteur[i]+"</a>";
			if((i+1)<auteur.length)
				auteur_linked += " & "
		}
		$(this).html(auteur_linked);
	});
}
function randomDescription(){
	var descriptions = [
		"<strong>PatCorn</strong> référence les <strong>vidéos du net de qualité</strong> spécialement pour <strong>vous</strong> !",
		"La <strong>bibliothèque vidéoludique</strong> qui n'attend plus que <strong>vous</strong>",
		"La <strong>base de données des vidéos</strong> de <strong>qualité</strong> du net, prête à être consultée !",
		"Le <strong>royaume des vidéastes</strong>",
		"Des <strong>centaines de vidéos</strong> de tout genre qui veulent être <strong>regardées</strong> !"
	];
	
	function getDesc(descriptions) {
		return descriptions[Math.floor(Math.random() * descriptions.length)];
	}
	
	var desc = getDesc(descriptions);

	$('#description_site').html(desc);
	
}
function randomFooter(){

	var footers = $("#wrapper>footer>section");
	var copyright = $("#copyright");

	shuffle(footers);

	var footer = "<section>"
				+footers[0].innerHTML
				+"</section><section>"
				+footers[1].innerHTML
				+"</section><section>"
				+footers[2].innerHTML
				+"</section><section>"
				+footers[3].innerHTML
				+"</section>";

	$('#wrapper>footer').html(footer).append(copyright);
}
function shuffle(array) {
  var currentIndex = array.length, temporaryValue, randomIndex ;

  // While there remain elements to shuffle...
  while (0 !== currentIndex) {

    // Pick a remaining element...
    randomIndex = Math.floor(Math.random() * currentIndex);
    currentIndex -= 1;

    // And swap it with the current element.
    temporaryValue = array[currentIndex];
    array[currentIndex] = array[randomIndex];
    array[randomIndex] = temporaryValue;
  }

  return array;
}
function randomColor(){

	var couleurs = ["#ffd142","#d9542b","#abb953","#507cb4"]; // 4 couleurs, 4 saisons
	
	function getCouleur(couleurs) {
		return couleurs[Math.floor(Math.random() * couleurs.length)];
	}
	
	var couleur = getCouleur(couleurs);
	
	$('#site-title h1').css('color', couleur );
	$('h1,h2,h4,h5').css('color', couleur );
	$('a, a:visited, a:active').css('color', couleur );
	$('h2>a').css('background', couleur );
	$('#branding').css('border-color', couleur );

}
function remplacerCatIco() {

	//$('#menu-menu>li>.sub-menu>li>.sub-menu>li>a').
	$('.cat-links>a').each(function() {
		var lettre='';
		var color="#fff";
		var realLetter = false;
		switch ( $(this).html() )
		{
			//Auteurs
			case "Articles": 
				lettre='d';
				color='#acacac';
				break;
			//Durée
			case "Durée Courte": 
				color='#606060';
				$(this).css('line-height','31px');
				lettre='a';
				break;
			case "Durée Moyenne": 
				color='#606060';
				$(this).css('line-height','31px');
				lettre='b';
				break;
			case "Durée Longue": 
				color='#606060';
				lettre='c';
				break;
				
			case "Fiche d'identité": 
				color='#919191';
				lettre='e';
				break;
				
			case "Financé": 
				color='#8aaa7e';
				lettre='€';
				break;
				
			//Langue
			case "Allemand": 
				lettre='de';
				realLetter = true;
				break;
			case "Américain": 
				lettre='us';
				realLetter = true;
				break;
			case "Anglais": 
				lettre='en';
				realLetter = true;
				break;
			case "Espagnol": 
				lettre='es';
				realLetter = true;
				break;
			case "Français": 
				lettre='fr';
				realLetter = true;
				break;	
			case "Italien": 
				lettre='it';
				realLetter = true;
				break;				
		
			//Vidéo
				//Animation
			case "Animation 2D": 
				color='#ffd880';
				lettre='v';
				break;
			case "Animation 3D": 
				color='#ffd880';
				lettre='w';
				break;
			case "Animation Traditionnelle": 
				color='#ffd880';
				lettre='u';
				break;
				//Chronique
			case "Chronique Cinéma": 
				color='#9bdbc1';
				lettre='n';
				break;
			case "Chronique Dessin": 
				color='#9bdbc1';
				lettre='p';
				break;
			case "Chronique Internet": 
				color='#9bdbc1';
				lettre='r';
				break;
			case "Chronique Jeux Vidéo": 
				color='#9bdbc1';
				lettre='o';
				break;
			case "Chronique Littéraire": 
				color='#9bdbc1';
				lettre='t';
				break;
			case "Chronique Musique": 
				color='#9bdbc1';
				lettre='q';
				break;
			case "Chronique Scientifique": 
				color='#9bdbc1';
				$(this).css('padding-right','4px');
				lettre='s';
				break;
			case "Chronique Art": 
				color='#9bdbc1';
				break;
				//Clip
			case "Clip": 
				color='#decc98';
				lettre='f';
				break;
				//FanFilm
			case "Fanfilm": 
				color='#686b77';
				lettre='m';
				break;
				//Film
			case "Film": 
				color='#d3e8a3';
				lettre='j';
				break;
				//Genre
			case "Action/Aventure": 
				color='#9bc4e2';
				lettre='B';
				break;
			case "Comédie": 
				color='#9bc4e2';
				lettre='z';
				break;
			case "Drame": 
				color='#9bc4e2';
				lettre='x';
				break;
			case "Expérimental": 
				color='#9bc4e2';
				lettre='A';
				break;
			case "Fantastique": 
				color='#9bc4e2';
				lettre='y';
				break;
			case "Science-Fiction": 
				color='#9bc4e2';
				lettre='C';
				break;
			case "WTF":
				color='#9bc4e2';
				lettre='wtf';
				realLetter = true;
			//Humour
			case "Humour": 
				color='#c1c1c1';
				$(this).css('font-size','1.6rem');
				lettre='k';
				break;
				//Parodie
			case "Parodie": 
				color='#846e69';
				lettre='l';
				break;
				//Podcast
			case "PodCast": 
				color='#a8dadd';
				lettre='g';
				break;
				//Reportage/Documentaire
			case "Reportage/Documentaire": 
				color='#a4acd7';
				lettre='h';
				break;
				//Série
			case "Série": 
				color='#eaaf9b';
				lettre='i';
				break;
				//Episode
			case "Episode": 
				color='#eaaf9b';
				$(this).css('font-size','1.6rem');
				lettre='D';
				break;
				
			//Si la catégorie n'est pas connu
			default:
				// $(this).css('background','black');
				break;
		}
		$(this).css('border-color',color);
		$(this).attr('data-tip', $(this).html());
		$(this).html(lettre);
		if(realLetter){
			//Ajout des style pour
			$(this).addClass('realLetter');
		}
	});
	$('.vcard>a').each(function() {
		switch ( $(this).html() )
		{
			case "Sir Flach": 
				$(this).css('background-image','url(http://patcorn.fr/wp-content/themes/patcorn-child/images/sir_flach_embleme.svg)');
				break;
				
			//Si l'auteur n'est pas connu
			default:
				$(this).css('background','black');
				break;
		}
		$(this).html('');
		//$(this).hide();
	});
}
function ajouterMenuIco(arg) {

	arg.each(function() {
		var lettre='';
		var realLetter=false;
		switch ( $(this).html() )
		{
			//Auteurs
			case "Articles": 
				lettre='d';
				break;
			//Durée
			case "Durée Courte": 
				lettre='a';
				break;
			case "Durée Moyenne": 
				lettre='b';
				break;
			case "Durée Longue": 
				lettre='c';
				break;
				
			case "Fiche d’identité": 
				lettre='e';
				break;
				
			case "Financé": 
				lettre='€';
				break;		
		
			//Langue
			case "Allemand": 
				lettre='de';
				realLetter = true;
				break;
			case "Américain": 
				lettre='us';
				realLetter = true;
				break;
			case "Anglais": 
				lettre='en';
				realLetter = true;
				break;
			case "Espagnol": 
				lettre='es';
				realLetter = true;
				break;
			case "Français": 
				lettre='fr';
				realLetter = true;
				break;	
			case "Italien": 
				lettre='it';
				realLetter = true;
				break;	
		
			//Vidéo
				//Animation
			case "Animation": 
				lettre='v';
				break;
			case "Animation 2D": 
				lettre='v';
				break;
			case "Animation 3D": 
				lettre='w';
				break;
			case "Animation Traditionnelle": 
				lettre='u';
				break;
				//Chronique
			case "Chronique": 
				lettre='n';
				break;
			case "Chronique Cinéma": 
				lettre='n';
				break;
			case "Chronique Dessin": 
				lettre='p';
				break;
			case "Chronique Internet": 
				lettre='r';
				break;
			case "Chronique Jeux Vidéo": 
				lettre='o';
				break;
			case "Chronique Littéraire": 
				lettre='t';
				break;
			case "Chronique Musique": 
				lettre='q';
				break;
			case "Chronique Scientifique": 
				lettre='s';
				break;
				//Clip
			case "Clip": 
				lettre='f';
				break;
				//FanFilm
			case "Fanfilm": 
				lettre='m';
				break;
				//Film
			case "Vidéo": 
				lettre='j';
				break;
			case "Film": 
				lettre='j';
				break;
				//Genre
			case "Action/Aventure": 
				lettre='B';
				break;
			case "Comédie": 
				lettre='z';
				break;
			case "Drame": 
				lettre='x';
				break;
			case "Expérimental": 
				lettre='A';
				break;
			case "Fantastique": 
				lettre='y';
				break;
			case "Science-Fiction": 
				lettre='C';
				break;
			case "WTF":
				lettre='wtf';
				realLetter = true;
			//Humour
			case "Humour": 
				lettre='k';
				break;
				//Parodie
			case "Parodie": 
				lettre='l';
				break;
				//Podcast
			case "PodCast": 
				lettre='g';
				break;
				//Reportage/Documentaire
			case "Reportage/Documentaire": 
				lettre='h';
				break;
				//Série
			case "Série": 
				lettre='i';
				break;
				//Episode
			case "Episode": 
				lettre='D';
				break;
				
			//Si la catégorie n'est pas connu
			default:
				// $(this).css('background','black');
				break;
		}
		$(this).attr('icon',lettre);
		if(realLetter){
			//Ajout des style pour
			$(this).addClass('realLetter');
		}
	});
}