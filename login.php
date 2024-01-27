<DOCTYPE html>
<head>
<title>Pony | Login</title>
</head>
<body>
<div class='docker'>
 <form method='post'><center>
  <h1> Login</h1>
   <hr>
    <?php
      include 'validation.php';
    ?>
    <input type='text' name='user'placeholder='User'/><br><br>
    <input type='password' name='passwd'placeholder='Password'/><br><br>
    <input type='submit' name='envio' value='Enviar'/><br><br>
 </form>
</div>
</body>
</html>
