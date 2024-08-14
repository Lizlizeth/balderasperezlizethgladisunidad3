<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Página de Inicio</title>
</head>
<body>
    <header>
        <div class="welcome">
            <h1>Bienvenido a la Plataforma de Estudiantes</h1>
            <?php if(isset($_SESSION['name'])): ?>
                <p>Hola, <?php echo htmlspecialchars($_SESSION['name']); ?>! Nos alegra verte de nuevo.</p>
            <?php else: ?>
                <p>Bienvenido a nuestra plataforma. Por favor, <a href="login.php">inicia sesión</a> o <a href="registro.php">regístrate</a> para continuar.</p>
            <?php endif; ?>
        </div>
    </header>

    <main>
        <div class="container">
            <section>
                <h2>Sobre Nosotros</h2>
                <p>En nuestra plataforma, nos dedicamos a ofrecer a los estudiantes las herramientas necesarias para gestionar su información académica de manera eficiente. Regístrate, inicia sesión y accede a nuestros recursos.</p>
            </section>

            <section>
                <h2>Enlaces Rápidos</h2>
                <div class="links">
                    <a href="register.php" class="button">Registrar Nuevo Alumno</a>
                    <a href="login.php" class="button">Iniciar Sesión</a>
                    <a href="logout.php" class="button">Cerrar Sesion</a>
                </div>
            </section>
        </div>
    </main>

    <footer>
        <div class="container">
            <p>&copy; 2024 Plataforma de Estudiantes. Todos los derechos reservados.</p>
        </div>
    </footer>
</body>
</html>
