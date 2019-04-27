<?php
 
    $db_server = "localhost"; // hostname ของ database server
    $db_user = "root"; // username
    $db_pass = ""; // password
    $db_src = "member"; // ชื่อฐานข้อมูล
 
    $conn = new mysqli( $db_server , $db_user , $db_pass, $db_src );
 
    if ( $conn->connect_errno ) {
	        echo "Failed to connect to MySQL: " . $db->connect_error;
    }
 
 
?>