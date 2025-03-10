<?php


/**
 * Archivo: index.php
 * Descripción: Archivo principal del sitio web que carga dinámicamente las páginas de contenido.
 * Autor: [Luis Pilaguano]
 * Fecha: [24-01-2025]
 */

$page = isset($_GET['page']) ? $_GET['page'] : 'Vista/Inicio.html';  // Asegúrate de poner la ruta completa de la página
?>

<?php include('header.php'); ?>
<div class="contenedor">
    <?php
    if (file_exists($page)) {
        include($page);
    } else {
        echo "<p>Página no encontrada.</p>";
    }
    ?>
</div>
<?php include('footer.php'); ?>
