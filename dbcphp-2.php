<!-- dbcphp-2.php
=========== -->
<?php
$con = mysqli_connect("localhost","wt","wt","wt"); //connection string
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$newpwd = md5($_POST['pwd']);
$query = "INSERT INTO user(uname, pwd) VALUES('$_POST[uname]','$newpwd')";
if (mysqli_query($con, $query)) 
{
echo "New record created successfully";
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>