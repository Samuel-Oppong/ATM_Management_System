<?php
    session_start();
	require_once '../Controllers/atm_controller.php';

	if(isset($_POST['add'])){
		$id = $_POST['id'];
		$atm_id = $_POST['atm_id'];
		$man_dept_id = $_POST['dept_id'];
		$No_of_ATM_manufactured = $_POST['no_of_mfg_atm'];
		$date_of_mfg = $_POST['date_of_mfg'];
		$date_of_storage = $_POST['date_of_storage'];


        $result = add_atm_manufacturing_controller($id,$atm_id, $man_dept_id, $No_of_ATM_manufactured, $date_of_mfg, $date_of_storage);

        if($result === true){
            $_SESSION['success'] = 'Manufactured ATM added successfully';
            header("Location: ../View/atm_manufacturing.php");
        }else{
            $_SESSION['error'] = 'Manufactured ATM not added';
            header("Location: ../View/atm_manufacturing.php");
        }
    }		
    else{
        $_SESSION['error'] = 'Fill up add form first';
        header("Location: ../View/atm_manufacturing.php");
    }

  
?>