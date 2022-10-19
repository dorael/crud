<?php

	
	if(isset($_POST['search']))
	{
		$valueToSearh = $_POST['valueToSearh']; 
		$query = "SELECT * FROM users WHERE firstname LIKE '%".$valueToSearh."%' OR lastname LIKE '%".$valueToSearh."%'";
		$result = filterRecord($query);
	}
	else
	{
		$query = "SELECT *FROM users";
		$result = filterRecord($query);
	}
	
	function filterRecord($query)
	{
		include("config.php");
		$filter_result = mysqli_query($mysqli, $query);
		return $filter_result;
	}
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
            <li><a href='#'>Usuarios</a></li>
         </ul>
</nav>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<h2>Usuarios</h2>
<hr/>

<div class="container">

<br>
<br>
<br>
<br>
<center>
<h2>Usuarios de la base de datos</h2>
</center>
<br>
<br>
<br />
<?php


echo "<table border='1'>
<tr>
<th>Nombre</th>
<th>Apellido</th>
<th>Segundo Apellido</th>
<th>Fecha Nacimiento</th>
<th>Correo</th>
<th>Telefono</th>
<th>Actualizar</th>
<th>Eliminar</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['firstname'] . "</td>";
echo "<td>" . $row['middlename'] . "</td>";
echo "<td>" . $row['lastname'] . "</td>";
echo "<td>" . $row['birthdate'] . "</td>";
echo "<td>" . $row['username'] . "</td>";
echo "<td>" . $row['telefono'] . "</td>";
echo "<td><a href='edit.php?id=".$row['username']."'><img src='./images/icons8-Edit-32.png' alt='Edit'></a></td>";
echo "<td><a href='delete.php?id=".$row['username']."'><img src='./images/icons8-Trash-32.png' alt='Delete'></a></td>";
echo "</tr>";
}
echo "</table>";

?>

</body>
</html> 