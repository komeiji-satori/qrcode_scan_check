<?php
session_start();
include 'QRCode.php';
$rand = md5(time() . microtime());
$token = 'http://192.168.100.4:12450/accept.php?token=' . $rand . "&sid=" . $_COOKIE['PHPSESSID'];
$_SESSION['token'] = $rand;
$_SESSION['expire_time'] = time() + 30;
$_SESSION['accept'] = false;
QRCode::png($token, false, 5, 3, 1);