<?php
session_start();
require_once '../Controllers/mfg_dept_controller.php';
if(isset($_POST['edit'])){
	$man_dept_id = $_POST['dept_id'];
	$dept_name = $_POST['dept_name'];

    $result = update_mfg_dept_controller($man_dept_id, $dept_name);

    if($result === true){
        $_SESSION['success'] = 'Department updated successfully';
        header("Location: ../View/mfg_dept.php");
    }else{
        $_SESSION['success'] = 'Department not updated';
        header("Location: ../View/mfg_dept.php");
    }
}		
else{
	$_SESSION['error'] = 'Fill up update form first';
    header("Location: ../View/mfg_dept.php");
}
?>