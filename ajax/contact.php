<?php 
	// if(isset($_POST['firstname'],$_POST['lastname'],$_POST['gender'],if($_POST['hobbies1'] == '' ? '': ),$_POST['hobbies2'],$_POST['hobbies3'],$_POST['email'],$_POST['message'])){
	// 	echo $_POST['firstname'].' '.$_POST['lastname'].'<br>'.$_POST['gender'].'<br>'.$_POST['hobbies1'].'and'.$_POST['hobbies2'].'and'.$_POST['hobbies3'].'<br> '.$_POST['email'].'<br>'.$_POST['message'];
	// }

	$firstname = isset($_POST['firstname']) ? $_POST['firstname'] : '';
	$lastname = isset($_POST['lastname']) ? $_POST['lastname'] : '';
	$gender = isset($_POST['gender']) ? $_POST['gender'] : '';
	$hobbies1 = isset($_POST['hobbies1']) ? $_POST['hobbies1'] : '';
	$hobbies2 = isset($_POST['hobbies2']) ? $_POST['hobbies2'] : '';
	$hobbies3 = isset($_POST['hobbies3']) ? $_POST['hobbies3'] : '';
	$email = isset($_POST['email']) ? $_POST['email'] : '';
	$message = isset($_POST['message']) ? $_POST['message'] : '';

echo $firstname.' '. $lastname.'<br>'.$gender.'<br>'.$hobbies1.'<br>'.$hobbies2.'<br>'.$hobbies3.'<br>'.$email.'<br>'.$message;

?>