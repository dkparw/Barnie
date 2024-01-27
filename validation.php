<?php
$con = mysqli_connect("localhost","root","pw","Friend");
$query = 'select * from Users;';

  $us=$_POST['user'];  
  $as=$_POST['passwd'];
  $sa = mysqli_real_escape_string($con,$as);
  $su = mysqli_real_escape_string($con,$us);
  //var_dump($_POST);
  if(isset($_POST['envio'])){
    if(!empty($_POST['passwd']) && !empty($_POST['user'])){
	  
      $query = "select * from Users where name='$su' and passwd='$sa';";
      $res = mysqli_query($con,$query);
      $row = mysqli_fetch_array($res);
        if(!empty($row) && mysqli_num_rows($res)>0){
          session_start();
          $_SESSION['user'] = $row['name'];
          //echo $_SESSION['user'];

          echo "<h3 style='background:#99ff99; pading:10px; color='#000000';>Inicio de sesion exitoso</h3>";
          header("refresh:1;url=index.php");
        }else{ 
	  echo "<h3 style='background:#ff9999; pading:10px; color='#ffffff';>User o password incorrects</h3>";
        }	
      }else{
	echo "<h3 style='background:#ff9999; pading:10px; color='#ffffff';>Llena los campos</h3>";
      }
  }
/*
while($row=mysqli_fetch_array($res)){
	echo "Users: ". $row["name"]."<br/>";
}*/
?>
