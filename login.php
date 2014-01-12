<?php

$username=$_POST['email'];
$password=$_POST['password'];

$con=mysqli_connect('localhost','root','saphira','Hackathon');

if(mysqli_connect_errno())
{
    #echo "Failed to connect to database: ". mysqli_connect_error();
}
else
{
    #echo "Connection Established";
}


$que="select * from db where email=\"$username\" and password=\"$password\"";
#echo $que;
$query=mysqli_query($con, $que);
$rowCount=mysqli_num_rows($query);

if($rowCount > 0)
{
    $user=mysqli_fetch_object($query);
    $id=$user->id;
    session_start();
    $_SESSION['id']=$id;
	echo $_SESSION;
    #echo "Validated";
    header("Location: ./profile.php");
}
else
{
    #echo "Invalidated";
    header("Location: ./invalid.php");
}
?>
