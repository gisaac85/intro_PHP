<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form method="post" action="if_statment.php">
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

echo "Name: ".$name."<br>";
echo "Age: ".$age."<br>";
echo "Email: ".$mobile."<br>";
echo "Mobile: ".$mobile."<br>";
}
?>
</body>
</html>