<?php
	include('../connection.php');
	session_start();

	$fullname = $_POST['fullname'];
	$bloodgroup = $_POST['bloodgroup'];
	$gender = $_POST['gender'];
	$datepicker = $_POST['datepicker'];
	$weight = $_POST['weight'];
	$mild = $_POST['mild'];
	$unmedicated = $_POST['unmedicated'];
	$needles = $_POST['needles'];
	$sexengage = $_POST['sexengage'];
	$hiv = $_POST['hiv'];
	$medication = $_POST['medication'];
	$samesex = $_POST['samesex'];
	$email = $_POST['email'];
	$state = $_POST['state'];
	$city = $_POST['city'];
	$zipcode = $_POST['zipcode'];
	$phone = $_POST['phone'];
	$address = $_POST['address'];


	$fileInfo = PATHINFO($_FILES["photo"]["name"]);
	
	if (empty($_FILES["photo"]["name"])){
		$location="";
	}
	else{
		if ($fileInfo['extension'] == "jpg" OR $fileInfo['extension'] == "png") {
			$newFilename = $fileInfo['filename'] . "_" . time() . "." . $fileInfo['extension'];
			move_uploaded_file($_FILES["photo"]["tmp_name"], "../upload/" . $newFilename);
			$location = "upload/" . $newFilename;
		}
		else{
			$location="";
			?>
				<script>
					window.alert('Photo not added. Please upload JPG or PNG photo only!');
				</script>
			<?php
		}
	}
	if (empty($_FILES["photo1"]["name"])){
		$location="";
	}
	else{
		if ($fileInfo['extension'] == "jpg" OR $fileInfo['extension'] == "png") {
			$newFilename = $fileInfo['filename'] . "_" . time() . "." . $fileInfo['extension'];
			move_uploaded_file($_FILES["photo1"]["tmp_name"], "../upload/" . $newFilename);
			$location = "upload/" . $newFilename;
		}
		else{
			$location="";
			?>
				<script>
					window.alert('Photo not added. Please upload JPG or PNG photo only!');
				</script>
			<?php
		}
	}

// echo "<pre>";
// 	print_r($_POST);
// 	exit();

	$insert = $connection->query("INSERT INTO donor(fullname, gender, dob, body_weight, email, stateoforigin, city, myaddress, zipcode, phone, bloodgroup, mild, unmedicated, needles, sexengage, hiv, medication, samesex) 
	                                    VALUES ('$fullname','$gender', '$datepicker', '$weight', '$email', '$state', '$city', '$address', '$zipcode', '$phone', '$bloodgroup', '$mild', '$unmedicated', '$needles', '$sexengage', '$hiv', '$medication', '$samesex', '".$_SESSION['membername']."', '0')");
	// $r = "INSERT INTO donor(name, father_name, gender, dob, body_weight, email, state, city, address, zipcode, phone, image, username_fk, bloodgroup, mild, unmedicated, needles, sexengage, hiv, medication, samesex) VALUES ('$name', '$fathername', '$gender', '$datepicker', '$weight', '$email', '$state', '$city', '$pincode', '$phone', '$address', '$location', '$bloodgroup', '$mild', '$unmedicated', '$needles', '$sexengage', '$hiv', '$medication', '$samesex',)";
	// echo $r;
	// exit();
	
	if($insert){
		echo ('Successfully Added');
	//	header('location:donor.php');
	}else {
		echo ('Not Successful');
		//header('location:donor.php');
	}
?>