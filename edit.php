<?php
	include("config.php");
	$id = $_GET['id'];
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/mystyle1.css" />
  <link rel="stylesheet" type="text/css" href="css/iniciostyle.css" /> 
</head>
<body>
<nav id='menu'>
         <input type='checkbox' id='responsive-menu'><label></label>
         <ul>
		 	<li><img src="imagenes/logo/adopcion.png" alt="" width="30px"></li>
			<li><a href='html/index.html'>Inicio</a></li>
            <li><a href='html/pagina2.html'>Galeria</a></li>
            <li><a href='registration.php'>Registro</a></li>
            <li><a href='../users.php'>Usuarios</a></li>
         </ul>
</nav>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<br><br><br><br><br>

<center>
<h2>Actualizar Datos</h2>
</center>
<hr/>

<form action="update.php" method="POST">
  <div class="container">
  <?php
	$result = mysqli_query($mysqli,"SELECT * FROM users WHERE username ='$id'");
	while($row = mysqli_fetch_array($result))
	{
	echo"<input type='hidden' name='id' value='{$row['username']}' required>";
    echo"<input type='text' placeholder='Nombre' name='firstname' value='{$row['firstname']}' required>";
    echo"<input type='text' placeholder='Apellido' name='middlename' value='{$row['middlename']}' required>";
    echo"<input type='text' placeholder='Segundo Apellido' name='lastname' value='{$row['lastname']}' required>";
  	echo"<label><b>Fecha Cumpleaños</b>";
    echo"<input type='date' name='birthdate' value='{$row['birthdate']}'required>";
    echo"</label>";
    echo"<label><b>Datos de conctacto</b>";
    echo"<input type='text' placeholder='Correo' name='username' value='{$row['username']}' required>";
    echo"<input type='text' placeholder='Telefono' name='telefono' value='{$row['telefono']}' required>";
    echo"<div class='clearfix'>";
    echo"<button type='submit' class='signupbtn'>Actualizar</button>";
	echo"</div>";
	}?>
  </div>
</form>

