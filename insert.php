<?php 
include 'init.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	
	$fname 			= $_POST['fname'];
	$lname 			= $_POST['lname'];
	$email 			= $_POST['email'];
	$pass 			= $_POST['password'];
	$c_pass			= $_POST['c_password'];
	$address		= $_POST['address'];
	$activity		= $_POST['activity'];
	$status			= $_POST['status'];
	$image_name 	= $_FILES['image']['name'];
	$image_type 	= $_FILES['image']['type'];
	$image_tmp 		= $_FILES['image']['tmp_name'];
	$image_size 	= $_FILES['image']['size'];

	$hashPass = sha1($_POST['password']);
	$hashPass = sha1($_POST['c_password']);

	$allowed_extension = array('jpeg', 'jpg', 'png');
	$tmp = explode('.', $image_name);
	$fileExtension = strtolower(end($tmp));
	$dir = __DIR__;

	// Validate The Form

	$formErrors = array();

	if (strlen($pass) < 6) {
		
		echo "Username Cant Be Less Than <strong>6 Length</strong></div>";
	}

	if (!in_array($fileExtension, $allowed_extension)) {
		
		echo "<strong>Error!</strong> This file extension is not valid";
	}else{
		move_uploaded_file($image_tmp, ''.$dir.'\images_upload\\' . $image_name);

		$stmt = $con->prepare("INSERT INTO users(First_Name, Last_Name, Email, Password, C_Password, Address, Activity, Status, Image, Date) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, now())");
			$stmt->execute(array(
				$fname, 
				$lname, 
				$email, 
				$hashPass, 
				$hashPass, 
				$address, 
				$activity, 
				$status,
				$image_name,
			));
	}

	// Loop Into Error Array And Echo It
	foreach ($formErrors as $error) {
		
		echo "<div class='alert alert-danger alert-dismissible custom-alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                    <span aria-hidden='true'>&times;</span>
                </button>" . $error . '</div>' . '<br>';
	}

	// Check There's No Error Proceed The Update Operation
	if (empty($formErrors)) {

		// Check If User Exist In Database

		$check = checkItem("First_Name", "users", $fname);

		if ($check == 1) {

			$theMsg = '<div class="alert alert-danger">Sorry This User Is Exist</div>';

		}
	}
}

?>