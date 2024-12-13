<?php
// Iniciamos la sesión si es necesaria
session_start();

// Función para determinar si la página actual está activa
function isCurrentPage($page) {
    return strpos($_SERVER['PHP_SELF'], $page) !== false ? 'active' : '';
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <?php
    // Variables para metadatos
    $siteName = "Bufete de Abogados";
    $siteDescription = "Asesoría legal y defensa penal especializada.";
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo htmlspecialchars($siteDescription); ?>">
    <meta name="keywords" content="abogados, defensa penal, asesoría legal, ley, equipo jurídico">
    <meta name="author" content="El Ingeniero Ingenuo">
    <title><?php echo htmlspecialchars($siteName); ?></title>

    <!-- Metaetiquetas para redes sociales -->
    <meta property="og:title" content="<?php echo htmlspecialchars($siteName); ?>">
    <meta property="og:description" content="<?php echo htmlspecialchars($siteDescription); ?>">
    <meta property="og:image" content="<?php echo htmlspecialchars('img/icon.png'); ?>">
    <meta property="og:url" content="<?php echo htmlspecialchars('http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']); ?>">
    <meta name="twitter:card" content="summary_large_image">

    <!-- Estilos -->
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
<header>
    <div class="container">
        <div class="logo">
            <a href="index.php" aria-label="Ir al inicio">
                <img src="img/icon.png" alt="<?php echo htmlspecialchars($siteName); ?>">
            </a>
        </div>
        <nav>
            <ul>
                <?php
                $menuItems = [
                    'index.php' => 'Inicio',
                    'sobre-nosotros.php' => '¿Quiénes Somos?',
                    'servicios.php' => 'Servicios',
                    'asesoria.php' => 'Asesoría',
                    'equipo.php' => 'Equipo Profesional',
                    'contacto.php' => 'Contacto'
                ];

                foreach ($menuItems as $url => $label) {
                    echo '<li><a href="' . $url . '" class="' . isCurrentPage($url) . '">' . 
                         htmlspecialchars($label) . '</a></li>';
                }
                ?>
            </ul>
        </nav>
    </div>
</header>
