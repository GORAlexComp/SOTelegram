$(document).ready(function () {
	$('.chat-item').on('click', function () {
		var target = $(this).data('chat');

		Cookies.set('active_chat', '{"cid": "' + target + '"}');

		$.get("http://chats.loc/API.php", {"updateMessages": "1"})
		.done(function (r) {
			$('.chatContainer').html(r);
			$('.messages-empty').replaceWith('<div class="messages"></div>');
		})
		.fail(function (e) {});

		$('.chat-item').removeClass(function () {
			return $(this).removeClass('active');
		});
		$(this).addClass('active');

		return false;
	});

	function activeChat() {
		if (Cookies.get('active_chat') !== undefined) {
			var active = $.parseJSON(Cookies.get('active_chat'))['cid'];
			$(`.chat-item[data-chat=${active}]`).addClass('active');

			return true;
		}

		return false;
	}
	activeChat();

	$('.chats > *').on('click', function () {
		Cookies.set('active_chat');
		$('.chatContainer').html('<div class="messages-empty d-flex flex-column flex-grow-1 px-0"> \
			<p>Выберите чат из списка слева!</p> \
		</div>');
		$('.chat-item').removeClass('active');
	});
});
