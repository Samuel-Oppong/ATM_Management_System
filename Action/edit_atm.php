<?php
session_start();
require_once '../Controllers/atm_controller.php';
if(isset($_POST['edit'])){
	$atm_id = $_POST['atm_id'];
	$atm_type = $_POST['atm_type'];
	$atm_model = $_POST['atm_model'];
	$atm_color = $_POST['atm_color'];

    $result = update_atm_controller($atm_id, $atm_type, $atm_model, $atm_color);

    if($result === true){
        $_SESSION['success'] = 'ATM updated successfully';
        header("Location: ../View/atm.php");
    }else{
        $_SESSION['success'] = 'ATM not updated';
        header("Location: ../View/atm.php");
    }
}		
else{
	$_SESSION['error'] = 'Fill up update form first';
    header("Location: ../View/atm.php");
}
?>