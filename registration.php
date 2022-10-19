
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/mystyle1.css" />
  <link rel="stylesheet" type="text/css" href="css/iniciostyle.css" /> 
  <link rel="stylesheet" href="css/mediascreen.css"> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<nav id='menu'>
         <input type='checkbox' id='responsive-menu'><label></label>
         <ul>
            <li><img src="imagenes/logo/adopcion.png" alt="" width="30px"></li>
            <li><a href='html/index.html'>Inicio</a></li>
            <li><a href='html/pagina2.html'>Galeria</a></li>
            <li><a href='#'>Registro</a></li>
            <li><a href='users.php'>Usuarios</a></li>
            
         </ul>
</nav>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<br><br><br><br><br><br>
<center>
<h2>¿Queires ayduar?</h2>
<h3>Dejanos tus datos para ponernos en conctacto contigo</h3>
</center>

<hr/>
<form action="register.php" method="POST">
  <div class="container">
	<input type="text" placeholder="Nombre" name="firstname" required>
    <input type="text" placeholder="Apellido" name="middlename" required>
    <input type="text" placeholder="Segundo Apellido" name="lastname" required>
  	<label>Fecha de Nacimiento</label>
    <input type="date" name="birthdate" required>
    <label>Contacto</label>
    <input type="email" placeholder="Correo electronico" name="username" required><br><br>
    <input type="text" placeholder="Telefono" name="telefono" maxlength="10" required>
    <div class="clearfix">
      <button type="submit" class="signupbtn">Registrarse</button>
	  <button type="reset" class="cancelbtn">Cancelar</button>
    </div>
  </div>
</form>
<br><br><br><br><br><br>
<footer class="site-footer">
         <div class="container">
            <div class="row">
               <div class="col-sm-12 col-md-6">
                  <h6>Acerca de mi</h6>
                  <p class="text-justify">Mi nombre es Dora Elci Borja Campos y estoy aprendiendo a crear paginas web</p>
               </div>
               <div class="col-xs-6 col-md-3">
                  <h6>Pagina creada con</h6>
                  <ul class="footer-links">
                     <li><a href="#">HTML</a></li>
                     <li><a href="#">CSS</a></li>
                     <li><a href="#">BOOSTRAP</a></li>
                  </ul>
               </div>
               <div class="col-xs-6 col-md-3">
                  <h6>Links de interes</h6>
                  <ul class="footer-links">
                     <li><a href="https://colombia.travel/">Colombia Travel</a></li>
                     <li><a href="https://www.youtube.com/channel/UCn5gdELIh-D7qMsk4MbKGAg">Conoce un poco mas de colombia</a></li>
                     <li><a href="#">Otras cosas</a></li>
                  </ul>
               </div>
            </div>
            <hr>
         </div>
         <div class="container">
            <div class="row">
               <div class="col-md-8 col-sm-6 col-xs-12">
                  <p class="copyright-text">Copyright &copy; 2022 All Rights Reserved by 
                     <a href="#">me and to me</a>.
                  </p>
               </div>
               <div class="col-md-4 col-sm-6 col-xs-12">
                  <ul class="social-icons">
                     <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                     <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                     <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
                     <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                  </ul>
               </div>
            </div>
         </div>
      </footer>
</body>
</html>