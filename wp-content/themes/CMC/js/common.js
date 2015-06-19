jQuery(function()
{
	var ticker = function()
	{
		setTimeout(function(){
			jQuery('#ticker li:first').animate( {marginTop: '-160px'}, 800, function()
			{
				jQuery(this).detach().appendTo('ul#ticker').removeAttr('style');	
			});
			ticker();
		}, 4000);
	};
	ticker();
});


