<?php
	namespace Controllers;
	
	use \Dotenv\Dotenv;

	Class Configs
	{
		public static function getConf($p)
		{
			Dotenv::createImmutable($_SERVER['DOCUMENT_ROOT'])->load();

			return $_ENV[$p];
		}
	}
