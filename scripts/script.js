$(document).ready(function()
{
	var largeurBanniere = 303;

	if($(window).width() >= 303)
	{
		$('#banniere').css(
		{
			'text-align' : 'center',
			'width' : '303px',
			'background-color' : 'red'
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
