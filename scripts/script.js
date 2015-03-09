$(document).ready(function()
{
	var largeurBanniere = 303;

	$(window).resize(function()
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
	});
});
