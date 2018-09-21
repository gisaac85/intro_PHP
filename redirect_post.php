<!DOCTYPE html>
<html>
<body>
<form action="redirect_post.php" method="post">
Username: <input type="text" name="username" autofocus>
<br>
Password: <input type="password" name="password">
<br>
<input type="submit">
</form>
<?php
if($_POST==true){
 echo "Username: ".$_POST["username"]."<br>"; 

 echo "Password: ".$_POST["password"];
}
?>
</body>
</html>