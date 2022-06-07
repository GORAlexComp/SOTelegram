<?php
	namespace Controllers;

	use Controllers\CurrentChatData as CCD;
	use Controllers\MessagesData as MD;
	use Controllers\ChatsData as CD;

	class ContentConstructor extends CCD
	{
		public static function header()
		{
			return '<div class="header-chat bg-white d-flex px-4 py-1">
			<img src="' . CD::getAvatar(CCD::activeChat())[0]['avatar'] . '" alt="user" width="50" class="rounded-circle">
			<p class="h5 mb-0 py-2 flex-fill">' . CD::getName(CCD::activeChat())[0]['name'] . '</p>
				<div class="dialog-info">
					<button class="btn h5 btn-link text-decoration-none text-dark mb-0" type="button" title="Информация о диалоге">
						<i class="fa fa-info-circle"></i>
					</button>
				</div>
			</div>';
		}
		
		public static function messages()
		{
			$messages = MD::getAllMessages(CCD::activeChat());
			$result = '<div class="px-4 py-5 chat-box">';
			
			$sender = '';
			
			foreach ($messages as $message) {

				if ($message['sender'] == $sender) {
					$result .= '<script class="del-script">$(\'.chat-box .media:last img\').remove();</script>';
					if ($message['sender'] == $message['uid']) {
						$result .= '<div class="media message-user mb-3">
							<img src="' . CD::getChat($message['sender'])[0]['avatar'] . '" alt="user" width="50" class="rounded-circle">
							<div class="media-body ml-3">
								<div class="bg-light rounded py-2 px-3 mb-2">
									<p class="text-small mb-0 text-muted">' . $message['content'] . '</p>
									<p class="small date-dark">' . $message['date'] . '</p>
								</div>
							</div>
						</div>';
					} else {
						$result .= '<div class="media message-manager ml-auto mb-3">
							<div class="media-body">
								<div class="bg-primary rounded py-2 px-3 mb-2">
									<p class="text-small mb-0 text-white">' . $message['content'] . '</p>
									<p class="small date-light">' . $message['date'] . '</p>
								</div>
							</div>
							<img src="' . CD::getChat($message['sender'])[0]['avatar'] . '" alt="user" width="50" class="rounded-circle">
						</div>';
					}

				} else {
					if ($message['sender'] == $message['uid']) {
						$result .= '<div class="media message-user mb-3">
							<img src="' . CD::getChat($message['sender'])[0]['avatar'] . '" alt="user" width="50" class="rounded-circle">
							<div class="media-body ml-3">
								<div class="bg-light rounded py-2 px-3 mb-2">
									<p class="text-small mb-0 text-muted">' . $message['content'] . '</p>
									<p class="small date-dark">' . $message['date'] . '</p>
								</div>
							</div>
						</div>';
					} else {
						$result .= '<div class="media message-manager ml-auto mb-3">
							<div class="media-body">
								<div class="bg-primary rounded py-2 px-3 mb-2">
									<p class="text-small mb-0 text-white">' . $message['content'] . '</p>
									<p class="small date-light">' . $message['date'] . '</p>
								</div>
							</div>
							<img src="' . CD::getChat($message['sender'])[0]['avatar'] . '" alt="user" width="50" class="rounded-circle">
						</div>';
					}
				}

				$sender = $message['sender'];
			}

			return $result . '</div>';
		}

		public static function formMessage()
		{
			return '<form action="#" class="bg-light">
				<div class="input-group">
					<input type="text" placeholder="Введите сообщение" aria-describedby="button-addon2" class="form-control rounded-0 border-0 py-4 bg-light">
					<div class="input-group-append">
						<button id="button-addon2" type="submit" class="btn btn-link" title="Отправить сообщение"> <i class="fa fa-paper-plane"></i></button>
					</div>
				</div>
			</form>';
		}

		public static function infoHeader()
		{
			return '<div class="list-group rounded-0">
				<a class="list-group-item list-group-item-action active text-white rounded-0">
					<div class="media">
						<img src="https://bootstrapious.com/i/snippets/sn-chat/avatar.svg" alt="user" width="50" class="rounded-circle">
						<div class="media-body ml-4">
							<div class="d-flex align-items-center justify-content-between mb-1">
								<h6 class="mb-0">Jason Doe</h6><small class="small font-weight-bold">25 Dec</small>
							</div>
							<p class="font-italic text-muted mb-0 text-small">Lorem ipsum dolor sit amet...</p>
						</div>
					</div>
				</a>
			</div>';
		}
	}
