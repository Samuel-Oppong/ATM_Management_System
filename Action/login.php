<?php
    session_start();
	require('../Controllers/admin_controller.php');

	if(isset($_POST['login'])){
		$username = $_POST['username'];
		$password = $_POST['password'];

       // select customer details with this email
        $result = select_admin_controller($username);

		if(!empty($result)){
            if (password_verify($password, $result['password'])){
				$_SESSION['username'] = $result['username'];
			
                echo ("<script>alert('Login Successfully. Welcome :))'); window.location.href = '../View/home.php';</script>");
				
			}
			else{
				echo "<script>alert('Incorrect password');window.location.href = '../index.php';</script>";
			}
        }else{
            echo ("<script>alert('$message'); window.location.href = '../index.php';</script>");
        }

		

	}
	else{
		echo ("<script>alert('Input customer credentials first'); window.location.href = '../index.php';</script>");
        
	}
	
?>

		