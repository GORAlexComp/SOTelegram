<?php
	date_default_timezone_set('Europe/Kiev');
	setlocale(LC_ALL, 'ru_RU.utf8');

	if (!is_dir('/vendor')) {
		require_once 'vendor/autoload.php';
	} else {
		print '<p style="color: red; font-size: 1.2rem">Нужно выполнить <code style="color: white; background-color: red; padding: 3px 5px">Composer install</code> перед использованием кода!</p>';
		exit;
	}

	use Controllers\Content as C;
	use Controllers\ChatsData as Chats;
	use Controllers\MessagesData as Messages;
	use Controllers\Tools as Tools;

	use Controllers\CurrentChatData as CCD;
	
/* 	if (!setcookie('active_chat')) {
		setcookie('active_chat', '{"cid": "0"}');
	} */

	// print_r(Chats::getName(CCD::activeChat()));
?>
	<?= !require('Modules/head.php') ?>
		<div class="main-container container-fluid w-100 h-100 m-0 d-flex mx-auto flex-column">
			<div class="row rounded-lg overflow-hidden vh-100">
				<div class="chats col-2 px-0">
					<div class="bg-white">
						<div class="bg-gray px-4 py-2 bg-light">
							<p class="h5 mb-0 py-1">Чаты</p>
						</div>
						<div class="chat-box">
							<div class="list-group rounded-0">
								<?php
									foreach (Chats::getChats() as $chat) {
										$lastDate = Tools::formatDate(Messages::getLastMessageDate($chat['uid'])[0]['date']);
										$lastMessage = Messages::getLastMessageContent($chat['uid'])[0]['content'];
										$lastMessageCut = mb_substr($lastMessage , 0, 16);

										echo '<a class="list-group-item list-group-item-action rounded-0 border-0 border-bottom-1 chat-item" data-chat="' . $chat['uid'] . '">
											<div class="media">
												<img src="' . $chat['avatar'] . '" alt="user" width="50" class="rounded-circle">
												<div class="media-body ml-4">
													<div class="d-flex align-items-center justify-content-between mb-1 header-chat-item">
														<h6 class="mb-0">' . mb_substr(Chats::getFullName($chat['uid']), 0, 23) . '</h6>
													</div>
													<div class="d-flex">
														<p class="font-italic text-muted mb-0 text-small flex-fill last-message">' . (strlen($lastMessage) >= 20 ? $lastMessageCut . ' ...' : $lastMessageCut) . '</p>
														<small class="small font-weight-bold last-message-time">' .
															$lastDate .
														'</small>
													</div>
												</div>
											</div>
										</a>';
									}
								?>
							</div>
						</div>
					</div>
				</div>
				<div class="chatContainer d-flex flex-grow-1">
					<?=C::chat()?>
					<?=C::chatInfo()?>
				</div>
			</div>
		</div>
<?= !require('Modules/foot.php') ?>
