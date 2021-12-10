<?php
session_start();
require_once '../Controllers/bank_controller.php';
if(isset($_POST['add'])){
	$bank_id = $_POST['bank_id'];
	$bank_name = $_POST['bank_name'];
	$location = $_POST['location'];
	$address = $_POST['address'];
		
	$result = add_bank_controller($bank_id, $bank_name, $location, $address);
    
    if($result === true){
        $_SESSION['success'] = 'Bank added successfully';
        header("Location: ../View/bank.php");
    }else{
        $_SESSION['error'] = 'Bank not added';
        header("Location: ../View/bank.php");
    }
}		
else{
	$_SESSION['error'] = 'Fill up add form first';
    header("Location: ../View/bank.php");
}
?>