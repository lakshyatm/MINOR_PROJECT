<?php
session_start();

//Open a new connection to the MySQL server
$mysqli = new mysqli('localhost', 'suraj', 'Suraj@1234', 'paliwal');

//Output any connection error
if ($mysqli->connect_error) {
    die('Error : (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
   
}

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$address = $_POST['address'];
$password = $_POST['password'];


//VALIDATION

if (strlen($fname) < 2) {
    echo 'fname';
} elseif (strlen($lname) < 2) {
    echo 'lname';
}
elseif (strlen($mobile) < 5) {
    echo 'mformat';
} elseif (strlen($email) <= 4) {
    echo 'eshort';
} elseif (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
    echo 'eformat';
} elseif (strlen($address) <= 4) {
        echo 'addshort';
} elseif (strlen($password) <= 4) {
    echo 'pshort';
	
//VALIDATION
	
} else {
	
	//PASSWORD ENCRYPT
	$spassword = password_hash($password, PASSWORD_BCRYPT, array('cost' => 12));
	
	$query = "SELECT * FROM user WHERE email='$email'";
	$result = mysqli_query($mysqli, $query) or die(mysqli_error());
	$num_row = mysqli_num_rows($result);
	$row = mysqli_fetch_array($result);
	
		if ($num_row < 1) {

			$insert_row = $mysqli->query("INSERT INTO user (fname, lname ,mobile, email,address, password) VALUES ('$fname', '$lname', '$mobile','$email','$address', '$spassword')");

			if ($insert_row) {

				
				echo 'true';

			}

		} else {

			echo 'false';

		}
		
}

?>