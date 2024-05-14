<?php
	$firstName = $_POST['firstName'];
	$contact = $_POST['contact'];
	$sd = $_POST['sd'];
	$ed = $_POST['ed'];
	$sp = $_POST['sp'];

	// Database connection
	$conn = new mysqli('localhost','root','','trail_db');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into renewal(firstName, contact,sd, ed, sp ) values(?, ?, ?, ?, ?)");
		$stmt->bind_param("sisss", $firstName, $contact, $sd, $ed,$sp);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>