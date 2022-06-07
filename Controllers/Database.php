<?php
	namespace Controllers;

	use PDO;
	use Controllers\Configs as Config;

	Class Database extends PDO
	{
		public static function connection()
		{
			$dsn = "mysql:host=" . Config::getConf('DB_HOST') . ";dbname=" . Config::getConf('DB_DATABASE') . ";charset=" . Config::getConf('DB_CHARSET');
		    $opt = [
		        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
		        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
		        PDO::ATTR_EMULATE_PREPARES   => false,
		    ];
			
			$db = new PDO($dsn, Config::getConf('DB_USER'), Config::getConf('DB_PASS'), $opt);

			return $db;
		}

		public static function select($select, $from, $where='', $sort='', $limit='')
		{
			$where = !empty($where) ? ' WHERE ' . $where : '';
			$sort = !empty($sort) ? ' ORDER BY ' . $sort : '';
			$limit = !empty($limit) ? ' LIMIT ' . $limit : '';

			$query = self::connection()->prepare('SELECT ' . $select . ' FROM ' . $from . $where . $sort . $limit);
			$query->execute();

			return $query->fetchAll();
		}
	}
