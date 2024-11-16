<?php
session_start();

// Verificar si el usuario ha iniciado sesión
if (!isset($_SESSION['user_id'])) {
    // Si no está autenticado, redirigir a la página de login
    header("Location: login.php");
    exit();
}

// Obtener el nombre de usuario desde la sesión
$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="dashboard-container">
        <h2>Bienvenido, <?php echo htmlspecialchars($username); ?>!</h2>
        <p>¡Has iniciado sesión exitosamente!</p>
        
        <!-- Botón de cerrar sesión -->
        <form action="logout.php" method="POST">
            <button type="submit" class="btn">Cerrar sesión</button>
        </form>
    </div>
</body>
</html>
