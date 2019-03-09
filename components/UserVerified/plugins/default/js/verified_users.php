//<script>
Ossn.setVerifiedUsers = function($array) {
	$.each($array, function(i, v) {
		$e = '.data-username-verified-' + v;
		if ($($e).length) {
			$($e).each(function() {
				if ($(this).attr('data-verified') == 0) {
					$name = $(this).text();

					$(this).html(" ");
					$title = Ossn.Print('userverified:verified');

					$(this).html($name + '<i class="fa fa-check-circle verified-user verified-title" title="' + $title + '"></i>');
					$(this).attr('data-verified', 1);
				}
			});
		}
	});
};
Ossn.verfiedUsers = function() {
	var $usernames = [];

	Ossn.verifiedUsersInit('.ossn-wall-item .owner-link', $usernames);
	var $url = window.location.href;
	if ($url.match('/u/')) {
		$profile_username = $url.replace(Ossn.site_url, '');
		$usernames.push($profile_username.replace('u/', ''));

		$('.ossn-profile').find('.user-fullname:eq(0)').attr('data-verified', 0);
		$('.ossn-profile').find('.user-fullname:eq(0)').addClass('data-username-verified-' + $profile_username.replace('u/', ''));
	}

	var $list = jQuery.unique($usernames).join(',');

	Ossn.PostRequest({
		url: Ossn.site_url + 'userverified/geticon?data=' + $list,
		action: false,
		callback: function(callback) {
			if (callback) {
				Ossn.setVerifiedUsers(jQuery.unique(callback));
			}
		}
	});
};
Ossn.verifiedUsersInit = function($item, $array) {
	$($item).each(function(i, v) {
		$href = $(this).attr('href');
		$username = $href.replace(Ossn.site_url, '');
		$array.push($username.replace('u/', ''));
		
		$(this).attr('data-verified', 0);
		$(this).addClass('data-username-verified-' + $username.replace('u/', ''));
	});
};
Ossn.RegisterStartupFunction(function() {
	$(document).ready(function() {
		Ossn.verfiedUsers();
		$(window).load(function() {
			$('.user-activity').bind('DOMNodeInserted', function(e) {
					if($(e.target).hasClass('comments-item') || $(e.target).hasClass('ossn-wall-item')){		
						Ossn.verfiedUsers();
					}
			});
		});	
	});
});