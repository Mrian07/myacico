if(!token)localStorage.chat_status=='offline';
let chat_url = 'https://chat.myacico.co.id';
if(localStorage.chat_url) {
	console.log('use local chat url');
	chat_url = localStorage.chat_url;
}
let chat = {
	uri: chat_url,
	connect: function(){
		if(!token){
			localStorage.chat_status = 'redirect';
			alert('Silahkan Registrasi/Log in terlebih dahulu untuk memulai percakapan dengan Customer Service kami.');
			return location.href = base_path + 'customer/signIn';
		}
		this.user = jwt_decode(token);
		if(this.soc) return console.log('already connected!');
		this.box.show(400);
		this.showAnim();
		this.soc = io.connect(this.uri+'/?token='+token);

		this.soc.on('connect', function() {
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
		this.soc.on('disconnect', function() {
			$('.message-scroll').html('you\'re offline');
			$('#chat_btn').show();
		});
		this.soc.on('history', function(his){
			// console.log('his:', his);
			his.forEach(function(m){
				$('.message-scroll').append(chat.addMsg(m));
			});
			chat.scrollToButtom();
		});
		this.soc.on('msg', function(msg){
			$('.message-scroll').append(chat.addMsg(msg));
			//console.log(msg.from, 'say:', msg.txt);
			$('#chat-info').empty();
			chat.scrollToButtom();
		});
		this.soc.on('typing', function(cs){
			function info(name) {
				$('#chat-info').html('<b>' + name + '</b> is typing...');
				setTimeout(function() {$('#chat-info').empty()}, 4000);
			}
			if(!chat.cs || chat.cs.email != cs) {
				chat.soc.emit('get_cs_detail', cs);
				chat.cs_cb = info;
			}
			else info(chat.cs.name);
		});
		this.soc.on('cs_detail', function(cs) {
			chat.cs = cs;
			if(typeof chat.cs_cb == 'function') {
				chat.cs_cb(cs.name);
				delete chat.cs_cb;
			}
		});
	},
	sndMsg: function(n){
		var txt = $('#msgInp').val();
		var msg = {from: this.user.iss, txt: n ? txt.slice(0,n):txt, time: new Date()};
		$('#msgInp').val('');
		if(txt.length == 0 || txt == '\n') return;
		console.log('sendMsg:', msg);
		this.soc.emit('cln_msg', msg);
		$('.message-scroll').append(chat.addMsg(msg));
		this.scrollToButtom();
	},
	keydown: function(e) {
		if(e.keyCode==16) this.shift_key = true;
	},
	keyup: function(e) {
		if(e.keyCode==16) delete this.shift_key;
		if(e.keyCode==13 && !this.shift_key) return this.sndMsg(-1);
		if(this.ontyping) return false;
		this.ontyping = true;
		setTimeout(function() {delete this.ontyping}.bind(this), 5000);
		this.soc.emit('typing');
	},
	balon: $(document.createElement('div')).attr({'class':'message-info'}).append(
		'<span class="fa fa-comments icon-balon"></span>','<div class="index-pesan">Pesan</div>',
		/*$(document.createElement('i')).attr({'class':'fa fa-comments'}),*/
		$(document.createElement('i')).attr({'class':'fa fa-chevron-up arrow-up'}).click(function(){
			chat.balon.hide();
			chat.box.show(400);
			delete localStorage.chat_hide;
		})
	),
	box: $(document.createElement('div')).attr({'class':'message-box'}).append(
		$(document.createElement('div')).attr({'class':'message-head'}).append(
			'<div id="chat-info"></div>',
			$(document.createElement('i')).attr({'class':'fa fa-chevron-down'}).click(function(){
				chat.box.hide(400);
				chat.balon.show();
				localStorage.chat_hide = true;
			}),
			$(document.createElement('i')).attr({'class':'fa fa-times'}).click(function(){
				if(!confirm('Akhiri percakapan?'))return false;
				chat.soc.emit('close_msg');
				chat.soc.disconnect();
				chat.box.hide(400);
				$('#chat_btn').show();
				localStorage.chat_status='off';
			})
		),
		$(document.createElement('div')).attr({'class':'message-scroll'}),
		$(document.createElement('div')).attr({'class':"footer-container"}).append(
			'<textarea class="text-area" id="msgInp" onkeydown="chat.keydown(event)" onkeyup="chat.keyup(event)" placeholder="your message here..."></textarea>',
			'<input type="button" class="btn-chat" value="send" onclick="chat.sndMsg()">'
		),
		'<div class="message-anim"><i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i></div>'
	),
	addMsg: function(msg){
		var d = (new Date(msg.time)).toLocaleString().split(' ');
		var t = d[1].slice(0,-3)+' '+d[2];
		let sender = msg.from;
		if(sender == chat.cs.email) sender = chat.cs.name;
		if(msg.txt.length == 0) return;
		var div = $('<div class="chat-bubble"><div class="message-user">'+sender+'</div>'+msg.txt.replace(/\r?\n/g, '<br>')+'<span class="messages-time">'+t+'</span></div>');
		var c = 'msg-left';
		if(this.user.iss == msg.from) c = 'msg-right';
		if('sys' == msg.from) c = 'msg-sys';
		div.addClass(c);
		return div;
	},
	showAnim: function(h){
		$('.message-anim').html(h?h:'<i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i>').show();
	},
	hideAnim: function(){
		$('.message-anim').hide();
	},
	scrollToButtom: function() {
		const el = document.getElementsByClassName('message-scroll')[0];
		clearTimeout(this.scrollTimer);
		this.scrollTimer = setTimeout(function(){
			el.scrollTop = el.scrollHeight;
		}, 800);
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
			if(localStorage.chat_status=='on' || (localStorage.chat_status=='redirect' && token))chat.connect();
			chat.balon.appendTo('body');
			chat.box.appendTo('body');
		},
		async: true
	});
});
