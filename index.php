<?php
date_default_timezone_set('Asia/Ho_Chi_Minh');
// Bắt đầu hoặc tiếp tục phiên
if (session_status() == PHP_SESSION_NONE) {
    session_start();

}
require_once './app/init.php';
$myApp = new App();
