# Página Web del Proyecto

Esta carpeta contiene todos los archivos para la página web desplegable en Render.

## Estructura recomendada
- index.php - Página principal
- css/ - Estilos CSS
- js/ - Scripts JavaScript
- imagenes/ - Imágenes y recursos visuales
- includes/ - Archivos PHP incluidos

## Despliegue en Render
1. Conectar Render a este repositorio
2. Especificar **Root Directory** como /pagina-web
3. Runtime: **PHP**
4. Start Command: php -S 0.0.0.0:$PORT
"@

# Archivo PHP de ejemplo
Set-Content -Path ".\pagina-web\index.php" -Value @"
<?php
echo '<!DOCTYPE html>';
echo '<html lang="es">';
echo '<head>';
echo '    <meta charset="UTF-8">';
echo '    <meta name="viewport" content="width=device-width, initial-scale=1.0">';
echo '    <title>Proyecto ATD - Página Web</title>';
echo '    <style>';
echo '        body { font-family: Arial, sans-serif; margin: 40px; }';
echo '        .container { max-width: 800px; margin: 0 auto; }';
echo '    </style>';
echo '</head>';
echo '<body>';
echo '    <div class="container">';
echo '        <h1>Proyecto ATD - Página Web</h1>';
echo '        <p>Esta es la página principal del proyecto.</p>';
echo '        <p>Carpeta: <strong>pagina-web</strong></p>';
echo '        <hr>';
echo '        <p>Archivos disponibles:</p>';
echo '        <ul>';
echo '            <li><code>index.php</code> - Esta página</li>';
echo '            <li><code>README.md</code> - Documentación</li>';
echo '        </ul>';
echo '    </div>';
echo '</body>';
echo '</html>';
?>

<?php
// Ejemplo de conexión a base de datos (si se necesita)
//  = new mysqli("localhost", "usuario", "contraseña", "basedatos");
?>
