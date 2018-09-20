<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$x=array("a."=>"C#","d."=>"VB","c."=>"JS","e."=>"Zend","b."=>"A");
ksort($x); //sort according the keys of array
?>
<pre>
<?php
print_r ($x);
?>
</pre>
<?php
asort($x); //sort according the vlaues of array
?>
<pre>
<?php
print_r ($x);
?>
</pre>
</body>
</html>