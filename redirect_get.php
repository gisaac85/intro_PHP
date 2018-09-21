<!DOCTYPE html>
<html>
<body>
<form action="redirect_get.php" method="get">
Username: <input type="text" name="username" autofocus>
<br>
Password: <input type="password" name="password">
<br>
<input type="submit">
</form>
<?php
if($_GET==true){
 echo "Username: ".$_GET["username"]."<br>"; 

 echo "Password: ".$_GET["password"];
}
?>
</body>
</html>