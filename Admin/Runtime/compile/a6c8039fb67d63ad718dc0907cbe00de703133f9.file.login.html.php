<?php /* Smarty version Smarty-3.1.14, created on 2018-09-23 17:08:14
         compiled from "E:\wamp64\www\LinuxPro\Admin\Views\login\login.html" */ ?>
<?php /*%%SmartyHeaderCode:44595ba752eb47aa57-38485292%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a6c8039fb67d63ad718dc0907cbe00de703133f9' => 
    array (
      0 => 'E:\\wamp64\\www\\LinuxPro\\Admin\\Views\\login\\login.html',
      1 => 1537693691,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '44595ba752eb47aa57-38485292',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5ba752eb4c4839_23410986',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ba752eb4c4839_23410986')) {function content_5ba752eb4c4839_23410986($_smarty_tpl) {?><!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
		<title>登陆</title>
		<meta name="keywords" content="登陆" />
		<meta name="description" content="登陆" />
		<link href="/Public/Css/layout.css" rel="stylesheet" type="text/css">
		<link href="/Public/Css/login.css" rel="stylesheet" type="text/css">
		<script type="text/javascript" src="/Public/Js/jquery-1.7.2.min.js"></script>
		<script type="text/javascript" src="/Public/Js/js.js"></script>
	</head>
	<style>
		.ibar {display: none;}
	</style>
	<body class="login-bg">
		<div class="main ">
			<!--登录-->
			<div class="login-dom login-max">
				<div class="logo text-center">
					<a href="#">
					<img src="/Public/Images/logo.png" width="180px" height="180px">
					</a>
				</div>
				<div class="login container " id="login">
					<!--<p class="text-big text-center logo-color">-->
						<!--同一个账号，连接一切-->
					<!--</p>-->
					<!--<p class=" text-center margin-small-top logo-color text-small">-->
						<!--控制台 | 云平台 | 论坛 | 云市场-->
					<!--</p>-->
					<form class="login-form" action="index.html" method="post" autocomplete="off">
						<div class="login-box border text-small" id="box">
							<div class="name border-bottom">
								<input type="text" placeholder="手机 / 邮箱 / 某某账号" id="username" name="username" datatype="*" nullmsg="请填写帐号信息">
							</div>
							<div class="pwd">
								<input type="password" placeholder="密码" datatype="*" id="password" name="password" nullmsg="请填写帐号密码">
							</div>
						</div>
						<input type="hidden" name="formhash" value="5abb5d21"/>
						<input type="submit" class="btn text-center login-btn" value="立即登录">
					</form>
					<!--<div class="forget">-->
						<!--<a href="repassword.html" class="forget-pwd text-small fl">忘记登录密码？</a><a href="register.html" class="forget-new text-small fr" id="forget-new">创建一个新账号</a>-->
					<!--</div>-->
				</div>
			</div>

			<!--<div class="footer text-center text-small ie">-->
				<!--Copyright 2013-2016 某某科技科技有限公司 版权所有 <a href="#" target="_blank">滇ICP备13005806号</a>-->
				<!--<span class="margin-left margin-right">|</span>-->
				<!--<script src="#" language="JavaScript"></script>-->
			<!--</div>-->
			<!--<div class="popupDom">-->
				<!--<div class="popup text-default">-->
				<!--</div>-->
			<!--</div>-->
		</div>
	</body>
	<script type="text/javascript" src="/Public/Js/Validform_v5.3.2_min.js"></script>
	<script type="text/javascript">
		function popup_msg(msg) {
			$(".popup").html("" + msg + "");
			$(".popupDom").animate({
				"top": "0px"
			}, 400);
			setTimeout(function() {
				$(".popupDom").animate({
					"top": "-40px"
				}, 400);
			}, 2000);
		}

		/*动画（注册）*/
		$(document).ready(function(e) {
			// $("input[name=username]").focus();
			// $('.login-form').Validform({
			// 	ajaxPost: true,
			// 	tiptype: function(msg) {
			// 		if (msg) popup_msg('' + msg + '');
			// 	},
			// 	callback: function(ret) {
			// 		popup_msg('' + ret.info + '');
			// 		if (ret.status == 1) {
			// 			if (ret.uc_user_synlogin) {
			// 				$("body").append(ret.uc_user_synlogin);
			// 			}
			// 			setTimeout("window.location='" + ret.url + "'", 2000);
			// 		}
			// 	}
			// })

		});
	</script>

</html><?php }} ?>