<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Earth</title>
</head>

<body>
<form method="post" action="comboBox_tool.php">

<select name="location" >
  <option value="">Select Land</option>
  <option value="Antarctica">Antarctica</option>
  <option value="Africa" >Africa</option>
  <option value="South America">South America</option>
  <option value="North America">North America</option>
  <option value="Australia">Australia</option>
  <option value="Asia">Asia</option>
  <option value="Europe">Europe</option>
</select>
<input type="submit" value="Go" />
</form>
<?php

if($_POST==true){
	
$loc=$_POST["location"];

switch ($loc){
	
// Antaractica
case 'Antarctica': 
{ ?>
<audio controls autoplay><source src="\ogg\antarctica.ogg" type="audio/ogg">  
</audio> 
<?php
echo $loc;
break;
}

// Africa
case 'Africa': 
{ ?>
<audio controls autoplay><source src="\ogg\africa.ogg" type="audio/ogg">  
</audio> 
<?php
echo $loc;
break;
}

// South America
case 'South America': 
{ ?>
<audio controls autoplay><source src="\ogg\south_america.ogg" type="audio/ogg">  
</audio> 
<?php
echo $loc;
break;
}

// North America
case 'North America': 
{ ?>
<audio controls autoplay><source src="\ogg\north_america.ogg" type="audio/ogg">  
</audio> 
<?php
echo $loc;
break;
}

// Australia
case 'Australia': 
{ ?>
<audio controls autoplay><source src="\ogg\australia.ogg" type="audio/ogg">  
</audio> 
<?php
echo $loc;
break;
}

// Asia
case 'Asia': 
{ ?>
<audio controls autoplay><source src="\ogg\asia.ogg" type="audio/ogg">  
</audio> 
<?php
echo $loc;
break;
}

// Europe
case 'Europe': 
{ ?>
<audio controls autoplay><source src="\ogg\europe.ogg" type="audio/ogg">  
</audio> 
<?php
echo $loc;
break;
}
default:{
}
} //end switch

}  //end if _$POST
?>


  

</body>
</html>