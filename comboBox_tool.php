<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="style.css"/>
<title>Earth</title>
</head>

<body class="img-style">
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
<img src="images/pic.png" style="position:absolute" />
<?php

if($_POST==true){
	
$loc=$_POST["location"];

switch ($loc){
	
// Antaractica
case 'Antarctica': 
{ ?>
<img src="images/img/antarctica.png" 
width="76" height="68" 
  style=" padding:200px 200px 10px 300px;position:relative" />
<audio controls autoplay><source src="\ogg\antarctica.ogg" type="audio/ogg">  
</audio> 
<?php
break;
}

// Africa
case 'Africa': 
{ ?>
<img src="images/img/africa.png" 
width="76" height="68" 
style=" padding:120px 0 0 250px;position:relative" />
<audio controls autoplay><source src="\ogg\africa.ogg" type="audio/ogg">  
</audio> 
<?php
break;
}

// South America
case 'South America': 
{ ?>
<img src="images/img/south_america.png" 
width="76" height="68" 
style=" padding:180px 200px 100px 100px;position:relative" />
<audio controls autoplay><source src="\ogg\south_america.ogg" type="audio/ogg">  
</audio> 
<?php
break;
}

// North America
case 'North America': 
{ ?>
<img src="images/img/north_america.png" 
width="76" height="68" 
style=" padding:20px 300px 200px 20px;position:relative" />
<audio controls autoplay><source src="\ogg\north_america.ogg" type="audio/ogg">  
</audio> 
<?php
break;
}

// Australia
case 'Australia': 
{ ?>
<img src="images/img/australia.png" 
width="76" height="68" 
style=" padding:200px 50px 50px 450px;position:relative" />
<audio controls autoplay><source src="\ogg\australia.ogg" type="audio/ogg">  
</audio> 
<?php
break;
}

// Asia
case 'Asia': 
{ ?>
<img src="images/img/asia.png" 
width="76" height="68" 
style=" padding:10px 10px 400px 400px;position:relative" />
<audio controls autoplay><source src="\ogg\asia.ogg" type="audio/ogg">  
</audio> 
<?php
break;
}

// Europe
case 'Europe': 
{ ?>
<img src="images/img/europe.png" 
width="76" height="68" 
style=" padding:5px 200px 700px 275px;position:relative" />
<audio controls autoplay><source src="\ogg\europe.ogg" type="audio/ogg">  
</audio> 
<?php
break;
}
default:{
}
} //end switch

}  //end if _$POST
?>


  

</body>
</html>