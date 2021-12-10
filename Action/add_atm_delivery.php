<?php
    session_start();
	require_once '../Controllers/atm_controller.php';

	if(isset($_POST['add'])){
		$id = $_POST['id'];
        $agent_name = $_POST['agent_name'];
		$atm_id = $_POST['atm_id'];
		$bank_id = $_POST['bank_id'];
		$date_delivery = $_POST['date_delivery'];
		$time_of_delivery = $_POST['time_of_delivery'];
		$no_of_ATM_delivered = $_POST['no_of_ATM_delivered'];


        $result = add_atm_delivery_controller($id,$agent_name, $atm_id, $bank_id, $date_delivery, $time_of_delivery,$no_of_ATM_delivered);

        if($result === true){
            $_SESSION['success'] = 'ATM Delivery added successfully';
            header("Location: ../View/atm_delivery.php");
        }else{
            $_SESSION['error'] = 'ATM Delivery not added';
            header("Location: ../View/atm_delivery.php");
        }
    }		
    else{
        $_SESSION['error'] = 'Fill up add form first';
        header("Location: ../View/atm_delivery.php");
    }

  
?>