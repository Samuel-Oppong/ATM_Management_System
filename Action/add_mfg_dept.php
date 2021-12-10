<?php
session_start();
require_once '../Controllers/mfg_dept_controller.php';
if(isset($_POST['add'])){
	$man_dept_id = $_POST['dept_id'];
	$dept_name = $_POST['dept_name'];
		
	$result = add_mfg_dept_controller($man_dept_id, $dept_name);

    if($result === true){
        $_SESSION['success'] = 'Department added successfully';
        header("Location: ../View/mfg_dept.php");
    }else{
        $_SESSION['success'] = 'Department not added';
        header("Location: ../includes/mfg_dept_form.php");
    }
}		
else{
	$_SESSION['error'] = 'Fill up add form first';
    header("Location: ../includes/mfg_dept_form.php");
}
?>