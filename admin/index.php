<?php 
//Khai báo sử dụng session: Khai báo này được sử dụng cho cả file admin.php, và login.php do ta đang include 2 file đó vào index.php
// include giống như copy - paste code vào khu vực khai báo.

session_start();
//Hằng ISLOGGED dùng để bảo mật, chỉ khi chạy qua file index.php thì hằng mời được khởi tạo.
define("ISLOGGED", true);
include_once "../config/db.php";
//Kiểm tra session email đã tồn tại hay chưa
if(isset($_SESSION['user_login'])) {
    include_once "admin.php";
}else{
    include_once "login.php";
}

?>