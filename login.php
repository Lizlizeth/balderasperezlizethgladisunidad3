<?php
session_start();
require 'db_conexion.php';
# BUSCAR Username y Password

if (isset($_POST['login'])) {
  $matricula = $_POST['matricula'];
  $pass = $_POST['pass'];

  $select = $cnnPDO->prepare('SELECT * from alumnos_registrados WHERE matricula =? and pass=?');

  $select->execute([$matricula, $pass]);
  $count = $select->rowCount();
  $campo = $select->fetch();

  if ($count) {
    $_SESSION['name'] = $campo['name'];
    header('location:index.php');
  }
}
# Termina Código de BUSCAR
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
        <h1>Inica Sesion </h1>
            <label for="">Ingresa tu matricula</label>
            <input type="text" name="matricula" placeholder="Ingresa tu matricula">
            <label for="">Ingresa tu contraseña</label>
            <input type="password" name="pass" placeholder="Ingresa tu contraseña">
            <button type="submit" name="login">Iniciar sesion</button>
        </form>
    </div>
</body>
</html>