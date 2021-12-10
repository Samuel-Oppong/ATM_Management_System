<?php
session_start();
require_once '../Controllers/atm_controller.php';

if(isset($_POST['edit'])){
    $id = $_POST['id'];
    $agent_name =$_POST['agent_name'];
    $date_delivery = $_POST['date_delivery'];
    $time_of_delivery = $_POST['time_of_delivery'];
    $no_of_ATM_delivered = $_POST['no_of_ATM_delivered'];

    $result = update_delivery_controller($id, $agent_name, $date_delivery, $time_of_delivery, $no_of_ATM_delivered );

    if($result === true){
        $_SESSION['success'] = 'ATM Delivery updated successfully';
        header("Location: ../View/atm_delivery.php");
    }else{
        $_SESSION['error'] = 'Manufactured ATM not added';
        header("Location: ../View/atm_delivery.php");
    }
}		
else{
	$_SESSION['error'] = 'Fill up add form first';
    header("Location: ../View/atm_delivery.php");
}
?>