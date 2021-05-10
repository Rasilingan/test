
<html>
<head>
<title>Student Database</title>
<link rel = "stylesheet" type="text/css" href = "E:\sheets.css">
</head>
<body bgcolor="purple">
<form action="connect.php" method="post">
<h1>
<center>Student Details</center>
</h1>
<table align="center" cellpadding="10">
<div>
<tr>
<td>First Name:</td>
<td><input type="text" id= "name" name="fname" placeholder="Firstname"></td>
</tr>
<tr>
<td>Last Name:</td>
<td><input type="text" id= "name" name="lname" placeholder="Lastname"></td>
</tr>
<tr>
<td>Age:</td>
<td><input type="number" id= "number" name="age" placeholder="Age"></td>
</tr>
<tr>
<td>Gender:</td>
<td>Male<input type="radio" name="r1" required>Female<input type="radio" name="r1" required>Others<input type="radio" name="r1" required></td>
</tr>
<tr>
<td>Date of Birth:</td>
<td><input type="date" id= "DOB" name="dob" placeholder="Date of birth"></td>
</tr>
<tr>
<td>Address:</td>
<td><textarea rows="6" cols="25" name = "address" placeholder="Address"></textarea></td>
</tr>
<tr>
<td>Pincode:</td>
<td><input type="number" id= "number" name="pincode" placeholder="Pincode"></td>
</tr>
<tr>
<td>Mobile Number:</td>
<td><input type="number" id= "number" name="mobile" placeholder="Mobile No"></td>
</tr>
<tr>
<td align="center" colspan="2">
<a href="connect.php">
<button>Submit</button>
<a href="E:\login.html">
<button>Back</button>
</a></td>
</tr>
</div>
</form>
</body>
</html>
