<?php 
    error_reporting(E_ALL);
    
    //error_reporting(0); //การปิด error ไว้ใช้ตอนเขียน error เอง
    //connect to database
    //localhost
    //$conn = new mysqli('localhost', 'root', '', 'blog');
    //sever
    $conn = new mysqli('thanapong.com', 'thanapon_blog', '', 'thanapon_blog');
    $conn->set_charset('utf8');

    if($conn->connect_errno) {
        echo "Connect error : ".$conn->connect_error;
        exit();
    }
    $base_path_blog = 'assets/images/blog/';
?>