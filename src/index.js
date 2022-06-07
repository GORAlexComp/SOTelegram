$(document).ready(function () {
	$('.chat-item').on('click', function () {
		var target = $(this).data('chat');

		Cookies.set('active_chat', '{"cid": "' + target + '"}');

		$.ajax({
			type: "GET",
			url: "http://chats.loc/API.php",
			data: {updateMessages: 1},
			dataType: "html",
			success: (r) => {
				$('.chatContainer').html(r);
				$('.messages-empty').replaceWith('<div class="messages"></div>');
			},
			error: (xhr, status) => {
				alert("Возникла проблема приполучении сообщений чата!");
			}
		});

		$('.chat-item').removeClass(function() {
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
		// Cookies.set('hidden_info', 'hide');
		// $('.info').hide();
		$('.chatContainer').html('<div class="messages-empty d-flex flex-column flex-grow-1 px-0"> \
			<p>Выберите чат из списка слева!</p> \
		</div>');
		$('.chat-item').removeClass('active');
		// hiddenInfo();
	});

	/*$('.dialog-info').on('click', function () {
		if ($('.info').hasClass('hidden') == true) {
			$('.info').removeClass('hidden');
			Cookies.set('hidden_info', 'view');
		} else {
			$('.info').addClass('hidden');
			Cookies.set('hidden_info', 'hide');
		}
	});*/

	/* $('.dialog-info').on('click', function () {
		if ($('.info').is(':hidden') == true) {
			$('.info').show();
			Cookies.set('hidden_info', 'view');
		} else {
			$('.info').hide();
			Cookies.set('hidden_info', 'hide');
		}
	});*/

	/*function hiddenInfo() {
		if (Cookies.get('hidden_info') == 'hide') {
			$('.info').hide();
		} else {
			$('.info').show();
		}

		return false;
	}
	hiddenInfo();*/
});
