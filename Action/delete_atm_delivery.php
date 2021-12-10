<?php
    session_start();
	require_once '../Controllers/atm_controller.php';

	if(isset($_POST['delete'])){
		$id = $_POST['id'];
		
		$result = delete_delivery_controller($id);
		
        if($result === true){
            $_SESSION['success'] = 'ATM Delivery deleted successfully';
            header("Location: ../View/atm_delivery.php");
        }else{
            $_SESSION['error'] = 'ATM Delivery not deleted';
            header("Location: ../View/atm_delivery.php");
        }
    }		
    else{
        $_SESSION['error'] = 'Fill up add form first';
        header("Location: ../View/atm_delivery.php");
    }
?>
