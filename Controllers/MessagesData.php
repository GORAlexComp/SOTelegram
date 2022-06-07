<?php
    namespace Controllers;

    use Models\Message as Message;

    class MessagesData extends Message
    {
		public static function getAllMessages($uid)
		{
			return self::allMessages($uid);
		}

        public static function getLastMessage($uid)
        {
            return self::lastMessage($uid);
        }

		public static function getLastMessageContent($uid)
        {
            return self::lastMessageContent($uid);
        }

        public static function getLastMessageDate($uid)
        {
            return self::lastMessageDate($uid);
        }
    }
