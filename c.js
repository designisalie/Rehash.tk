if(!head){
	var head = document.getElementsByTagName('head')[0],
		style = document.createElement('style'),
		rules = document.createTextNode('* {} html img.clickable {cursor:pointer;cursor:crosshair;opacity:1;}  html img.clickable:hover {opacity:.75;width:95% !important;padding:2.5%;border:none;background:#000 url(http://rgba.tk/ux/css/donut.png);}  #HELLO_MEOW {width:400px;height:100%;background:#444 url(http://rgba.tk/ux/css/donut.png);box-shadow:inset 4px 0 0 rgba(0,0,0,.15),inset 1px 0 0 rgba(0,0,0,.5),-1px 0 0 rgba(255,255,255,.15);position:fixed;z-index:100000000;top:0;right:0;} #HELLO_MEOW .imgs img {max-width:30px;height:auto;} #HELLO_MEOW button {margin:0 0 0 20px;padding:5px 10px;} #INNER_MEOW {color:#111;margin:20px;} #INNER_MEOW input, textarea {width:340px;border:none;outline:none;font:normal 11px sans-serif;padding:10px;margin:0 0 15px 0;border-radius:2px;box-shadow:0 0 0 3px rgba(0,0,0,.15), 0 0 0 1px rgba(0,0,0,.7);} #INNER_MEOW textarea {resize:vertical;max-width:340px;}');
	
	style.type = 'text/css';
	if(style.styleSheet)
		style.styleSheet.cssText = rules.nodeValue;
	else style.appendChild(rules);
	head.appendChild(style);
}
if(!b){
	var b = document.getElementsByTagName('body')[0],
		h = document.getElementsByTagName('html')[0],
		o = document.createElement('div'),
		p = document.createElement('div'),
		btn = document.createElement('button'),
		t = document.title,
		w = window.innerWidth - 417;
		s = window.location.href;
	o.id = 'HELLO_MEOW';
	p.id = 'INNER_MEOW';
	p.innerHTML = '<input id=title type=text value="'+t+'" placeholder=title /><input id=author type=text placeholder=handle /><input id=source type=text value="'+s+'" placeholder=source /><textarea id=content placeholder=content></textarea>';
	btn.innerHTML = 'Submit';
	o.appendChild(p);
	o.appendChild(btn);
	b.appendChild(o);
	h.style.maxWidth = w+'px';
	h.style.position = 'relative';
	//div.addEventListener('mousedown', xxx, false);
	
	function loadXMLDoc(i){
		var xmlhttp=new XMLHttpRequest();
		xmlhttp.onreadystatechange=function(){
			if (xmlhttp.readyState==4 && xmlhttp.status==200){
				//document.getElementById("myDiv").innerHTML=xmlhttp.responseText;
				console.log(xmlhttp.responseText);
				console.log('miao');
				//var r = document.getElementById('meow');
				//document.body.removeChild(r);
			}
		}
		
		var p = encodeURIComponent(window.location.href);
		i = encodeURIComponent(i);
		console.log(path);
		console.log(i);
		var postdata = "image="+i+"&url="+p;
	
		//xmlhttp.open("POST","http://bookmark.nullist.org/ex_mark.php",true);
		xmlhttp.open("GET"," http://rgba.tk/a/up.php?"+postdata, true);
	
		//xmlhttp.send(postdata);
		xmlhttp.send();
	}
	
	var z = function(event){
		event.preventDefault();
		var img = this.src,
			m = document.getElementById('INNER_MEOW'),
			d = document.createElement('div'),
			ii = document.createElement('img');
		d.className = 'imgs';
		ii.src = img;
		d.appendChild(ii);
		m.appendChild(d);
	};
	
	
	
	var zzz = function(event){
		event.preventDefault();
		img = this.src;
		console.log(img);
		console.log(qualifyURL(img));
		
		var path = window.location.href;
		console.log(path);
		
		loadXMLDoc(img);
		var imgz = document.getElementsByTagName('img');
		for(i=0; i < imgz.length; i++) {
			imgz[i].removeEventListener('click', zzz, false);
			removeClass(imgz[i], 'clickable');
		}
		var a = document.getElementsByTagName('a');
		for(i=0; i < a.length; i++) {
			a[i].removeEventListener('click', aaa, false);
		}
		//element = document.getElementById('coverrrr');
		//element.parentNode.removeChild(element);
		
		b = null;
	};
		
	var y = function(event){
		event.preventDefault();
	};
	
	var imgz = document.getElementsByTagName('img'),
		a = document.getElementsByTagName('a');
	for(var x=0; x < imgz.length; x++) {
		imgz[x].addEventListener('click', z, false);
		addClass(imgz[x], 'clickable');
	}
	for(var x=0; x < a.length; x++) {
		a[x].addEventListener('click', y, false);
	}
	
	function hasClass(elm,name){
	   return new RegExp('(\\s|^)'+name+'(\\s|$)').test(elm.className);
	}
	function addClass(elm,name){
		if(!hasClass(elm,name))
			elm.className += (elm.className ? ' ' : '') +name;
	}
	function removeClass(elm,name){
	   if(hasClass(elm,name))
		  elm.className=elm.className.replace(new RegExp('(\\s|^)'+name+'(\\s|$)'),' ').replace(/^\s+|\s+$/g, '');
	}


}