<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form method="post" action="if_else1.php">
<div>
<span>Name:</span>
<input type="text" name="name" />
</div>
<div>
<span>Age:</span>
<input type="text" name="age"  />
</div>
<span>Email:</span>
<input type="text" name="email"  />
</div>
<span>Mobile:</span>
<input type="text" name="mobile"  />
</div>
<div>
<input type="submit" value="send" />
</div>
</form>
<?php

if($_POST==true){
$name=$_POST["name"];
$age=$_POST["age"];
$email=$_POST["email"];
$mobile=$_POST["mobile"];
    /*
	if($name==""){echo "You must enter name!"."<br>";}
	if($age==""){echo "You must enter age!"."<br>";}
	if($email==""){echo "You must enter email!"."<br>";}
	if($mobile==""){echo "You must enter mobile!"."<br>";}
	*/
	$name_len=strlen($name);
	if($name_len <=0) 
	{
		echo "You must enter 1 letter at least"."<br>";
	}
	else if($name_len >0)
	{
		echo "Name: ".$name."<br>";
		}
	
	if(is_numeric($age)) 
	{
		echo "Age: ".$age."<br>";
	}
    else if(is_string($age))
	{
		echo"You must enter number for Age!"."<br>";
	}
		
		if(strlen($email)==""){echo "You must enter Email";}
		else {echo "Email: ".$email."<br>";}
		
		if(is_numeric($mobile)) 
	{
		echo "Mobile: ".$mobile."<br>";
	}
    else if(is_string($mobile))
	{
		echo"You must enter number for mobile!"."<br>";
	}
}
		

?>
</body>
</html>