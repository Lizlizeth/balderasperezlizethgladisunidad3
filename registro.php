<?php
require_once 'db_conexion.php';
if (isset($_POST['registrar'])) 
{  
	$matricula=$_POST['matricula'];
	$name=$_POST['name'];
	$email=$_POST['email'];
    $pass = $_POST['pass'];
	$carrera=$_POST['carrera'];
    $genero=$_POST['genero'];
    $fecha=$_POST['fecha'];

	
	if (!empty($matricula) && !empty($name) && !empty($email) && !empty($pass) && !empty($carrera) && !empty($genero) && !empty($fecha))	{
		  
			$sql=$cnnPDO->prepare("INSERT INTO alumnos_registrados
			(matricula,name, email, pass, carrera, genero,fecha ) VALUES (:matricula, :name, :email, :pass, :carrera, :genero, :fecha)");
		
			$sql->bindParam(':matricula',$matricula);
			$sql->bindParam(':name',$name);
			$sql->bindParam(':email',$email);
            $sql->bindParam(':pass',$pass);
			$sql->bindParam(':carrera',$carrera);
            $sql->bindParam(':genero',$genero);
            $sql->bindParam(':fecha',$fecha);
			$sql->execute();
			unset($sql);
			unset($cnnPDO);
		
	}  
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="form">
        
        <form method="post">
        <h1>Registro de alumno</h1>
            <label for="">Matricula</label>
            <input type="text" name="matricula" placeholder="Matricula">
            <label for="">Nombre</label>
            <input type="text" name="name" placeholder="Ingrese su nombre">
            <label for="">Correo</label>
            <input type="email" name="email" placeholder="Ingresa tu correo">
            <label for="">Ingresa una contraseña</label>
            <input type="password" name="pass" placeholder="Ingresa tu contraseña">
            <select name="carrera" id="carrera">
                <option value="opcion1">Seleccione una carrera</option>
                <option value="Desarrollo de software">Desarrollo de Software</option>
                <option value="Redes">Redes</option>
                <option value="Mecatronica">Mecatronica</option>
                <option value="Biotecnologia">Biotecnologia</option>
            </select>
            <select name="genero" id="genero">
                <option value="opcion1">Selecciona tu genero</option>
                <option value="Masculino">Masculino </option>
                <option value="Femenino">Femenino</option>
            </select>
            <label for="">Fecha de registro</label>
            <input type="date" name="fecha">
            <button type="submit" name="registrar">Registrar</button>

            <a href="login.php">Inicia sesion</a>
        </form>
    </div>
</body>
</html>