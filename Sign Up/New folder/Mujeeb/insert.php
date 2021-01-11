<?php

	$username = $_POST['username'];
	$address = $_POST['address'];
	$telephone = $_POST['telephone'];
	$email = $_POST['email'];
	$pass = $_POST['pass'];
	$cpass = $_POST['cpass'];

	if(!empty($username)||!empty($address)||!empty($telephone)||!empty($email)||!empty($pass)||!empty($cpass)){
		$host = "localhost";
		$dbusername = "root";
		$dbpassword = "";
		$dbname = "farmingwebsite";

		//connection
		$conn = new mysli($host, $dbusername, $dbpassword, $dbname);

		if(mysqli_client_error()){
			die('Connect Error('.mysqli_connect_error().')'.mysqli_connect_error());
		}else{
			$SELECT  = "SELECT email From signup  Where email = ? Limit 1";
			$INSERT = "INSERT Into signup(username, address, telephone, email, pass, cpass) values(?,?,?,?,?,?)";

			//Prepare Statement
			$stmt = $conn->prepare($SELECT);
			$stmt->bind_param("s",$email);
			$stmt->execute();
			$stmt->bind_result($email);
			$stmt->store_result();
			$rnum = $stmt->num_rows;

			if($rnum==0){
				 $stmt->close();

				 $stmt = $conn->prepare($INSERT);
				 $stmt->bind_param("ssssssiiiiii",$username, $address, $telephone, $email, $pass, $cpass);
				 $stmt->execute();
				 echo "New record inserted successfully";
			}else{
				echo "Someone already registered using this email";
			}
			$stmt->close(); 
			$conn->close();
		}
	}else{
		echo "All fields are required";
		die();
	} 
	

?>