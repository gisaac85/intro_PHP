<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Earth</title>
<!--<style>
select.option::selection {
	background: #ffb7b7; /* Safari */
	}
select.option::-moz-selection {
	background: #ffb7b7; /* Firefox */
}
</style>-->
<style>
body { background-image:url(images/backgroung.jpg)}
#combo { margin:30px;}
option:hover {
background:#000;
color: #fff;
font-weight:bold;

}
.color1 { background-color:#600;color:#CFF;}
.color2 { background-color:#603; color:#CF9;}
.color3 { background-color:#606; color:#CF3;}
.color4 { background-color:#609; color:#dFf;}
.color5 { background-color:#60C; color:#dFC;}
.color6 { background-color:#60F; color:#dFF;}
.color7 { background-color:#69f; color:#dF0;}
</style>
</head>

<body>
<div id="combo">
<form action="switch.php" method="post">
<!--<input type="text" name="location" />-->
<select  size="6" name="location" >

  <option class="color1" value="Antarctica">Antarctica</option>
  <option class="color2" value="Africa" >Africa</option>
  <option class="color3" value="South America">South America</option>
  <option class="color4" value="North America">North America</option>
  <option class="color5" value="Australia">Australia</option>
  <option class="color6" value="Asia">Asia</option>
  <option class="color7" value="Europe">Europe</option>

 
</select>
<input type="submit" value="Go" />
</form>
</div>
<img src="images/pic.png" style="position:absolute; "/>

<?php
if($_POST==true)
	{ 
		$loc=$_POST["location"];
		
		
		switch ($loc)
		{
//------------------------------------------------------------------			
		case "Africa":
		?>
             <img 
                 src="images/img/africa.png" 
                 width="76" height="68" 
                 style=" padding:120px 0 0 250px;position:relative"
             />
             <audio  autoplay>
                <source src="audio/ogg/africa.ogg" type="audio/ogg">
                <source src="audio/mp3/africa.mp3" type="audio/mpeg">
            </audio>
		<?php ;
		break;
//------------------------------------------------------------------
		case "South America":
		?>
             <img 
                src="images/img/south_america.png" 
                width="76" height="68" 
                style=" padding:150px 0 0 70px;position:relative"
             />
             <audio  autoplay>
               <source src="audio/ogg/south_america.ogg" type="audio/ogg">
               <source src="audio/mp3/south_america.mp3" type="audio/mpeg">
            </audio>
         <?php ;
		break;
//------------------------------------------------------------------
		case "North America":
		?>
             <img 
                 src="images/img/north_america.png" 
                 width="76" height="68" 
                 style=" padding-left:22px;position:relative"
             />
              <audio  autoplay>
                <source src="audio/ogg/north_america.ogg" type="audio/ogg">
                <source src="audio/mp3/north_america.mp3" type="audio/mpeg">
            </audio>
		<?php ;
		break;
//------------------------------------------------------------------
		case "Asia":
		?>
            <img 
                src="images/img/asia.png" 
                width="76" height="68" 
                style=" padding:2px 0 0 400px;position:relative"
            />
            <audio  autoplay>
              <source src="audio/ogg/asia.ogg" type="audio/ogg">
              <source src="audio/mp3/asia.mp3" type="audio/mpeg">
            </audio>
		<?php ;
		break;
//------------------------------------------------------------------
		case "Australia":
		?>
            <img 
                src="images/img/australia.png" 
                width="76" height="68" 
                style=" padding:190px 0 0 450px;position:relative"
            />
            <audio  autoplay>
                <source src="audio/ogg/australia.ogg" type="audio/ogg">
                <source src="audio/mp3/australia.mp3" type="audio/mpeg">
            </audio>
		<?php ;
		break;
//------------------------------------------------------------------
		case "Europe":
		?>
            <img 
                src="images/img/europe.png" 
                width="76" height="68" 
                style=" padding-left:290px;position:relative"
            />
            <audio  autoplay>
                <source src="audio/ogg/europe.ogg" type="audio/ogg">
                <source src="audio/mp3/europe.mp3" type="audio/mpeg">
            </audio>
		<?php ;
		break;
//------------------------------------------------------------------
		case "Antarctica":
		?>
            <img 
                src="images/img/antarctica.png" 
                width="76" height="68" 
                style=" padding:200px 0 0 350px;position:relative"
            />
<audio  autoplay>
                <source src="audio/ogg/antarctica.ogg" type="audio/ogg">
                <source src="audio/mp3/antarctica.mp3" type="audio/mpeg">
            </audio>
		<?php ;
		break;
//------------------------------------------------------------------
		default:
		
		}
		
	}
?>


</body>
</html>