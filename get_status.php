<?php
session_start();
if ($_SESSION['expire_time'] < time()) {
	echo json_encode(['status' => 2]);
	die();
}
if ($_SESSION['accept'] == 0) {
	echo json_encode(['status' => 0]);
} else {
	echo json_encode(['status' => 1]);
}