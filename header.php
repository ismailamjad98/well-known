<html> 

<head> 

	<title>Header</title> 

<style>
body {margin:0;font-family:Arial}

.topnav {
  overflow: hidden;
  background-color: black;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.active {
  background-color:black ;
  color: white;
}

.topnav .icon {
  display: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 17px;    
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.topnav a:hover, .dropdown:hover .dropbtn {
  background-color: #555;
  color: white;
}

.dropdown-content a:hover {
  background-color: #ddd;
  color: black;
}

.dropdown:hover .dropdown-content {
  display: block;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child), .dropdown .dropbtn {
    display: none;
  }
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
  .topnav.responsive .dropdown {float: none;}
  .topnav.responsive .dropdown-content {position: relative;}
  .topnav.responsive .dropdown .dropbtn {
    display: block;
    width: 100%;
    text-align: left;
  }
}


body { 
  background-image:'images/logo.JPG';
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-position: center; 
}



</style>
	
		<style>
#grad1 {
  height: 5%;
  width: 100%
  background-color: red; /* For browsers that do not support gradients */
  background-image: linear-gradient(to right, black, white);
}
</style>
	

</head>

<table align="center" border="0" width="100%"  > 
	
		<tr>
	     <th width="200"><img src="images/arrowl.jpg" alt="left Image" align="left" height="120"</th>
		 <th width="200"><img src="flag.gif" alt="left Image" align="left" height="120"></th>
		 <th width="400"></th>
	   	<th width="400"></th>
	    <th width="600" align="left" background='images/bgleft.jpg'>&#128241;:+1-289-938-1727|✉sales@colarusgroup.ca</th>
			
			
		</tr>
	
	
</table>

<table>
<div class="topnav" id="myTopnav">
<div id="grad1">
  <a href="index.php" class="active">Home</a>
  <a href="about.php">About</a>
  <a href="contact.php">Contact</a>
  <div class="dropdown">
    <button class="dropbtn">Product
	
      <i class="fa fa-caret-down"></i>
	  
    </button>
    <div class="dropdown-content">
        <img src="images/strip.png" alt="left Image" align="left" height="50px">
      <a href="lbracket.php"> <br> L Series</br> Blak Brackets</a>
	  <a href="ubracket.php"><br> U Series</br> Brackets</a> 
	  <a href="wallmb.php"> Heat Pump Wall<br>Mounting Bracket</br></a> 
 	   <a href="stand.php"> Heat Pump<br> Floor Stand</a> 
         <a href="stand.php">  Aluminum Adjustable <br> heat pump floor stand</a>
		  <a href="inso.php">  HVAC Insulation Foam </a>
		 	   <a href="anchor.php"> Concrete Anchor Bolt </a>
		  <a href="airduct.php">  Air Ducts Connector </a>
		    <a href="flexibleduct.php"> Insulated Flexible Duct</a>
			 <a href="flexible181.php"> Insulated Flexible Duct 181</a>
    </div>
  </div> 
 
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
  <img src="images/strip.png" alt="right Image" align="right" height="50px">
</div>



<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>

</table>

</html>

