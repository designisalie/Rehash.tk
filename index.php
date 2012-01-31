<!doctype html>
<html>
<head>
    <meta charset='utf-8' />
    <title>--&gt;</title>
    <link rel='stylesheet' href='/ux/css/layout.css'>
    <link rel='shortcut icon' href='/ux/favicon.ico'/>
    <style>
		html {color:#333;font:normal 11px sans-serif;min-width:1025px;overflow-x:hidden;
			background:#746b57 url(/ux/css/wood.gif) fixed;/*#4a4438*/
			filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#746b57', endColorstr='#4a4438',GradientType=0 );
			background-image: -o-linear-gradient(bottom, rgb(74,68,56) 0%, rgb(116,107,87) 100%);
			background-image: -moz-linear-gradient(bottom, rgb(74,68,56) 0%, rgb(116,107,87) 100%);
			background-image: -webkit-linear-gradient(bottom, rgb(74,68,56) 0%, rgb(116,107,87) 100%);
			background-image: -ms-linear-gradient(bottom, rgb(74,68,56) 0%, rgb(116,107,87) 100%);
			background-image: linear-gradient(bottom, rgb(74,68,56) 0%, rgb(116,107,87) 100%);
		}
		body {}
		@-webkit-keyframes spinner {
			from { -webkit-transform: perspective(25px) rotateY(180deg) rotateX(270deg) rotateZ(90deg) translateZ(-0);}
			to   { -webkit-transform: perspective(25px) rotateY(-180deg) rotateX(-270deg) rotateZ(-90deg) translateZ(0);}
		}
		#spinny-thing {width:25px;height:25px;background:rgba(0,0,0,.75);position:fixed;top:10px;left:685px;z-index:9999;box-shadow:-1px 1px 0 rgba(255,0,0,.05), 1px -1px 0 rgba(0,255,255,.05);-webkit-animation-name:spinner;-webkit-animation-timing-function:linear;-webkit-animation-iteration-count:infinite;-webkit-animation-duration:1s;-webkit-transform-style:preserve-3d;display:none;}
		#ahso {position:fixed;height:100%;}
		#meow {height:100%;width:377px;overflow-y:hidden;background:#698e5e url(/ux/css/donut.png);box-shadow: inset -2px 0 0 rgba(0,0,0,.1), 1px 0 0px rgba(0,0,0,.5), 2px 0 0px rgba(255,255,255,.15);-webkit-transition:background-color 4s ease-in;-moz-transition:background-color 5s ease-in;-o-transition:background-color 5s ease-in;-ms-transition:background-color 5s ease-in;transition:background-color 5s ease-in;}
			#meow .spacer {height:45px;}
			#meow .card {width:333px;color:#777;margin:10px 22px 20px;cursor:move;background:#3a3a3a;font:normal 12px Georgia, serif;line-height:18px;text-align:justify;box-shadow:0 5px 0 rgba(0,0,0,.15);
			-webkit-transform:perspective(500px) rotateX(0deg) rotateY(0deg);-moz-transform:perspective(500px) rotateX(0deg) rotateY(0deg);-o-transform:perspective(500px) rotateX(0deg) rotateY(0deg);-ms-transform:perspective(500px) rotateX(0deg) rotateY(0deg);transform:perspective(500px) rotateX(0deg) rotateY(0deg);-webkit-transition: -webkit-transform .3s ease-in-out, box-shadow .3s ease-in-out;-moz-transition:-moz-transform .3s ease-in-out, box-shadow .3s ease-in-out;-o-transition:-o-transform .3s ease-in-out, box-shadow .3s ease-in-out;-ms-transition:-ms-transform .3s ease-in-out, box-shadow .3s ease-in-out;transition:transform .3s ease-in-out, box-shadow .3s ease-in-out;position:relative;}
			.card .fancy {position:absolute;top:0;left:0;width:100%;height:100%;box-shadow:0 0 1px rgba(0,0,0,.5), inset 0 0 1px black, inset 0 2px 0 rgba(255,255,255,.2), inset 0 1px 0 rgba(0,0,0,.25), inset 0 -1px 0px rgba(255,255,255,.2), 0 3px 0 #333;border-bottom-left-radius:2px;border-bottom-right-radius:2px;}
			/*#meow .technology {background:#67e2ff;}
			#meow .automotive {background:#7deb78;}
			#meow .medical {background:#fffa8e;}
			#meow .news {background:#ffb0f8;}*/
			.card p {padding:7px 10px 10px;font:normal 12px SerifaRoman, georgia, serif;color:#aaa;text-shadow: 0 1px 0 rgba(255,255,255,.1), 0 -1px 0 rgba(0,0,0,.2);}
			.card:hover .spot.technology {color:#67e2ff;}
			.card:hover .spot.automotive {color:#7deb78;}
			.card:hover .spot.medical {color:#fffa8e;}
			.card:hover .spot.news {color:#ffb0f8;}
		.holder {filter:alpha(opacity=50);opacity:.5;}
		#meow .card.grrr {/*box-shadow:0 0 5px rgba(0,0,0,.2);-webkit-transition:box-shadow .15s ease-in;*/box-shadow:0 20px 5px rgba(0,0,0,.2), -1px 0 0 rgba(255,0,0,.2), 1px 0 0 rgba(0,255,255,.2);-webkit-transform:perspective(1000px) rotateX(10deg) rotateY(5deg) scale(1.075);-moz-transform:perspective(1000px) rotateX(10deg) rotateY(5deg) scale(1.05);-o-transform:perspective(1000px) rotateX(10deg) rotateY(5deg) scale(1.05);-ms-transform:perspective(1000px) rotateX(10deg) rotateY(5deg) scale(1.05);transform:perspective(1000px) rotateX(10deg) rotateY(5deg) scale(1.05);}
		#meow .grrr p, #meow .grrr h2, #meow .grrr h3 {-webkit-transition:text-shadow .2s ease-in;text-shadow:3px 0 0 rgba(0,255,255,.5), -3px 0 0 rgba(255,0,0,.5);}
		#theEnd, #waitMore, #itsBroke, #notHere, #thePast, #nomNom, #theBeginning, #timeFreeze {margin:0 auto;padding:7px 20px 15px;text-align:center;font:normal 25px UniversUltraCon, sans-serif;display:block;}
		.card .slice {max-height:300px;overflow:hidden;position:relative;display:block;box-shadow:0 1px 0 rgba(0,0,0,.25);}
		.card .slice img {width:100%;height:auto;display:block;opacity:.75;rendering-intent:saturation;/*border-top-left-radius:3px;border-top-right-radius:3px;*/}
		.card .slice .img {filter:url(#desaturate);}
		.card .slice .img:hover {filter:url(#saturate);}
		.card .slice h2 {position:absolute;bottom:10px;left:10px;font:normal 43px UniversUltraCon, sans-serif;color:#fff;text-align:left;line-height:35px;margin-right:10px;z-index:1;letter-spacing:0;text-transform:uppercase;text-shadow: 0 1px 0 rgba(255,255,255,.1), 0 -1px 0 rgba(0,0,0,.1);}
		.card .slice .grad {display:none;height:100%;width:100%;position:absolute;bottom:0;left:0;background:-webkit-linear-gradient(left top,#111,#fff);background:-moz-linear-gradient(left top,#111,#fff);background:-o-linear-gradient(left top,#111,#fff);background:linear-gradient(left top,#111,#fff);opacity:.7;}
		.card .no-img {position:static;display:block;padding:10px 10px 3px;font:normal 43px UniversUltraCon,sans-serif;color:#fff;text-align:left;line-height:34px;letter-spacing:0;text-transform:uppercase;}
		.card .slice:hover .grad {display:block;}
		
		.card .meta {padding:0 10px 5px;}
			.card .comments {font:normal 11px SerifaRoman, georgia, serif;color:#222;float:left;text-shadow: 0 1px 0 rgba(255,255,255,.1), 0 -1px 0 rgba(0,0,0,.2);}
				.card .comments span {color:#1c1c1c;-webkit-transition:color .1s ease-in;-moz-transition:color .1s ease-in;-o-transition:color .1s ease-in;-ms-transition:color .1s ease-in;transition:color .1s ease-in;}
				.card:hover .comments span {color:#fff;}
			.card .spot {font:italic 11px SerifaRoman, georgia, serif;float:left;margin-left:10px;padding:0 4px 0 2px;border-radius:3px;color:#222;text-shadow:0 1px 0 rgba(255,255,255,.1), 0 -1px 0 rgba(0,0,0,.2);-webkit-transition:color .15s ease-in .1s;-moz-transition:color .15s ease-in .1s;-o-transition:color .15s ease-in .1s;-ms-transition:color .15s ease-in .1s;transition:color .15s ease-in .1s;}
			.card .date {font:normal 11px SerifaRoman, georgia, serif;color:#222;text-align:right;margin-right:25px;text-shadow: 0 1px 0 rgba(255,255,255,.1), 0 -1px 0 rgba(0,0,0,.2);-webkit-transition:color .2s ease-in .2s;-moz-transition:color .2s ease-in .2s;-o-transition:color .2s ease-in .2s;-ms-transition:color .2s ease-in .2s;transition:color .2s ease-in .2s;}
				.card:hover .date {color:#ccc;}
			.card .marks {float:right;line-height:11px;}
			.card .marks span {width:1px;height:10px;display:inline-block;background:#222;margin-right:2px;vertical-align:bottom;box-shadow: 1px 1px 1px rgba(255,255,255,.1);}
				/*.card .marks.technology span {background:#67e2ff;}
				.card .marks.automotive span {background:#7deb78;}
				.card .marks.medical span {background:#fffa8e;}
				.card .marks.news span {background:#ffb0f8;}*/

		.grrr .wrap {display:none;}
		
		#main {width:650px;position:relative;top:55px;margin:0 25px 0 400px;padding-bottom:50px;}
			#message {position:fixed;top:15px;left:400px;font:normal 14px SerifaRoman, georgia, serif;color:#333;text-shadow: 0 1px 0px rgba(255,255,255,.1), 0 -1px 0 rgba(0,0,0,.1);}
			.here {height:350px;width:100%;color:#222;position:relative;border-radius:3px;cursor:default;}
				.here:hover {}
				.hurr {opacity:0;-webkit-transition:all .2s ease-in;-moz-transition:all .2s ease-in;-o-transition:all .2s ease-in;transition:all .2s ease-in;cursor:default;display:block;color:#333;-webkit-transform:perspective(500px) rotateX(0deg) rotateY(0deg);-moz-transform:perspective(500px) rotateX(0deg) rotateY(0deg);-o-transform:perspective(500px) rotateX(0deg) rotateY(0deg);-ms-transform:perspective(500px) rotateX(0deg) rotateY(0deg);transform:perspective(500px) rotateX(0deg) rotateY(0deg);position:relative;z-index:7;}
				.hurr:hover {text-shadow:8px 0 0 rgba(0,255,255,.5), -8px 0 0 rgba(255,0,0,.5);color:rgba(0,0,0,.5);-webkit-transform:perspective(500px) rotateX(10deg) rotateY(15deg);-moz-transform:perspective(500px) rotateX(10deg) rotateY(15deg);-o-transform:perspective(500px) rotateX(10deg) rotateY(15deg);-ms-transform:perspective(500px) rotateX(10deg) rotateY(15deg);transform:perspective(500px) rotateX(10deg) rotateY(15deg);}
				.magic {opacity:0;color:#fcd6d8;line-height:70px;-webkit-transition:opacity .2s ease-in;-moz-transition:opacity .2s ease-in;-o-transition:opacity .2s ease-in;transition:opacity .2s ease-in;}
				.magic:hover {opacity:1;}
			.here .txt {font:normal 70px UniversUltraCon, sans-serif;line-height:56px;text-transform:uppercase;}
			.here .stay {color: #333;line-height: 66px;text-shadow: 0 1px 1px rgba(255,255,255,.15), 0 -1px 0 rgba(0,0,0,.15);}
			#welcome {position:absolute;left:400px;top:15px;font:normal 14px SerifaRoman, georgia, serif;color:#333;text-shadow: 0 1px 0px rgba(255,255,255,.1), 0 -1px 0 rgba(0,0,0,.1);}
						
		#main .post {margin:0 0 30px;}
		#main .post .wrap {background:white;border-radius:2px;position:relative;box-shadow:0 0 0 3px rgba(0,0,0,.15), 0 0 01px rgba(0,0,0,.7);}
		#main .post h1 {font:normal 70px UniversUltraCon, sans-serif;max-width:500px;padding:20px 20px 15px;letter-spacing:0;line-height:56px;text-transform:uppercase;-webkit-transition:all .2s ease-in;-moz-transition:all .2s ease-in;-o-transition:all .2s ease-in;-ms-transition:all .2s ease-in;transition:all .2s ease-in;-webkit-transform:perspective(500px) rotateX(0deg) rotateY(0deg);-moz-transform:perspective(500px) rotateX(0deg) rotateY(0deg);-o-transform:perspective(500px) rotateX(0deg) rotateY(0deg);-ms-transform:perspective(500px) rotateX(0deg) rotateY(0deg);transform:perspective(500px) rotateX(0deg) rotateY(0deg);}
		#main .post h1:hover {text-shadow:5px 0 0 rgba(0,255,255,.5), -5px 0 0 rgba(255,0,0,.5);color:rgba(0,0,0,.5);-webkit-transform:perspective(500px) rotateX(10deg) rotateY(10deg);-moz-transform:perspective(500px) rotateX(10deg) rotateY(10deg);-o-transform:perspective(500px) rotateX(10deg) rotateY(10deg);-ms-transform:perspective(500px) rotateX(10deg) rotateY(10deg);transform:perspective(500px) rotateX(10deg) rotateY(10deg);}
		#main .post .bahr {background:#ed1f24;padding:0;/*border:15px solid #f4383e;border-left:none;border-right:none;*/padding:15px 0;font:normal 14px SerifaRoman, georgia, serif;line-height:20px;font-style:italic;color:white;text-transform:uppercase;margin:0 0 10px 0;box-shadow:inset 0 1px 0 rgba(0,0,0,.01),inset 0 -1px 0 rgba(0,0,0,.09),inset 0 2px 0 rgba(255,255,255,.5),inset 0 -2px 0 rgba(255,255,255,.5),inset 1px 0 0 rgba(255,255,255,.35),inset -1px 0 0 rgba(255,255,255,.35);}
			#main .post .bahr.technology {background:#7ee2ff;border-color:#7ee2ff;}
			#main .post .bahr.automotive {background:#8deb78;border-color:#8deb78;}
			#main .post .bahr.medical {background:#fffc8e;border-color:#fffc8e;}
			#main .post .bahr.news {background:#ffc0f8;border-color:#ffc0f8;}
			#main .post .bahr.technology .meta{background:#67e2ff;}
			#main .post .bahr.automotive .meta{background:#7deb78;}
			#main .post .bahr.medical .meta{background:#fffa8e;}
			#main .post .bahr.news .meta {background:#ffb0f8;}
		#main .post .bahr .meta {background:#ed1f24;margin:0 1px;border-bottom:solid 1px rgba(255,255,255,.35);border-top:solid 1px rgba(0,0,0,.035);}	
		#main .post .bahr .cat {padding:0 25px;text-shadow: 0 -1px 1px rgba(0,0,0,.1);}
		#main .post .bahr .date {padding:0 25px;float:right;text-shadow: 0 -1px 1px rgba(0,0,0,.1);}
		#main .mini-bahr {width:50px;height:50px;margin:35px auto;border-radius:50px;border:3px solid rgba(0,0,0,.15);clear:both;}
			#main .mini-bahr .ball {width:50px;height:50px;background:#ed1f24;border-radius:50px;box-shadow:0 0 0 1px rgba(0,0,0,.5), inset 0 0 3px rgba(255,255,255,.9)}
			#main .mini-bahr.technology .ball {background:#67e2ff;}
			#main .mini-bahr.automotive .ball {background:#7deb78;}
			#main .mini-bahr.medical .ball {background:#fffa8e;}
			#main .mini-bahr.news .ball {background:#ffb0f8;}
		#main .post .content {padding:0 25px 25px;}
		#main .post p {padding:10px 0 15px 170px;font:normal 14px SerifaRoman, georgia, serif;text-align:justify;line-height:24px;}
		#main .post .notes {padding:15px 25px 15px 0;font:normal 9px sans-serif;clear:left;float:left;text-align:left;max-width:600px;}
		#main .post .note-155 {width:155px;padding:15px 15px 15px 0;}
		/*
		#main .post .text {padding:10px 0 15px 170px;font:normal 14px SerifaRoman, georgia, serif;text-align:justify;line-height:24px;}
		#main .post .notes {padding:15px 25px 15px 0;margin-left:0;font:normal 9px sans-serif;clear:left;float:left;text-align:left;max-width:600px;}
		#main .post .text .notes {margin-left:-170px;}
		#main .post .note-155 {width:155px;padding:15px 15px 15px 0;margin-left:0;}
		*/
		#main .post .expand {cursor:pointer;font:normal 12px serif;color:#666;}
		#main .post img {max-width:600px;height:auto;padding:0 0 10px 0;}
		#main .post p img {height:auto;padding:0;}
		#main .post .notes img {max-width:220px;height:auto;cursor:pointer;-webkit-transition:max-width .3s ease-in-out;-moz-transition:max-width .3s ease-in-out;-o-transition:max-width .3s ease-in-out;-ms-transition:max-width .3s ease-in-out;transition:max-width .3s ease-in-out;}
		
		.ctrls {position:absolute;top:20px;right:20px;}
		.ctrls .bubble {float:right;cursor:pointer;}
		
		.ctrls .bubble .box {width:20px;height:14px;background:#eee;}
		.ctrls .bubble .tip {width:0;height:0;margin-left:12px;border-bottom:4px solid transparent;border-right:4px solid #eee;}
			.ctrls .bubble:hover .box {background:#666;}
			.ctrls .bubble:hover .tip {border-right-color:#666;}
		.ctrls .minimize {width:20px;height:12px;border-bottom:2px solid #eee;float:right;margin-right:5px;cursor:pointer;}
		.ctrls .maximize {width:18px;height:10px;border:2px solid #eee;background:#f4f4f4;}
			.ctrls .minimize:hover, .ctrls .maximize:hover {border-color:#666;}
		
		
		#history {width:610px;margin:10px 25px 0 400px;padding:20px 20px 0;position:relative;z-index:5;border-top-left-radius:2px;border-top-right-radius:2px;}
		#history h1 {font:normal 15px SerifaRoman, sans-serif;text-shadow: 0 1px 1px rgba(255,255,255,.1), 0 -1px 0 rgba(0,0,0,.1);}
		#history .histogram {margin:5px 0;padding:10px 10px;clear:both;cursor:pointer;display:block;color:#333;border-radius:2px;box-shadow:0 0 0 3px rgba(0,0,0,.15), 0 0 0 1px rgba(0,0,0,.7);-webkit-transition:-webkit-transform .15s ease-in-out;-moz-transition:-moz-transform .15s ease-in-out;-o-transition:-o-transform .15s ease-in-out;-ms-transition:-ms-transform .15s ease-in-out;transition:transform .15s ease-in-out;-webkit-transform:perspective(500px) rotateX(0deg) rotateY(0deg);-moz-transform:perspective(500px) rotateX(0deg) rotateY(0deg);-o-transform:perspective(500px) rotateX(0deg) rotateY(0deg);-ms-transform:perspective(500px) rotateX(0deg) rotateY(0deg);transform:perspective(500px) rotateX(0deg) rotateY(0deg);}
			#history .histogram:hover {background:#fafafa;color:#111;}
		#history .histogram.odd {background:#fafafa;-webkit-transform:perspective(500px) rotateX(0deg) rotateY(-5deg);-moz-transform:perspective(500px) rotateX(0deg) rotateY(-5deg);-o-transform:perspective(500px) rotateX(0deg) rotateY(-5deg);-ms-transform:perspective(500px) rotateX(0deg) rotateY(-5deg);transform:perspective(500px) rotateX(0deg) rotateY(-5deg);}
		#history .histogram.odd:hover {-webkit-transform:perspective(500px) rotateX(-5deg) rotateY(-10deg) scale(1.05);-moz-transform:perspective(500px) rotateX(5deg) rotateY(-10deg) scale(1.05);-o-transform:perspective(500px) rotateX(5deg) rotateY(-10deg) scale(1.05);-ms-transform:perspective(500px) rotateX(5deg) rotateY(-10deg) scale(1.05);transform:perspective(500px) rotateX(5deg) rotateY(-10deg) scale(1.05);}
		#history .histogram.even {background:white;-webkit-transform:perspective(500px) rotateX(5deg) rotateY(5deg);-moz-transform:perspective(500px) rotateX(5deg) rotateY(5deg);-o-transform:perspective(500px) rotateX(5deg) rotateY(5deg);-ms-transform:perspective(500px) rotateX(5deg) rotateY(5deg);transform:perspective(500px) rotateX(5deg) rotateY(5deg);}
		#history .histogram.even:hover {-webkit-transform:perspective(500px) rotateX(10deg) rotateY(10deg) scale(1.05);-moz-transform:perspective(500px) rotateX(10deg) rotateY(10deg) scale(1.05);-o-transform:perspective(500px) rotateX(10deg) rotateY(10deg) scale(1.05);-ms-transform:perspective(500px) rotateX(10deg) rotateY(10deg) scale(1.05);transform:perspective(500px) rotateX(10deg) rotateY(10deg) scale(1.05);}
		#history .histogram.not {text-decoration:line-through;color:#444;}
		#history .histogram .img {width:30px;height:30px;overflow:hidden;margin-right:15px;float:left;}
			#history .histogram .img img {width:auto;max-height:55px;}
		#history .histogram h2 {font:normal 30px UniversUltraCon, sans-serif;white-space:nowrap;text-overflow:ellipsis;overflow:hidden;}
		#history .histogram p {font:normal 11px SerifaRoman, georgia, serif;}
		
		#recent {height:100%;position:fixed;top:0;right:0;overflow-y:hidden;background:rgba(0,0,0,.2) url(/ux/css/donut.png);display:none;box-shadow:inset 2px 0 0 rgba(0,0,0,.1), -1px 0 0 rgba(0,0,0,.5), -2px 0 0 rgba(255,255,255,.15);}
			#recent .comment-mark {display:none;width:0;height:0;border-top:15px solid transparent;border-bottom:15px solid transparent;border-right:16px solid #444;position:fixed;margin:100px 0 0 -14px;}
			#recent .comment-mark span {height:30px;width:15px;position:absolute;top:-15px;z-index:2222;background:url(/ux/css/donut.png) 14px 0;}
		#comments {padding-top:40px;min-width:250px;}
		
		#comments .comment {margin:15px 25px;}
		#comments .comment .inner {background:white;padding:10px;border-radius:2px;font:normal 11px sans-serif;color:#666;position:relative;box-shadow:0 0 0 3px rgba(0,0,0,.15), 0 0 0 1px rgba(0,0,0,.7);} 
		#comments .comment .new {background:#ffc;}
			#comments .comment p {white-space:normal;text-overflow:ellipsis;overflow:hidden;}
			#comments .comment p em {font-size:10px;color:#aaa;}
			#comments .comment .replys {padding:10px 15px;margin:-10px 10px 0 -10px;background:#eee;left:0;text-align:center;float:left;border-top-left-radius:2px;border-bottom-left-radius:2px;color:white;font-weight:bold;}
			#comments .comment .reply {font:normal 10px SerifaRoman, georgia, serif;}
			#reply {margin:0;display:none;}
				#reply textarea, input[type=text] {width:100%;background:white;padding:10px 0;font:normal 11px SerifaRoman, sans-serif;color:#666;border:none;outline:none;display:block;}
				#reply textarea {height:50px;resize:vertical;}
				#reply button {cursor:pointer;border:none;background:transparent;color:#666;padding:0;font:normal 16px SerifaRoman, georgia, serif;text-shadow:0 1px 1px rgba(255,255,255,.75);margin-right:5px;}
				#reply button:hover {color:#999;}
				#reply button:active {color:#444;margin:1px 5px -1px 0;}
				#reply button:focus {color:#999;}
				#reply span {font:normal 10px SerifaRoman, georgia, serif;}
			#comments .thread-div {margin:15px 25px;border-radius:2px;box-shadow:0 0 0 3px rgba(0,0,0,.15), 0 0 0 1px rgba(0,0,0,.7);}
			#comments .start-thread {text-align:center;background:#eee;display:block;padding:10px;border-radius:2px;font:normal 14px SerifaRoman, georgia, serif;text-shadow:0 1px 1px rgba(255,255,255,.75);}
			#comments .start-thread:hover {background:#ddd;}
			#comments .thread-div #reply {background:white;margin:0;padding:0 10px 10px 10px;border-radius:2px;box-shadow:1px 0 0 rgba(0,0,0,.7),-1px 0 0 rgba(0,0,0,.7), 0 1px 0 rgba(0,0,0,.7), 0 -1px 0 rgba(0,0,0,.7);}
			
		#dragme {position:fixed;width:600px;height:100%;top:0;left:100%;z-index:666666;background:#fcfcfc;box-shadow:inset 1px 0 0 rgba(255,255,255,1),-3px 0 0 0 rgba(0,0,0,.1),-1px 0 0 0 rgba(0,0,0,.1);}
			#dragme .contents {min-height:410px;padding:20px;}
			#dragme input[type=text],#dragme textarea, #dragme select {background:white;color:#888;border-radius:2px;font-size:14px;height:22px;line-height:1.2;padding:5px 10px;border:none;outline:none;width:540px;margin-bottom:10px;font-family:sans-serif;}
			#dragme input.img-code {width:100px;}
			#dragme textarea {height:125px;resize:vertical;}
			#dragme select {height:30px;width:100%;padding:0 0 0 8px;}
			#dragme .contents h3 {margin-bottom:10px;}
		#pullme {width:30px;position:absolute;left:-32px;top:50%;margin-top:-50px;border:2px solid rgba(0,0,0,.2);border-right:none;border-top-left-radius:3px;border-bottom-left-radius:3px;}
			#pullme .inner {color:black;font-weight:bold;padding:40px 0;text-transform:uppercase;border:1px solid black;text-align:center;cursor:w-resize;font-size:17px;box-shadow:inset 1px 0 0 rgba(255,255,255,.075);text-shadow:1px 1px 0 rgba(255,255,255,.075);border-top-left-radius:2px;border-bottom-left-radius:2px;
				background:#333;
				filter:progid:DXImageTransform.Microsoft.Gradient(GradientType=1, StartColorStr='#333333', EndColorStr='#222222');
				background-image:-moz-linear-gradient(left,#333,#222);
				background-image:-o-linear-gradient(left,#333,#222);
				background-image:-ms-linear-gradient(left,#333,#222);
				background-image:-webkit-gradient(linear,left top,right top,from(#333),to(#222));
				background-image:-webkit-linear-gradient(left,#333,#222);
				background-image:linear-gradient(left,#333,#222);
			}
		#form-message {display:inline-block;margin:0 0 0 10px;vertical-align:central;}
	</style>
</head>
<body>
	<?php
        $URI  = str_replace('/ux/', '', $_SERVER['REQUEST_URI']); 
        $str = split('/', $URI);
        $postId = strip_tags($str[0]);
		if(!is_numeric($postId))
			$postId = 0;
    ?>
	<div id=spinny-thing></div>
	<div id=ahso>
    	<div id=meow class=stop-scroll>
        	<section>
        		<div class=spacer></div>
            	<?php include 'load-more.php'; ?>
            </section>
    	</div>
    </div>
    <div id=welcome>
        <!--[if lte IE 8]><b>Get a Current Browser, kthxbai.</b><br /><![endif]--> 
        <script>
			if(navigator.userAgent.indexOf('Safari') != -1 && navigator.userAgent.indexOf('Chrome') == -1)
				document.write('Safari boooo =( <br/>');
        </script>
        Currently In Development.<br/>
        Latest update: 
        <?php
            $filename = 'index.php';
            if (file_exists($filename))
                echo ago(filemtime($filename));	
        ?>
    </div>
    <span id=message></span>  
    <div id=main>
		<?php if($postId) : ?>
            <div id=post-<?php echo $postId; ?> class=post post-id=<?php echo $postId; ?>>
                <?php include 'expand.php'; ?>
            </div>
        <?php else : ?>
            <div class=here>
                <span class=txt>
                    <span class=stay>Welcome to the future!?! Please enjoy your stay!!</span><br/>
                    <br />
                    <span class=hurr>--> Drag Here</span><br/>
                    <span class=magic>Magic</span><br/>                
                </span>
            </div>
        <?php endif; ?>
    </div>
    <?php 
        if($_COOKIE['visited']){
            echo '<div id=history>';
                echo '<h1>History - last visited '. ago($_COOKIE['date']).'</h1>'; //' - <a href=# id=eraseThePast>clear</a></h1>';
                include 'history.php'; 
            echo '</div>';	
        }
    ?>
    <div id='recent' class='stop-scroll'>
    	<div class=comment-mark><span></span></div>
    	<div id=comments>
		<?php 
            $query = "SELECT id, reply_to, name, date, comment FROM comments";
            $sql = mysql_query($query);
            mysql_close($connection);
            
            comments($sql);
        ?> 
        </div>
        <div id=reply>
        	<textarea placeholder=reply></textarea>
            <input id=handle type=text placeholder=handle />
            <button>Submit</button><span></span>
        </div>
    </div>
    <div id=dragme>
    	<div class=contents>
        	<h3>Create a post below:</h3>
            <input type=text placeholder=Who />
            <input type=text placeholder=What />
            <input type=text placeholder=When />
            <form id=up-up>
            	<div id=uploads></div>
                <div id=landing-zone>
                    Drop Images Here to Upload.
                </div>
            </form>
            <select>
            	<option>---</option>
                <option>Where</option>
            </select>
            <textarea placeholder=Why></textarea>
            <button id=POST>Submit</button>
            <div id=form-message>
            	Not yet.
            </div>
        </div>
        <div id=pullme title='Pull Me'>
        	<div class=inner>
        		||||
            </div>
        </div>
    </div>
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js'></script>
    <script src='/ux/js/baseQuery.js'></script>
    <script>
		if(<?php echo $postId; ?>)
			swapComments('<?php echo $postId; ?>');
			
		$('.item').live('mousedown',function(e){
			e.preventDefault();
			var obj = $(this);
			if(obj.data('dropped') != 1){
				var divX = obj.position().left;
				var divY = obj.position().top;
				var startX = e.screenX - divX;
				var startY = e.screenY - divY;
				var id = obj.attr('post-id');
				$('#meow').data('elm', obj);
				var elm = $('#meow').data('elm');
				elm.stop();
				$(this).unbind('mousemove');
				$(window).bind('mousemove',function(e){
					$('#meow').data('currentX', (e.screenX - startX));
					elm.css({left : $('#meow').data('currentX'), top : (e.screenY - startY)});
					if(!elm.data('move') && !$('#holder-'+id).length){
						elm.data('move', 1);
						var clone = obj.html();
						var h = obj.height()
						elm.addClass('grrr').css({'z-index' : 11, position: 'absolute'});
						$('<div/>',{id : 'holder-'+id, 'class' : 'card holder holder-'+id, html : clone, 'height' : h}).insertAfter(elm);
					}
				});
			}
		});
		
		$(window).mouseup(function(e){
			$(this).unbind('mousemove');
			var elm = $('#meow').data('elm');
			var moved = (elm)? elm.data('move') : 0;

			if(moved){
				var obj = elm;
				elm.unbind('mousemove');
				var postID = obj.attr('post-id');
				
				if($('#meow').data('currentX') > 250){
					var posy = $('#main').position().top;
					var posx = $('#main').position().left;
					var elmId = obj.attr('id');			
					var drop = ((obj.position().top) + ($(document).scrollTop()))-55;
					var append = 0;
					var order,loopPosY,lastElm;
								
					obj.data('dropped',1);		
					$('#main .post').each(function(){
						loopPosY = $(this).position().top;
						if(loopPosY >= drop){
							order = ($(this).index() < 0)? 0 : $(this).index();
							return false;
						}
					});
					
					if(!$('#main .post').length || order == null){
						append = 1;
						lastElm = ($('.here').length)? 0 : 1;
					}

					obj.height(obj.height()).find('article').hide().end().css({'-webkit-transform': 'perspective(500px) rotateX(180deg) rotateY(180deg)'}).animate({top : (lastElm)? ($('#main').height()-$(document).scrollTop())+55 : posy-25, left : 400, width : 625, height: 0, opacity : 1}, 300,'swing', function(){
						var rawr = $(this).removeClass('grrr card item').removeAttr('style').addClass('post').css({display: 'none'});
						if(!append)
							rawr.insertBefore($('#main .post:eq('+order+')'));
						else
							$('#main').append(rawr);
						
						if($('.here').length)
							$('.here').remove();

						if(!rawr.hasClass('article')){
							if($.browser.safari)
								$('#spinny-thing').show();
							else
								$('#message').text('loading...');
						}
						append = 0;
					});
					
					$('#holder-'+postID).slideUp('fast',function(){
						$(this).remove();
						elm.data('move', 0);
					});
					
					getContent(postID,elm);
					
					$('#history .post-'+postID+' h2').css({'text-decoration' : 'line-through'});
					
					if($.browser.safari && !lastElm)
						$('body').animate({scrollTop: (loopPosY)? loopPosY : 0}, 300);
					else if(!lastElm)
						$('html').animate({scrollTop: (loopPosY)? loopPosY : 0}, 300);
					
					if($('#meow section').height() <= $('#meow').height() && !$('#meow').data('infinite') || $('#meow .card').length <= 3 && !$('#meow').data('infinite')){
						$('#meow').data('infinite', 1)
						console.log('fire');
						var post = $('#nomNom').attr('post-mark');
						$('#nomNom').remove();
						if(post)
							loadMore(post);
					}
				}else{
					var holder = $('#holder-'+postID);
					var posy = holder.position().top;
					var posx = holder.position().left;
					obj.stop().animate({top : posy, left : posx, 'z-index' : 1},150,'swing',function(){
						$(this).removeAttr('style').removeClass('grrr');
						holder.remove();
						elm.data('move', 0);
					});
				}				
			}else if($('#dragme').data('dragged')){
				var lastEvent = $('#dragme').data('mouseEvents').shift();
				if (!lastEvent)
					return;
				
				var deltaX = (e.pageX - lastEvent.pageX);
				var deltaMS = Math.max((e.timeStamp - lastEvent.timeStamp),	1)*10;
				
				if(deltaMS > 2500){
					deltaX = 0;
					deltaMS = 0;
				}

				var left = $('#dragme').position().left;
				var added = deltaX*5 + left;
				var size = $('#dragme').width();
				var wWidth = $(window).width();
				
				if(added > wWidth){
					added = wWidth;
					deltaMS = 300;
				}else if(added < wWidth-size){
					added = wWidth-size;
					deltaMS = 300;
				}
				
				if(deltaX > 1 || deltaX < -1)
					$('#dragme').stop().animate({left : added},deltaMS,'easeOutQuad');
				
				$('#dragme').data('dragged', 0);
			}
		});
		
		$.extend( $.easing,{
			easeOutQuad: function (x, t, b, c, d) {
				return -c *(t/=d)*(t-2) + b;
			}
		});
				
		$('.stop-scroll').bind('mousewheel DOMMouseScroll', function (e){
			var delta = -e.detail || e.wheelDelta || e.originalEvent.wheelDelta || -e.originalEvent.detail;
			this.scrollTop += (delta < 0 ? 1 : -1)*77;
			e.preventDefault();
		});
		
		$('#pullme').mousedown(function(e){
			e.preventDefault();
			var dragdiv = $('#dragme');
			dragdiv.stop();
			var divX = dragdiv.position().left;
			var dragX = e.pageX - divX;
			var dWidth = dragdiv.width();
			dragdiv.data('mouseEvents', [e]);
			dragdiv.data('dragged', 1);
			
			$(window).bind('mousemove',function(e){
				var currentX = e.pageX - dragX;
				var drag = dragdiv.position().left;
				var wWidth = $(window).width();
				var mouseEvents = dragdiv.data('mouseEvents');
				
				if((e.timeStamp - mouseEvents[ mouseEvents.length - 1 ].timeStamp ) > 40 || e.pageX == mouseEvents.pageX ){
					mouseEvents.push(e);
					if(mouseEvents.length > 2){
						mouseEvents.shift(); //Remove the oldest event.
					}
				}
				if(drag >= wWidth && currentX >= wWidth)
					currentX = wWidth;
				else if(drag-wWidth <= -dWidth && currentX-wWidth <= -dWidth)
					currentX = wWidth - dWidth;
				
				dragdiv.css({left : currentX});
			});
		});
				
		$('.ctrls .minimize').live('click',function(){
			$(this).parent().next('article').slideToggle();
			if(!$(this).hasClass('maximize')){
				$(this).addClass('maximize');
				$(this).attr('title','Maximize.');
			}else{
				$(this).removeClass('maximize');
				$(this).attr('title','Minimize.');
			}
		});
		
		$('.ctrls .bubble').live('click',function(){
			var id = $(this).parent().parent().parent().attr('post-id');
			swapComments(id);
		});
		
		$(window).resize(function(){
			if($('#dragme').position().left >= $(this).width())
				$('#dragme').css({left : '100%'});
			else
				$('#dragme').stop().animate({left : $(this).width()}, function(){
					$('#dragme').css({left : '100%'});
				});
			$('#recent').css({width : ($(window).width()-1075 < 0)? 0 : $(window).width()-1075});
		});	
		
		$('.notes img').live('click', function(){
			if(this.width >= 220){
				var obj = $(this);
				$('<img/>',{src: this.src}).load(function(){
					var maxW = this.width;
					if(!obj.hasClass('full'))
						obj.css({'max-width' : (maxW && maxW <= 600)? maxW : 600}).addClass('full');
					else
						obj.css({'max-width' : 220}).removeClass('full');
				});
			}
			return false;
		});
		
		$('.reply').live('click', function(e){
			e.preventDefault();
			if(!$(this).parent().parent().find('#reply').length && $('#reply').length){
				$('#reply').insertAfter($(this).parent()).show();
				$('#reply button').removeAttr('disabled');
				$('#reply textarea').val('');
				$('#reply span').text('');
				if(!$(this).parent().parent().hasClass('full')){
					$(this).parent().parent().addClass('full').find('p').css({'white-space' : 'normal'}).end().find('.replys').hide();
				}	
			}else if(!$('#reply').length){
				var form = '<textarea placeholder=reply></textarea><input id=handle type=text placeholder=handle /><button>Submit</button><span></span>';
				var reply = $('<div/>',{id : 'reply', html : form});
				reply.insertAfter($(this).parent()).show();
			}
			if(!$('#comments .start-thread').is(':visible'))
				$('#comments .start-thread').show();
			return false;
		});
		
		$(document).bind('scroll', function(){
			$('#main .post').each(function(){
				var id = $(this).attr('post-id');
				var posY = $(this).position().top - $(document).scrollTop();
				var curEnd = $(this).height() + posY;
				if(posY <= 111 && curEnd >= 111 && $(document).data('post-id') !== id && !$(document).data('animated')){
					swapComments(id);
				}
			});
		});

		$('#meow').bind('scroll', function(){
			var posY = this.scrollTop + this.clientHeight;
			var endY = $(this).find('section').height();
			if(posY >= endY-75 && !$(this).data('infinite')){
				$(this).data('infinite', 1);
				console.log('fire');
				var post = $('#nomNom').attr('post-mark');
				$(this).data('post-mark', post);
				$('#nomNom').remove();
				if(post)
					loadMore(post);
				return false;
			}
		});

		$('#meow').hover(function(){
			if($('.hurr').length)
				$('.hurr').css({'text-shadow':'8px 0 0 rgba(0,255,255,.5), -8px 0 0 rgba(255,0,0,.5)','color':'rgba(0,0,0,.5)','-webkit-transform':'perspective(500px) rotateX(10deg) rotateY(15deg)','-moz-transform':'perspective(500px) rotateX(10deg) rotateY(15deg)','-o-transform':'perspective(500px) rotateX(10deg) rotateY(15deg)','-ms-transform':'perspective(500px) rotateX(10deg) rotateY(15deg)','transform':'perspective(500px) rotateX(10deg) rotateY(15deg)','opacity' : 1});
			return false;
		},function(){
			if($('.hurr').length)
				$('.hurr').css({'text-shadow':'none','color':'#333','-webkit-transform':'perspective(500px) rotateX(0deg) rotateY(0deg)','-moz-transform':'perspective(500px) rotateX(0deg) rotateY(0deg)','-o-transform':'perspective(500px) rotateX(0deg) rotateY(0deg)','-ms-transform':'perspective(500px) rotateX(0deg) rotateY(0deg)','transform':'perspective(500px) rotateX(0deg) rotateY(0deg)','opacity' : 0});
			return false;
		});
		
		$('#thePast').live('click', function(e){
			e.preventDefault();
			var mark = $(this).attr('history-mark');
			$(this).remove();
			thePast(mark);
		});
		
		$('#nomNom').live('click', function(e){
			e.preventDefault();
			var post = $(this).attr('post-mark');
			$('#meow').data('post-mark', post);
			$(this).remove();
			if(!$('#meow').data('infinite'))
				loadMore(post);
		});
		
		$('.histogram').live('click', function(e){
			e.preventDefault();
			var elm = $(this);
			var top = elm.position().top;
			var height = elm.height();
			var postID = elm.attr('post-id');
			
			if($('.here').length){
				$('.here').slideUp(function(){
					$(this).remove();
				});
			}

			if(!$('#main #post-'+postID).length){
				var mmm = $('<div/>',{id : 'post-'+postID}).css({position : 'absolute', top : top, height : height, width : 580, background: '#333'}).animate({top : 0 , height : 0, width : 600 }, function(){
					var rawr = $(this).removeClass('histogram odd even article not').removeAttr('style').addClass('post').attr('post-id',postID).css({display: 'none'});
					$('#main').append(rawr);
					
				}).appendTo('#history');
				
				elm.addClass('not');
				
				getContent(postID,mmm);
				
				if(!$('#meow #post-'+postID).length){
					if($('#history').data('current'))
						$('#history').data('current').push(postID);
					else
						$('#history').data('current', [postID]);
				}
				$('#meow #post-'+postID).slideUp('fast',function(){
					$(this).remove();
				});
			}else{
				if($.browser.safari)
					$('body').animate({scrollTop : $('#main #post-'+postID).offset().top-55}, 300);
				else
					$('html').animate({scrollTop : $('#main #post-'+postID).offset().top-55}, 300);
				
			}
			
			return false;
		});
		
		$(window).bind('popstate', function(e){
			var state = e.originalEvent.state;
			if (state) {
				var id = state.id;
				var top = $('#main #post-'+id).position().top;
				$(window).data('popstate', id);
				$(window).data('popped', 1);
				if($.browser.safari){
					$('body').stop().animate({scrollTop: top}, 300, function(){
						$(window).data('popped', 0);
						//swapComments(id);
					});
				}else if(top != 55){
					$('html').stop().animate({scrollTop: top}, 300, function(){
						$(window).data('popped', 0);
						//swapComments(id);
					});
				}
			}
		});
		
		$('#eraseThePast').click(function(e){
			e.preventDefault();
			deleteCookie('visited');
			deleteCookie('date');
			$('#history').fadeOut(function(){
				$(this).html('');
			});
		});
		
		/*$('#meow .card').hover(function(e){
			var obj = $(this);
			console.log('mouseenter ');
			$(this).unbind('mousemove');
			if($(this).hasClass('card')){
				$(this).bind('mousemove',function(e){
					console.log('moves');
					var divX = obj.position().left;
					var divY = obj.position().top;
					var dragX = e.pageX - divX;
					var dragY = e.pageY - divY;
					var xxx = (e.pageX/333);
					if(xxx > .5)
						xxx = xxx * -10;
					else
						xxx = (xxx+.5) * 15;
					var yyy = (dragY/obj.height());
					if(yyy > .5)
						yyy = yyy * 10;
					else
						yyy = (yyy+.5) * -15;
	
					obj.css({'-webkit-transform' : 'perspective(500px) rotateX('+yyy+'deg) rotateY('+xxx+'deg)', '-moz-transform' : 'perspective(500px) rotateX('+yyy+'deg) rotateY('+xxx+'deg)'});
				});
			}
		},function(){
			$(this).css({'-webkit-transform' : 'perspective(500px) rotateX(0deg) rotateY(0deg)', '-moz-transform' : 'perspective(500px) rotateX(0deg) rotateY(0deg)'});
			$(this).unbind('mousemove');
			console.log('unbind');
		});
		*/

		$('#reply button').live('click',function(){
			var x = $(this).parent().parent().parent();
			var p = $('#comments').attr('post-id');
			var r = x.attr('reply-id');
			var n = $(this).parent().find('input').val();
			var c = $(this).parent().find('textarea').val();
			if(p && n && c){
				$(this).attr('disabled','disabled');
				$(this).next().text(' sending.');
				reply(n,c,p,r,x);
			}else{
				$(this).next().text(' missing info.');
			}
			return false;
		});
		
		$('#comments .start-thread').live('click', function(e){
			e.preventDefault();
			if($('#reply').length){
				$('#reply').insertAfter($(this)).show();
				$('#reply button').removeAttr('disabled');
				$('#reply textarea').val('');
				$('#reply span').text('');
				$(this).hide();			
			}else if(!$('#reply').length){
				var form = '<textarea placeholder=reply></textarea><input id=handle type=text placeholder=handle /><button>Submit</button><span></span>';
				var reply = $('<div/>',{id : 'reply', html : form});
				reply.insertAfter($(this)).show();
				$(this).hide();	
			}
			return false;
		});



		
		function rgb() {
			var color = new Array();
			for(var i = 0; i < 3; i++) {
				color[i] = Math.floor(Math.random()*255);
			}
			color = color.toString();
			$('#meow').css({'background-color' : 'rgba(' + color + ',.666)'});
		}
		
		var change = setInterval('rgb()',3500);
		
		$(function(){
			$('#recent').css({width : ($(window).width()-1075 < 0)? 0 : $(window).width()-1075}).show();
			if(getCookie('visited')){
				var array = getCookie('visited').split(',');
				var php = [<?php echo $str; ?>];
				if(php){
					array = php;
					setCookie('visited',php,2222,01,22,'/ux/');
					setCookie('date',(Date.now()*.001),2222,01,22,'/ux/');
				}
				$('#history').data('past', array);
			}
			rgb();
		});
	</script>
</body>
</html>