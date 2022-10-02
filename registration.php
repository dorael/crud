
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/mystyle1.css" /> 
</head>
<body>
<div class="icon-bar">
  <a class="active" href="home.php">Home</a> 
  <a href="users.php">Usuarios</i></a> 
  <a href="registration.php">Registrar</i></a>
</div>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<h2>Registrarse</h2>
<hr/>
<form action="register.php" method="POST">
  <div class="container">
	<input type="text" placeholder="Nombre" name="firstname" required>
    <input type="text" placeholder="Apellido" name="middlename" required>
    <input type="text" placeholder="Segundo Apellido" name="lastname" required>
  	<label>Fecha de Nacimiento</label>
    <input type="date" name="birthdate" required>
    <input type="text" placeholder="Usuario" name="username" required>
    <input type="password" placeholder="Nueva Contraseña" name="password" required>
    <input type="password" placeholder="Repetir Contraseña" name="psw-repeat" required>
    <div class="clearfix">
      <button type="submit" class="signupbtn">Registrarse</button>
	  <button type="reset" class="cancelbtn">Cancelar</button>
    </div>
  </div>
</form>