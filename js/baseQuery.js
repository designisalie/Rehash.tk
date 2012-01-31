//IEconsoleFix grrrr.
if(!window.console || !console) console = { log : function(){} };
//DocumentReady
$(function(){
	//Base();
	dropMe();
});

//LoadAllCrapHere
function Base(){
	
}
function reply(n,c,p,r,obj){
	$.ajax({
		type: 'POST',
		url: '/ux/reply.php',
		data: 'name=' + n + '&comment=' + c + '&post-id=' + p + '&reply-id=' + r,
		success: function(x){
			if(x)
				console.log(x);
			else if(obj.hasClass('comment')){
				var lv = obj.attr('level');
				$('<div class=comment style="margin-left:'+((+lv+2)*25)+'px"><div class="inner new"><p><b>'+n+'.</b> '+c+' <em>just now</em></p></div></div>').insertAfter(obj);
			}else
				$('<div class=comment style="margin-left:25px"><div class="inner new"><p><b>'+n+'.</b> '+c+' <em>just now</em></p></div></div>').insertBefore($('#comments .thread-div'));
			
			$('#reply').hide();
		},
		error: function(){
			console.log('Reply Error');
		}
	});
}
function loadMore(c){
	var d = 0;
	if($('#history').data('current'))
		d = $('#history').data('current');
	$('<div/>',{id : 'waitMore', text : 'Loading... SLOW!!!'}).appendTo('#meow section');
	$.ajax({
		type: 'POST',
		url: '/ux/load-more.php',
		data: 'post=' + c + '&dont=' + d,
		success: function(x){
			$('#waitMore').remove();
			if(x)
				$('#meow section').append(x);
			$('#meow').data('infinite', 0);
		},
		error: function(){
			console.log('load more Error');
		}
	});
}
function thePast(h){
	$('<div/>',{id : 'timeFreeze', text : 'Loading... SLOW!!!'}).appendTo('#history');
	var p = $('#history').data('past');
	$.ajax({
		type: 'POST',
		url: '/ux/history.php',
		data: 'history=' + h + '&past=' + p,
		success: function(x){
			$('#timeFreeze').remove();
			if(x)
				$('#history').append(x).find('.histogram').each(function(){
					var postID = $(this).attr('post-id');
					if($('#main #post-'+postID).length)
						$(this).addClass('not');
				});
		},
		error: function(){
			console.log('history Error');
		}
	});
}
function swapComments(id){
	if($(document).data('post-id') !== id && !$(window).data('popped')){
		var comments = $('#comments-'+id).html();
		$('#comments').attr('post-id',id).html(comments);
		$(document).data('post-id', id);
		$(document).data('animated', 0);
		var t = $('#post-'+id+' h1').text().replace(/[^a-z0-9 -]/gi, '').replace(/\s+/g, '-').replace(/-+/g, '-');
		if(window.history.pushState && $(window).data('popstate') != id)
			window.history.pushState({ id: id }, t, '/ux/'+id+'/'+t);
			$(window).data('popstate', id);
	}
	return false;
}
function getContent(id,obj){
	$(document).data('animated', 1);
	$.ajax({
		type: 'POST',
		url: '/ux/expand.php',
		data: 'id=' + id,
		success: function(Txt){
			obj.html(Txt).addClass('article').animate({ opacity: 'toggle', height: 'toggle' },function(){
				if($.browser.safari && obj.is(':last-child')){
					$('body').stop().animate({scrollTop: obj.position().top}, 300, function(){
						swapComments(id);
					});
				}else if(obj.is(':last-child')){
					$('html').stop().animate({scrollTop: obj.position().top}, 300, function(){
						swapComments(id);
					});
				}else{
					swapComments(id);
				}
			});
			$('#message').text('');
			$('#spinny-thing').hide();
			var cookie = getCookie('visited');
			if(cookie){
				var array = cookie.split(',');
				var has = array.indexOf(id);
				if(has >= 0)
					array.splice(has,1);
				array.push(id);
				setCookie('visited',array,2222,01,22,'/ux/');
				setCookie('date',(Date.now()*.001),2222,01,22,'/ux/');
			}else{
				setCookie('visited',id,2222,01,22,'/ux/');
				setCookie('date',(Date.now()*.001),2222,01,22,'/ux/');
			}
		},
		error: function(){
			console.log('Get Content Error');
		}
	});
}

function dropMe(){
	var lz = $('#landing-zone');
	lz.removeClass('error');

	if(typeof(window.FileReader) == 'undefined') {
		lz.text('Browser Not Supported!');
		lz.addClass('error');
		return;
	}

	lz[0].ondragover = function () {
		lz.addClass('hover');
		lz.text('Drop It!');
		return false;
	}
	lz[0].ondragleave = function () {
		lz.removeClass('hover');
		lz.text('Drop Images Here to Upload.');
		return false;
	}

	lz[0].ondragend = function () {
		lz.removeClass('hover');
		lz.text('Drop Images Here to Upload.');
		return false;
	}

	lz[0].ondrop = function(e) {
		e.preventDefault();
		lz.removeClass('hover');

		var files = e.dataTransfer.files;
		var maxsize = 10; //Mb
		
		for(var i = 0, length = files.length; i < length; i++) {
				
				if(files[i].size > (maxsize * 1048576)) {
					lz.text('File Too Large!');
					lz.addClass('error');
					return false;
				}
				uploadFiles(files[i], i);
		}
	}
}
var x = 0;
function uploadFiles(file, i){
		i = x +'_'+ i;
		x++;
		var xhr = new XMLHttpRequest();
		var func = function(event) {
			var percent = parseInt(event.loaded / event.total * 100);
			if($('#lz-'+i).length)
				$('#lz-'+i).text('Uploading: ' + percent + '%');
			else
				$('<div/>', {id : 'lz-'+i, 'class' : 'lz-progress', text : 'Uploading: ' + percent + '%'}).appendTo('#uploads');
		}
		var status = function(event) {
			if (event.target.readyState == 4) {
				if (event.target.status == 200 || event.target.status == 304) {
					
					if($('#lz-'+i).length)
						$('#lz-'+i).addClass('done').html(event.target.responseText);
					else
						$('<div/>', {id : 'lz-'+i, 'class' : 'lz-progress done', html : event.target.responseText}).appendTo('#uploads');
						
					if(!$('.lz-progress:not(.done)').length)
						$('#landing-zone').text('Upload Complete!');
						
					console.log(event.target.responseText);
				}else {
					$('#landing-zone').text('Upload Failed!');
					console.log(event.target.responseText);
					if($('#lz-'+i).length)
						$('#lz-'+i).text('Upload Failed!');
					else
						$('<div/>', {id : 'lz-'+i, 'class' : 'lz-progress', text : 'Upload Failed!'}).appendTo('#uploads');
					$('#landing-zone, #lz-'+i).addClass('error');
				}
			}
		}
		xhr.upload.addEventListener('progress', func, false);
		xhr.onreadystatechange = status;
		xhr.open('POST', '/ux/upload.php', true);
		xhr.setRequestHeader('x-file-name', file.name);
		xhr.setRequestHeader('x-file-size', file.size);
		xhr.setRequestHeader('x-file-type', file.type);
		
		xhr.send(file);
}

//SetCookies
function setCookie(name, value, exp_y, exp_m, exp_d, path, domain, secure) {
	var cookie_string = name + "=" + escape ( value );
	if (exp_y) {
		var expires = new Date ( exp_y, exp_m, exp_d );
		cookie_string += "; expires=" + expires.toGMTString();
	}
	if (path)
		cookie_string += "; path=" + escape ( path );
	if (domain)
		cookie_string += "; domain=" + escape ( domain );
	if (secure)
		cookie_string += "; secure";
	document.cookie = cookie_string;
}
//GetCookies
function getCookie(cookie_name){
	var results = document.cookie.match ( '(^|;) ?' + cookie_name + '=([^;]*)(;|$)' );
	if ( results )
		return ( unescape ( results[2] ) );
	else
		return null;
}
//DeleteCookie
function deleteCookie(cookie_name){
	var cookie_date = new Date ( );
	cookie_date.setTime ( cookie_date.getTime() - 1 );
	document.cookie = cookie_name += "=; expires=" + cookie_date.toGMTString();
}