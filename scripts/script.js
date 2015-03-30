$(document).ready(function()
{
	// Taille de la bannière
	var largeurBanniere = 303;
	var largeurBanniere2 = 675;
	
	function majBanniere()
	{
		if($(window).width() >= largeurBanniere)
		{
			$('#banniere').css('display', 'inline');
			$('header').css('margin', 'auto');
			
			if($(window).width() >= largeurBanniere + largeurBanniere2 + 20)
				$('#banniere-2').show();
			else
				$('#banniere-2').hide();
		}
		else
			$('#banniere-2').hide();
	}

	$(window).resize(majBanniere);
	majBanniere();
	
	
	// Animation des sous-menus
	$(function() { 
		$('.rubrique > a').click(function() { 
			if ($(this).next().is(':visible')) { 
				$( '.sousmenu').slideUp(300); 
			} 
			else { 
				$( '.sousmenu').slideUp(300); 
				$(this).next().slideToggle(300);
			} 
		});
		$('.retractation > a').click(function()
		{
			if($(this).next().is(':visible'))
				$('.conteneur_menu').slideUp(300);
			else
			{
				$('.conteneur_menu').slideUp(300);
				$(this).next().slideToggle(300);
			}
		});
	});
});
