<?php
inclclud 'save.php';
if (isset($_POST['submit']))
 {
$full name = $_POST['name']
$email = $_POST['email']
$mobile number = $_POST['phone'] 
foreach ($name as $email)
 {
	$name.=$name.",";
}
$sql="insert into t(name,email,mobile number)values('$name','$email','$mobile number')";
if (msqli_query(con,sql)) 
{
	echo "<script>alert('new record inserted')</script>";
}
else
{
	echo "error:".mysqli_error($con);
}
mysql_close($con);
}
?>