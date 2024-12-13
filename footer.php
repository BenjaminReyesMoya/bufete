<?php
// Variables para información de contacto
$contactInfo = [
    'direccion' => 'Departamento de Industrias, Estación Central',
    'telefono' => '+56 976 560 640',
    'email' => 'usach@usach.cl',
    'horario' => 'Lunes a Viernes: 9:00 - 18:00'
];

// Enlaces de redes sociales
$socialMedia = [
    'linkedin' => '#',
    'twitter' => '#',
    'facebook' => '#',
    'instagram' => '#'
];

// Enlaces de navegación
$quickLinks = [
    'index.php' => 'Inicio',
    'sobre-nosotros.php' => 'Sobre Nosotros',
    'servicios.php' => 'Servicios',
    'asesoria.php' => 'Asesoría',
    'equipo.php' => 'Equipo Profesional',
    'contacto.php' => 'Contacto'
];

// Áreas de práctica
$practiceAreas = [
    'Defensa Penal',
    'Asesoría Legal',
    'Derecho Familiar',
    'Derecho Corporativo'
];
?>

<footer>
    <div class="container">
        <div class="footer-content">
            <!-- Información de contacto -->
            <div class="footer-section">
                <h3>Contacto</h3>
                <ul>
                    <li><i class="icon-location"></i> <?php echo htmlspecialchars($contactInfo['direccion']); ?></li>
                    <li><i class="icon-phone"></i> <?php echo htmlspecialchars($contactInfo['telefono']); ?></li>
                    <li><i class="icon-email"></i> <a href="mailto:<?php echo htmlspecialchars($contactInfo['email']); ?>"><?php echo htmlspecialchars($contactInfo['email']); ?></a></li>
                    <li><i class="icon-clock"></i> <?php echo htmlspecialchars($contactInfo['horario']); ?></li>
                </ul>
            </div>

            <!-- Áreas de práctica -->
            <div class="footer-section">
                <h3>Áreas de Práctica</h3>
                <ul>
                    <?php foreach ($practiceAreas as $area): ?>
                        <li><?php echo htmlspecialchars($area); ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>

            <!-- Enlaces rápidos -->
            <div class="footer-section">
                <h3>Enlaces Rápidos</h3>
                <ul>
                    <?php foreach ($quickLinks as $url => $label): ?>
                        <li><a href="<?php echo htmlspecialchars($url); ?>"><?php echo htmlspecialchars($label); ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>

        <div class="footer-bottom">
            <!-- Redes sociales -->
            <div class="social-media">
                <?php foreach ($socialMedia as $platform => $url): ?>
                    <a href="<?php echo htmlspecialchars($url); ?>" class="social-icon <?php echo htmlspecialchars($platform); ?>" target="_blank" rel="noopener noreferrer">
                        <i class="icon-<?php echo htmlspecialchars($platform); ?>"></i>
                    </a>
                <?php endforeach; ?>
            </div>

            <!-- Información legal -->
            <div class="legal">
                <p>&copy; <?php echo date('Y'); ?> <?php echo htmlspecialchars($siteName ?? 'beliuk Conde & abogados'); ?>. Todos los derechos reservados.</p>
                <p>
                    <a href="privacidad.php">Política de Privacidad</a> | 
                    <a href="terminos.php">Términos y Condiciones</a>
                </p>
            </div>
        </div>
    </div>
</footer>

</body>
</html>
