<?php
	namespace Controllers;

	use Controllers\ContentConstructor as CC;
	use Controllers\CurrentChatData as CCD;

	class Content extends CC
	{
		public static function chat()
		{
			if (!empty(CC::activeChat())) {
				return '<div class="messages d-flex flex-column flex-grow-1 px-0">' .
					CC::header() .
					CC::messages() .
					CC::formMessage() .
				'</div>';
			} else {
				return '<div class="messages-empty d-flex flex-column flex-grow-1 px-0">' .
					'<p>Выберите чат из списка слева!</p>' .
				'</div>';
			}
		}

		public static function chatInfo()
		{
			if (CCD::activeChat() != '') {
				return '<div class="info col-3 px-0">
					<div class="bg-white">
						<div class="bg-gray px-4 py-2 bg-light">
							<p class="h5 mb-0 py-1">Инфо</p>
						</div>
						<div class="info-box">' .
							CC::infoHeader() .
						'</div>
					</div>
				</div>';
			} else {
				return;
			}
		}
	}
