<?php

session_start();
$id=$_SESSION['id'];


if($id == NULL )
{
    header("Location: ./login.html");
}

$con=mysqli_connect('localhost','root','saphira','Hackathon');

$que="SELECT * FROM db WHERE id=\"$id\"";
$user=mysqli_query($con,$que);
$userObj=mysqli_fetch_object($user);

$sQue="SELECT * FROM db WHERE id!=\"$id\"";
$toSearchIn=mysqli_query($con,$sQue);
$minSum=60;
$bestMatch=NULL;

while($row = mysqli_fetch_object($toSearchIn))
{
    $sum=0;
    for($i=1;$i<=10;$i=$i+1)
    {
        $field="field".$i;
        $ans=$row->$field - $userObj->$field;
        $sum=$sum+abs($ans);
    }
    if($sum < $minSum)
    {
        $minSum=$sum;
        $bestMatch=$row->id;
    }
}

#echo $bestMatch;
$_SESSION['match']=$bestMatch;
header("Location: ./match2.php");

?>
