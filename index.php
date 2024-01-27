<?php
session_start();
$use = $_SESSION['user'];
  if(!isset($use)){
	  header("refresh:0;url=login.php");
  }
?>
<DOCTYPE html>
<head>
<title>Pony | Home</title>
</head>
<body>
<h1><center>Welcome 
<?php session_start(); echo $_SESSION['user']; ?>
  <a href='close-session.php'><input type='submit' name='close' value='Cerrar session'/></a>
</h1></center>
<hr><br>
</body
</html> 
