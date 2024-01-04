<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){
		$description = $_POST['description'];
		$date = $_POST['date'];
		$employees = $_POST['employees'];
		// if(!empty($filename)){
		// 	move_uploaded_file($_FILES['photo']['tmp_name'], '../images/'.$filename);	
		//creating employeeid
		$letters = '';
		$numbers = '';
		foreach (range('A', 'Z') as $char) {
		    $letters .= $char;
		}
		$id_observation = substr(str_shuffle($letters), 0, 3).substr(str_shuffle($numbers), 0, 9);
		//
		$sql = "INSERT INTO observation (id_observation, description, employees, date) VALUES ('$id_observation', '$description', '$employees', '$date')";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Observación añadida satisfactoriamente';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}

	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: observation.php');
?>