<?php

function sp($var)
{
    if( gettype($var) == "string" )
    {
        $var=strtolower($var);
        $var[1]=chr(ord($var[1])-32);
    }
    return $var;
}//variables that are passed

function pp($var)
{
    if( strlen($var) == 10 )
    {    
        $var=str_split($var);
        $tvar=$var[0]."-(".var[1].var[2].var[3].")".var[4].var[5].var[6]."-".var[7].var[8].var[9];
        return $tvar;
    }
}

$name=$_POST['name'];
$age=$_POST['age'];
$sex=$_POST['sex'];
$email=$_POST['email'];
$password=$_POST['password'];
$year=$_POST['year'];
$int_and_hobbies=$_POST['intrests_and_hobbies'];
$language=$_POST['language'];
$ph_no=$_POST['ph_no'];
$email=$_POST['email'];
$short_desc=$_POST['short_desc'];
$fav_bands=$_POST['fav_bands'];
$fav_sports=$_POST['fav_sports'];
$height=$_POST['height'];
$weight=$_POST['weight'];
$pets=$_POST['pets'];
$ismentor=$_POST['ismentor'];
$field1=$_POST['field1'];
$field2=$_POST['field2'];
$field3=$_POST['field3'];
$field4=$_POST['field4'];
$field5=$_POST['field5'];
$field6=$_POST['field6'];
$field7=$_POST['field7'];
$field8=$_POST['field8'];
$field9=$_POST['field9'];
$field10=$_POST['field10'];
$field11=$_POST['field11'];
$field12=$_POST['field12'];


//establishing comnection
$con=mysqli_connect('localhost','root','saphira','Hackathon')

//number of rows, the rowcount works as id.
$rowQuery=mysqli_query($con,"SELECT * FROM db");
$rowCount=mysqli_num_rows($rowQuery);
$rowCount++;
//parses variables involved

//adds a new person the database
$addInfo=mysqli_query($con,"INSERT INTO db VALUES { \"$rowCount\", \"$password\",\"$name\", \"$age\", \"$sex\", \"$year\", \"sp($int_and_hobbies)\", \"sp($language)\", \"sp($hometown)\", \"pp($ph_no)\",\"$email\",\"sp($short_desc)\",\"sp($fav_bands)\",\"sp($fav_sports)\",\"sp($fav_foods)\",\"$height\",\"$weight\",\"sp($pets)\",\"$ismentor\",\"$field1\",\"$field2\",\"$field3\",\"$field4\",\"$field5\",\"$field6\",\"$field7\",\"$field8\",\"$field9\",\"$field10\",\"$field11\",\"$field12\" } ");

start_session();
$_SESSION['id']=$rowCount;

header("Location: ./profile.php");
?>
