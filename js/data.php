<?php
	session_start();
	header('Content-Type: application/json');
	$aResult = array();
	$aResult["result"] = "OK";
	if(isset($_POST['ig500'])) {
		if($_POST['ig500']!=""){
			$_SESSION["ig500"] = $_POST['ig500'];
			// $aResult["ig500"] = $_POST['ig500'];
		}
	}
	if(isset($_POST['ig100'])) {
		if($_POST['ig100']!=""){
			$_SESSION["ig100"] = $_POST['ig100'];
			// $aResult["ig100"] = $_POST['ig100'];
		}
	}
	if(isset($_POST['holex'])) {
		if($_POST['holex']!=""){
			$_SESSION["holex"] = $_POST['holex'];
			// $aResult["holex"] = $_POST['holex'];
		}
	}
	if(isset($_POST['acidex'])) {
		if($_POST['acidex']!=""){
			$_SESSION["acidex"] = $_POST['acidex'];
			// $aResult["acidex"] = $_POST['acidex'];
		}
	}
	if(isset($_POST['q10'])) {
		if($_POST['q10']!=""){
			$_SESSION["q10"] = $_POST['q10'];
			// $aResult["q10"] = $_POST['q10'];
		}
	}
	
	echo json_encode($aResult);
?>