<?php
	namespace Controllers;

	class CurrentChatData
	{
		public static function activeChat()
		{
			$active = json_decode($_COOKIE['active_chat'] ?? '')->cid ?? '';

			return !empty($active) && $active !== 'undefined' ? $active : '';
		}
	}
