if(!token)localStorage.chat_status=='offline';
chat = {
	uri: 'https://chat.myacico.co.id',
	connect: function(){
		if(!token){
			localStorage.chat_status = 'redirect'
			return location.href = base_path + 'customer/signIn';
		}
		this.user = jwt_decode(token);
		var soc = this.soc;
		if(soc) return console.log('already connected!');
		this.box.show(400);
		this.showAnim();
		soc = io.connect(this.uri+'/?token='+token);

		soc.on('connect', function() {
			chat.hideAnim();
			$('.message-scroll').empty();
			console.log('connected');
			$('#chat_btn').hide();
			localStorage.chat_status='on';
			if(localStorage.chat_hide == 'true'){
				chat.balon.show();
				chat.box.hide(400);
			}
		});
		soc.on('disconnect', function() {
			$('.message-scroll').html('you\'re offline');
			$('#chat_btn').show();
		});
		soc.on('history', function(his){
			console.log('his:', his);
			his.forEach(function(m){
				$('.message-scroll').append(chat.addMsg(m));
			})
		});
		soc.on('msg', function(msg){
			this.addMsg(msg).insertBefore(".footer-container");
			//console.log(msg.from, 'say:', msg.txt);
			this.box.removeClass('typing')
		});
		soc.on('typing', function(){
			this.box.addClass('typing');
			setTimeout(function() {chat.box.removeClass('typing')}, 4000);
		});
	},
	sndMsg: function(){
		var txt = $('#msgInp').val();
		var msg = {from: this.user.email, txt: txt, time: new Date()};
		console.log('sendMsg:', msg);
		// soc.emit('cln_msg', msg);
		$('.message-scroll').append(chat.addMsg(msg));
		$('#msgInp').val('');
	},
	keyup: function(e){
		if(e.keyCode==13) return this.sndMsg();
		console.log('key:', e.keyCode);
		if(this.ontyping) return false;
		console.log('send ontyping event');
		this.ontyping = true;
		var that = this;
		setTimeout(function() {delete that.ontyping}, 5000);
		// soc.emit('typing');
	},
	balon: $(document.createElement('div')).attr({'class':'message-info'}).append(
		'<span class="fa fa-comments"> pesan</span>',
		/*$(document.createElement('i')).attr({'class':'fa fa-comments'}),*/
		$(document.createElement('i')).attr({'class':'fa fa-chevron-up'}).click(function(){
			chat.balon.hide();
			chat.box.show(400);
			delete localStorage.chat_hide;
		})
	),
	box: $(document.createElement('div')).attr({'class':'message-box'}).append(
		$(document.createElement('div')).attr({'class':'message-head'}).append(
			$(document.createElement('i')).attr({'class':'fa fa-chevron-down'}).click(function(){
				chat.box.hide(400);
				chat.balon.show();
				localStorage.chat_hide = true;
			}),
			$(document.createElement('i')).attr({'class':'fa fa-times'}).click(function(){
				if(!confirm('Akhiri percakapan?'))return false;
			})
		),
		$(document.createElement('div')).attr({'class':'message-scroll'}),
		$(document.createElement('div')).attr({'class':"footer-container"}).append(
			'<textarea class="text-area" id="msgInp" onkeyup="chat.keyup(event)" placeholder="your message here..."></textarea>',
			'<input type="button" value="send" onclick="chat.sndMsg()">'
		),
		'<div class="message-anim"><i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i></div>'
	),
	addMsg: function(msg){
		var d = (new Date(msg.time)).toLocaleString().split(' ');
		var t = d[1].slice(0,-3)+' '+d[2];
		var div = $('<div class="chat-bubble"><div class="message-user">'+msg.from+'</div>'+msg.txt+'<span class="messages-time">'+t+'</span></div>');
		div.addClass(this.user.iss == msg.from?'msg-right':'msg-left');
		return div;
	},
	showAnim: function(h){
		$('.message-anim').html(h?h:'<i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i>').show();
	},
	hideAnim: function(){
		$('.message-anim').hide();
	}
}

$(document).ready(function (e) {
	$.ajax({
		url: chat.uri+'/socket.io/socket.io.js',
		dataType: 'script',
		success: function(){
			$('#chat_btn').click(function(e){
				e.preventDefault();
				chat.connect()
			})
			chat.ready = true;
			console.log('chat ready');
			if(localStorage.chat_status=='on')chat.connect();
			chat.balon.appendTo('body');
			chat.box.appendTo('body');
		},
		async: true
	});
});
