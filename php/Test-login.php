<?php
session_start();
?>

<?php
	include("ketnoidb.php");
	// Kiểm tra nếu người dùng đã ân nút đăng nhập thì mới xử lý
	if (isset($_POST["btn_submit"])) {
		// lấy thông tin người dùng
		$email = $_POST["email"];
		$password = $_POST["c-password"];
		$email = strip_tags($email);
		$email = addslashes($email );
		echo "mk la: ". $password;
		$password = strip_tags($password);
		$password = addslashes($password);
		
		echo "<br> mk sau khi xu li la: ". $password;
			$sql = "SELECT * FROM khachhang WHERE MatKhau ='".$password."' and Email ='$email' and TrangThai=1";
			echo "<br>".$sql;
			$result=$conn->query($sql);
			if($result->num_rows >0)
			 {
				
				$_SESSION['basic_is_logged_in'] = true;
                header('Location:index.php');
				exit;
				
			}
			else{
				echo "tên đăng nhập hoặc mật khẩu không đúng !";
			}
	}
?>