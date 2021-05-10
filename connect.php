<?php

$fname = filter_input(INPUT_POST, 'fname');
$lname = filter_input(INPUT_POST, 'lname');
$age = filter_input(INPUT_POST, 'age');
$dob = filter_input(INPUT_POST, 'dob');
$r1 = filter_input(INPUT_POST, 'r1');
$address = filter_input(INPUT_POST, 'address');
$pincode = filter_input(INPUT_POST, 'pincode');
$mobile = filter_input(INPUT_POST, 'mobile');
if(!empty($fname)) {
	if(!empty($lname)) {
		if(!empty($age)) {
			if(!empty($dob)) {
				if(!empty($r1)) {
					if(!empty($address)) {
						if(!empty($pincode)) {
							if(!empty($mobile)) {
								$host = "localhost";
								$dbusername = "root";
								$dbpassword = "";
								$dbname = "student";
								
								$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
								if(mysqli_connect_error()) {
									die('connect error ('.mysqli_connect_errno().')'.mysqli_connect_error());
								}
								else
								{
									$sql = "INSERT INTO forms (First_Name,Last_Name,Age,Date_of_Birth,Gender,Address,Pincode,Mobile_Number) values ('$fname','$lname','$age','$dob','$r1','$address','$pincode','$mobile')";
									if($conn->query($sql)) {
										//echo "recorded";
									}
									else {
										echo "error". $sql . "<br>". $conn->error;
									}
									$conn->close();
								}
							}
						}
					}
				}
			}
		}
	}
}

?>