$(document).ready(function()
{
	// Taille de la bannière
	var largeurBanniere = 303;
	
	function majBanniere()
	{
		if($(window).width() >= largeurBanniere)
		{
			$('#banniere').css(
			{
				'display' : 'block',
				'margin' : 'auto',
				'width' : '303px'
			});
		}
		else
		{
			$('#banniere').css(
			{
				'text-align' : 'center',
				'width' : '100%'
			});
		}
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
	});
});
