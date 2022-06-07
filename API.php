<?php
	require_once('./vendor/autoload.php');

	use Controllers\Content as C;

	class API extends C
	{
		public static function changeChat()
		{
			return C::chat() .
				   C::chatInfo();
		}
	}

	$API = API::changeChat();

	if(isset($_GET['updateMessages'])) {
		print $API;
	} else {
		print 'Ошибка при получении чата!';
	}
