<?php
	//Thông tin kêt nôi CSDL
	$servername = 'localhost';
	$username = 'root';
	$password = '';
	$dbname = 'test';
	//Tao kêt nôi
	$conn = new mysqli($servername, $username, $password, $dbname);
	//Kiêm tra kêt nôi
	
	if($conn->connect_error){
	die("ket noi csdl khong thanh cong...");
	}
	mysqli_set_charset($conn,"utf8");
?>