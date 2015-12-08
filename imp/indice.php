<?php
session_start();
global $username; 
global $password; 

$host = "localhost";
$user = "prueba";
$pass = "wong1429"; 
$db = "Raspimp"; 

mysql_connect($host, $user, $pass); 
mysql_select_db($db); 

if (isset($_POST['username'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	// Query to check to see if the username and password supplied match the database records
	$sql = "SELECT * FROM usuarios WHERE idusuarios='".$username."' AND password like '%".$password."%' LIMIT 1";
	$res = mysql_query($sql);
	// If login information is correct
	if (mysql_num_rows($res) == 1) {
		
    header('Location: http://192.168.1.70:1478/'); 
    exit();
		
	} 
	// If login information is invalid
	else {
		echo "Invalid login information. Please return to the previous page.";
		exit();
	}
}

?>


<html>
<head>
<meta http-equiv = "Content-Type" content ="text/html; charset = utf-8"/>	
<p id = "titulo"><Strong>Servidor web de impresión<strong></p>	
	<title>Impresion Web</title>
</head>

<body>
	<div id = "centro">
  <div id = "dforma">
      <br />
      <br/>

<form method = "post" action = "indice.php">
Usuario: <input type = "text" name = "username"/><br /><br /> 
Contraseña:<input type = "password" name = "password"/><br /><br />
<input type = "submit" name = "submit" value = "Log In"/>

</div>
</div>
</div>


<div id = "welcome"><img src = "Raspi_Colour_R.PNG"/><p id = "welcomep"><Strong>Imprime donde sea que te encuentres<strong></p>
</div>
</body>



<style type="text/css">
#registro{
font-family: Tahoma, sans-serif;
font-size: 20px;
text-align: center; 
float:right;
display: inline-block;
margin-top: 1px; 
margin-right: 1px; 
position: relative;
top:-95px;
right:-8px;   
height: 30px;
width: 130px;
border-radius: 5px;
border:2px solid #996633 ;
background:url(wood.jpg) no-repeat center ;
background-size: cover;
}

#registro:hover{
background-color: #996633;
}

<style type="text/css">
td,th {
font-family: Tahoma, sans-serif;
color: white;
text-shadow:
       0px 0px 0 #000,
     0px 0 0 #000,  
      0px 0px 0 #000,
      0px 0px 0 #000,
       1px 1px 0 #000;
}
#titulo{
font-family: Tahoma, sans-serif;
font-size: 30px; 
text-align: center;
   color: white;
   text-shadow:
       3px 3px 0 #000,
     -1px -1px 0 #000,  
      1px -1px 0 #000,
      -1px 1px 0 #000,
       1px 1px 0 #000;
}

#centro {
display: inline-block;  
margin: 1px, 2px, 0px, 0px ;
height: 170px;
width: 350px;
border-radius: 5px;
border:4px solid #5A5C6C ;
background-color: #993333;
}

#dforma{
display: block; 
margin: auto;
text-align: center;

}
body{
background:url(red.jpg) no-repeat center fixed;
background-size: cover;
}


form{
  display: block;
  margin:auto;
  position: relative;
top:0px;
right:140px;   
}

img{
  display: block; 
  margin: auto; 
  height: 200px;
  width: 200px;
}

#welcome{
  display: block;
  margin: auto; 
}
#welcomep{
  font-family: Tahoma, sans-serif;
font-size: 40px; 
text-align: center;
   color: white;
   text-shadow:
       3px 3px 0 #000,
     -1px -1px 0 #000,  
      1px -1px 0 #000,
      -1px 1px 0 #000,
       1px 1px 0 #000;
}

body,td,th {
  font-family: Tahoma, Geneva, sans-serif;
  color: black;
}

div {
display: block  
margin: auto
height: 600px;
width: 600px;
border-radius: 25%;
color: white;
}


</style>

</html>
