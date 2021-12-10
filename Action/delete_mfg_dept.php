<?php
session_start();
require_once '../Controllers/atm_controller.php';
if(isset($_POST['delete'])){
	$man_dept_id = $_POST['dept_id'];

    $result = delete_mfg_dept($man_dept_id);

    if($result === true){
        $_SESSION['success'] = 'Department deleted successfully';
        header("Location: ../View/mfg_dept.php");
    }else{
        $_SESSION['success'] = 'Department not deleted';
        header("Location: ../View/mfg_dept.php");
    }
}		
else{
	$_SESSION['error'] = 'Cant delete an ATM';
    header("Location: ../View/mfg_dept.php");
}

?>