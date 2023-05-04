<?php

$con=mysqli_connect('localhost','root');
if ($con)
{
    echo "Connection Successfull";
}
else
{
    echo "No connection";
}

mysqli_select_db($con, 'codingclub');

$user=$_POST['user'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$branch=$_POST['branch'];
$year=$_POST['year'];

$query="insert into userinfodata(user,email,mobile,branch,year) values('$user','$email','$mobile','$branch','$year') ";
mysqli_query($con,$query);
header('location: index.php');



?>