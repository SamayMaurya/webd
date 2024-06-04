<!DOCTYPE HTML>
<HTML lang="en">
<head>
<title>Loginchecker</title>

<body>

<form action="" method="POST">
<br><br>
<label>Name</label>
<input type="text" id="name" name="uname" required>
<br><br>
<label>Password</label>
<input type="password" id="pass" name="password" required><br><br>
<input type="Submit" value="submit">
</form>


<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
$username= $_POST['uname'];
$pass = $_POST['password'];

$conn= new mysqli("localhost","root","","sem6");

if($conn->connect_error){
die("Connection failed: " . $conn->connect_error);
}


$sql= "SELECT * FROM logindetails WHERE UserName= '$username' AND Password= '$pass'";
$res= $conn->query($sql);

if($res->num_rows>0){
echo "Login success";
}
else {
echo "No record found";
}

$conn->close();



}#if bracket first if 

?>


</body>
</html>