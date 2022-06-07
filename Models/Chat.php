<?php
	namespace Models;

	use Controllers\Database as DB;

	Class Chat extends DB
	{
	    public static function allChats()
	    {

		    return DB::select('*', 'chats', 'active = 1');
	    }

	    public static function getChat($uid)
	    {
		    return DB::select('*', 'chats', 'uid = "' . $uid . '"');
	    }
		
		public static function getName($uid)
		{
			return DB::select('name', 'chats', 'uid = "' . $uid . '"');
		}
		
		public static function getRName($uid)
		{
			return DB::select('rname', 'chats', 'uid = "' . $uid . '"');
		}
		
		public static function getRSName($uid)
		{
			return DB::select('rsname', 'chats', 'uid = "' . $uid . '"');
		}

		public static function getAvatar($uid)
		{
			return DB::select('avatar', 'chats', 'uid = "' . $uid . '"');
		}
	}
