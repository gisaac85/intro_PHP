<!DOCTYPE html>
<head>
<title>If Statement</title>
</head>
<body>
<form action="if_statement.php" method="post">
<input type="text" name="zkzk">
<input type="submit" value="send">
</form>
<?php
if($_POST==true){
$x=$_POST["zkzk"];
echo $x;
 }
?>
</body>
</html>