<?php
	$firstName = $_POST['firstName'];
	$contact = $_POST['contact'];
	$gender = $_POST['gender'];
	$email = $_POST['email'];
	$idt = $_POST['idt'];
	$ino = $_POST['ino'];
	$category = $_POST['category'];
	$source = $_POST['source'];
	$des = $_POST['des'];
	$cost = $_POST['cost'];
	$sd = $_POST['sd'];
	$ed = $_POST['ed'];
	$pp = $_POST['pp'];
	$sp = $_POST['sp'];

	// Database connection
	$conn = new mysqli('localhost','root','','test');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration(firstName, contact, gender, email, idt, ino, category, source, des, cost, sd, ed, pp, sp ) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ? )");
		$stmt->bind_param("sisssissssssss", $firstName, $contact, $gender, $email, $idt, $ino, $category, $source, $des, $cost, $sd, $ed, $pp, $sp);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>