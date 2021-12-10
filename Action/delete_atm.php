<?php
session_start();
require_once '../Controllers/atm_controller.php';
if(isset($_POST['delete'])){
	$atm_id = $_POST['atm_id'];

    $result = delete_atm_controller($atm_id);

    if($result === true){
        $_SESSION['success'] = 'ATM deleted successfully';
        header("Location: ../View/atm.php");
    }else{
        $_SESSION['success'] = 'ATM not deleted';
        header("Location: ../includes/atm_form.php");
    }
}		
else{
	$_SESSION['error'] = 'Cant delete an ATM';
    header("Location: ../includes/atm_form.php");
}

?>