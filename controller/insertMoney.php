<?php
	require_once '../models/money.php';
	session_start();
	if (($user_id = $_POST['user_id']) && ($value = $_POST['value']) && ($quanity = $_POST['quanity'])) {
		echo $user_id . " " . $value . " " . $quanity;
		$result = insertMoney($user_id, $value, $quanity);
		$_SESSION["message"] = array(success=>true, message=>"Денежка в копилочке");
		echo var_dump($result);
		header("Location: ../money.php");
	} else {
		$_SESSION["message"] = array(success=>false, message=>"Что то пошло не так");
		header("Location: ../money.php");
	}
?>