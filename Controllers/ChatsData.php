<?php
    namespace Controllers;

    use Models\Chat as Chat;

    class ChatsData extends Chat
    {
        public static function getChats()
        {
            return Chat::allChats();
        }

        public static function getChat($uid)
        {
            return Chat::getChat($uid);
        }

		public static function getName($uid)
		{
			return Chat::getName($uid);
		}

		public static function getRName($uid)
        {
            return Chat::getRName($uid);
        }

		public static function getRSName($uid)
        {
            return Chat::getRSName($uid);
        }

		public static function getFullName($uid)
		{
			return (!empty(Chat::getRName($uid)[0]['rname'] && !empty(Chat::getRSName($uid)[0]['rsname']))) ?
				Chat::getRName($uid)[0]['rname'] . ' ' . Chat::getRSName($uid)[0]['rsname'] :
				Chat::getName($uid)[0]['name'];
		}

        public static function getAvatar($uid)
		{
			return Chat::getAvatar($uid);
		}
	}
