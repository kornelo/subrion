$(function()
{
	FB.init(
	{ 
		appId: intelli.config.fb_app_id, 
		status: true, 
		cookie: true, 
		xfbml : true,
		oauth: true,
		channelUrl : intelli.config.baseurl.replace('http:', '') + 'facebook/'
	});

	if (intelli.config.fb_login != '0')
	{
		if ($('.nav-inventory .m_login').length)
		{
			inventoryLogin = $('.nav-inventory .m_login');
		}
		else
		{
			inventoryLogin = $('.inventory .m_login');
		}

		inventoryLogin.after('<li class="m_fb_login"><a href="#" class="fb-login">' + intelli.lang.fb_login + '</a></li>');
	}

	$('.fb-login').click(function(e)
	{
		e.preventDefault();

		FB.login(function(response)
		{
			var options = new Object();
			options.status = response.status;
			options.token = intelli.config.fb_app_secret;

			if ('connected' == options.status)
			{
				FB.api('/me/picture?type=large', function(avatar)
				{
					options.avatar_url = avatar.data.url;
				});

				FB.api('/me', function(fb_user)
				{
					options.fb_user = fb_user;

					$.post(intelli.config.baseurl + 'facebook/read.json', options, function(data)
					{
						if ('connected' == data.status)
						{
							window.location = intelli.config.baseurl;
						}
					});
				});
			}
		}, {scope: 'email'});
	});

	if ($('#ia-exit').attr('data-value') == '1')
	{
		FB.logout();
	}
});