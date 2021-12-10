<?php
session_start();
require_once '../Controllers/bank_controller.php';
if(isset($_POST['delete'])){
	$bank_id = $_POST['bank_id'];

    $result = delete_bank_controller($bank_id);

    if($result === true){
        $_SESSION['success'] = 'ATM deleted successfully';
        header("Location: ../View/bank.php");
    }else{
        $_SESSION['success'] = 'ATM not deleted';
        header("Location: ../includes/bank.php");
    }
}		
else{
	$_SESSION['error'] = 'Cant delete an ATM';
    header("Location: ../includes/bank.php");
}

?>