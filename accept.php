<?php
session_id($_GET['sid']);
session_start();
if ($_SESSION['expire_time'] < time()) {
	echo '二维码失败';
	$_SESSION['accept'] = 2;
	die();
}
if ($_SESSION['token'] == $_GET['token']) {
	$_SESSION['accept'] = 1;
	echo '验证成功';
} else {
	$_SESSION['accept'] = 0;
	echo '验证失败';
}