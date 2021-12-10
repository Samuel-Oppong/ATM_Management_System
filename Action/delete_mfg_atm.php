<?php
    session_start();
	require_once '../Controllers/atm_controller.php';

	if(isset($_POST['delete'])){
		$id = $_POST['id'];
		
		$result = delete_atm_manufacturing_controller($id);
		
        if($result === true){
            $_SESSION['success'] = 'Manufactured ATM deleted successfully';
            header("Location: ../View/atm_manufacturing.php");
        }else{
            $_SESSION['error'] = 'Manufactured ATM not deleted';
            header("Location: ../View/atm_manufacturing.php");
        }
    }		
    else{
        $_SESSION['error'] = 'Fill up add form first';
        header("Location: ../View/atm_manufacturing.php");
    }
?>
