<?php
session_start();
require_once '../Controllers/bank_controller.php';
if(isset($_POST['edit'])){
	$bank_id = $_POST['bank_id'];
	$bank_name = $_POST['bank_name'];
	$location = $_POST['location'];
	$address = $_POST['address'];

    $result = update_bank_controller($bank_id, $bank_name, $location, $address);

    if($result === true){
        $_SESSION['success'] = 'Bank updated successfully';
        header("Location: ../View/bank.php");
    }else{
        $_SESSION['success'] = 'Bank not updated';
        header("Location: ../View/bank.php");
    }
}		
else{
	$_SESSION['error'] = 'Fill up update form first';
    header("Location: ../View/bank.php");
}

?>