<!DOCTYPE html>
<head>
<title>If Statement</title>
</head>

<body>
<form action="if_else.php" method="post">
<input type="text" name="zkzk">
<input type="submit" value="send">
</form>
<?php
if($_POST==true){
$x=$_POST["zkzk"];


if($x==""){echo "U Didn`t type anything";}
else { echo $x;}


}
?>
</body>
</html>