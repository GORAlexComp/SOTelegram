<?php
	namespace Models;

	use Controllers\Database as DB;

	Class Message extends DB
	{
	    public static function allMessages($uid)
	    {
		    return DB::select('*', 'messages', 'uid = "' . $uid . '"');
	    }

	    public static function lastMessage($uid)
	    {
		    return DB::select('*', 'messages', 'uid = "' . $uid . '"', 'date DESC', 1);
	    }

		public static function lastMessageContent($uid)
	    {
		    return DB::select('content', 'messages', 'uid = "' . $uid . '"', 'date DESC', 1);
	    }

	    public static function lastMessageDate($uid)
	    {
		    return DB::select('date', 'messages', 'uid = "' . $uid . '"', 'date DESC', 1);
	    }
	}
