<!DOCTYPE html>
<html >

<head>
<title>Array Functions</title>
</head>

<body>

<?php $associative=array(
						"C-name"=>"A-aly",
						"A-phone"=>"C-234423",
						"B-Address"=>"d-nacer city",
						"d-Address"=>"B-nacer city"
						);
						?>
<p>count() - return the number of elements of an array.</p>                        
<?php 
$elements= count($associative);
echo $elements;
?>
<table border="1">
<tr>
<td><p>sort() - sort arrays in ascending order.</p>
<?php sort($associative);?>
<pre>
<?php print_r($associative);?>
</pre></td>
<td><p>rsort() - sort arrays in descending order.
</p>
<?php rsort($associative);?>
<pre>
<?php print_r($associative);?>
</pre></td>
</tr>
<tr>
<td><p>asort() - sort associative arrays in ascending order, according to the value.

</p>
<?php asort($associative);?>
<pre>
<?php print_r($associative);?>
</pre></td>
<td><p>ksort() - sort associative arrays in ascending order, according </p>
<?php ksort($associative);?>
<pre>
<?php print_r($associative);?>
</pre></td>
</tr>
<tr>
<td><p>arsort() - sort associative arrays in descending order, according to the value.
</p>
<?php arsort($associative);?>
<pre>
<?php print_r($associative);?>
</pre></td>
<td><p>krsort() - sort associative arrays in descending order, according to the key.
</p>
<?php krsort($associative);?>
<pre>
<?php print_r($associative);?>
</pre></td>
</tr>
</table>
</body>
</html>