<?php

session_start();
$id=$_SESSION['id'];
if($id == NULL )
{
     header("Location: ./login.html");

}
$con=mysqli_connect('localhost','root','saphira','Hackathon');
$query=mysqli_query($con, "SELECT * FROM db WHERE id=\"$id\"");
$obj=mysqli_fetch_object($query); // object 

#echo $obj->email;
#echo $obj->id;

$name=$obj->name;
$age=$obj->age;
$sex=$obj->sex;
$email=$obj->email;
$password=$obj->password;
$year=$obj->year;
$year="UG".$year;
$int_and_hobbies=$obj->int_and_hobbies;
$language=$obj->language;
$ph_no=$obj->ph_no;
$hometown=$obj->hometown;
$email=$obj->email;
$short_desc=$obj->short_desc;
$fav_bands=$obj->fav_bands;
$fav_sports=$obj->fav_sports;
$fav_foods=$obj->fav_foods;
$height=$obj->height;
$weight=$obj->weight;
$pets=$obj->pets;
$ismentor=$obj->ismentor;
$field1=$obj->field1;
$field2=$obj->field2;
$field3=$obj->field3;
$field4=$obj->field4;
$field5=$obj->field5;
$field6=$obj->field6;
$field7=$obj->field7;
$field8=$obj->field8;
$field9=$obj->field9;
$field10=$obj->field10;
$field11=$obj->field11;
$field12=$obj->field12;

if ($ismentor == 1)
{
	$string="I am mentoring in this $language";
}
else
{
	$string="I know $language"; 
}


print <<<HERE
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Profile Page</title>

<style type="text/css">
<!--
body {
    font: 100%/1.4 Verdana, Arial, Helvetica, sans-serif;
    background-color: #42413C;
    margin: 0;
    padding: 0;
    color: #000;
}


h1, h2{
    
    padding-right: 15px;
    padding-left: 15px;
    text-align: center;
}


.container {
    width: 960px;
    background-color: #FFF;
    margin: 0 auto;
}


.header {
    background-color: #ADB96E;
}



.content {

    padding: 10px 0;
}

.footer {
    padding: 10px 0;
    background-color: #CCC49F;
    margin-bottom:0px;
    
}
.searchbar{
    height:30px;
    width:200px;
    border:thin;
}

table.main
{
	width:80%;
	height:70;
}

</style>
</head>

<body>

<div class="container">
  <div class="header"><a href="#"><img src="logo.png" alt="Insert Logo Here" name="Insert_logo" width="180" height="90" style="background-color: #C6D580; display:block;" /></a> 
        <div class="logout" style="float:right">
        <form action="logout.php" method="POST">
        <input type="submit" value="Logout"/>      
        </form>
        </div>
	 <div class=“searchbar” style="float:right">
        <form action=match.php method=“POST”>
        <input type="submit" value=Match>      
        </form>
        </div>


  </div>
  <div class="content">
    <h1>$name !</h1>

	<table padding=5 width=80% class=main>
	 <tr>
	  <td>
	    $sex<br/>
            I am $age Years old.<br/>
            $year student<br/>
            $string<br/>
	
	    I’m $height cm tall and $weight kg heavy.
	  </td>
	  <td colspan=2>	
	    This is me in a nutshell :<br/> $short_desc<br/><br/><br/>
            I am interested in :<br/> $int_and_hobbies<br/><br/><br/>
	    Favorites :<br/>
	    <ul>
		<li>
		Bands : $fav_bands <br/>
		</li>
		<li>
		Foods : $fav_foods <br/>
		</li>
		<li>
		Sports : $fav_sports <br/>
		</li>
	    </ul>
	  </td>
	 </tr>
	 <tr>
	  <td>
	    Mail me at $email <br/> Gimme a Call at $ph_no<br/><br/>
	    I’m actually from $hometown, met me up.<br/>
          </td>
	 </tr>
	</table>
	
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
  
  </div>
  <div class="footer">
    <p>Footer</p>
    <!-- end .footer --></div>
  <!-- end .container --></div>
</body>
</html>
HERE;
?>
