<?php
	namespace Controllers;

	Class Tools
	{
		public static function isEmpty($var)
		{
			if ($var == NULL OR $var == '' OR empty($var)) return '';
	
			return false;
		}

		public static function monthDate($month, $type='full')
		{
			$months = [
				"1" => [
					"full" => "Января",
					"short" => "Янв"
				], "2" => [
					"full" => "Февраля",
					"short" => "Фев"
				], "3" => [
					"full" => "Марта",
					"short" => "Мар"
				], "4" => [
					"full" => "Апреля",
					"short" => "Апр"
				], "5" => [
					"full" => "Мая",
					"short" => "Мая"
				], "6" => [
					"full" => "Июня",
					"short" => "Июня"
				], "7" => [
					"full" => "Июля",
					"short" => "Июля"
				], "8" => [
					"full" => "Августа",
					"short" => "Авг"
				], "9" => [
					"full" => "Сентября",
					"short" => "Сен"
				], "10" => [
					"full" => "Октября",
					"short" => "Окт"
				], "11" => [
					"full" => "Ноября",
					"short" => "Ноя"
				], "12" => [
					"full" => "Декабря",
					"short" => "Дек"
				]
			];

			$month = $months[$month][$type];

			return $month;
		}

		public static function formatDate($date)
		{
			$date = date('d', strtotime($date)) . ' ' .
				self::monthDate(date('n', strtotime($date)), 'short') . ', ' .
				date('H:i', strtotime($date));

			return $date;
		}
	}
