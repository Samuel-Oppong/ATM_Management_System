<?php
session_start();
require_once '../Controllers/atm_controller.php';
if(isset($_POST['add'])){
	$atm_id = $_POST['atm_id'];
	$atm_type = $_POST['atm_type'];
	$atm_model = $_POST['atm_model'];
	$atm_color = $_POST['atm_color'];
		
		
	$result = add_atm_controller($atm_id, $atm_type, $atm_model, $atm_color);

    if($result === true){
        $_SESSION['success'] = 'ATM added successfully';
        header("Location: ../View/atm.php");
    }else{
        $_SESSION['error'] = 'ATM not added';
        header("Location: ../includes/atm_form.php");
    }
}		
else{
	$_SESSION['error'] = 'Fill up add form first';
    header("Location: ../includes/atm_form.php");
}
?>