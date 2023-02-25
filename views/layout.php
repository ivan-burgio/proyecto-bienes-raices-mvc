<?php

    if (!isset($_SESSION)) {
        session_start();
    }
    $auth = $_SESSION['login'] ?? false;

    if (!isset($inicio)) {
        $inicio = false;
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/build/css/app.css?a=<?php echo(rand()); ?>">
    <title>Bienes Raices</title>
</head>
<body>

    <header class="header <?php echo $inicio ? 'inicio' : ''; ?>"> <!-- -------------------- inicio .header -------------------- -->
        <div class="contenedor contenido-header">

            <div class="barra"> <!-- ---------- inicio .barra ---------- -->

                <a class="logo" href="/">
                    <img src="/build/img/logo.svg" alt="logotipo de Bienes Raices">
                </a>
                <div class="derecha">
                    <img class="dark-mode-boton" src="/build/img/dark-mode.svg">
                    <div class="mobile-nav">
                        <div class="mobile-menu">
                            <img src="/build/img/barras.svg" alt="icono menu responsive">
                        </div>                        
                        <nav class="navegacion">
                            <a href="/nosotros">Nosotros</a>
                            <a href="/anuncios">Anuncios</a>
                            <a href="/blog">Blog</a>
                            <a href="/contacto">Contacto</a>
                            <?php if($auth) : ?>
                                <a href="/admin">Admin</a>
                            <?php endif; ?>
                        </nav>
                    </div>
                </div>
            </div> <!-- ---------- fin .barra ---------- -->

            <?php if($inicio) { ?>
                <h1>Venta de Casas y Departamentos Exclusivos de lujo</h1>
            <?php } ?>

        </div>
    </header> <!-- -------------------- fin .header -------------------- -->

    <?php echo $contenido; ?>

    <footer class="footer seccion"> <!-- -------------------- inicio .footer -------------------- -->

        <div class="contenedor contenido-footer">
            <nav class="navegacion">
                <a href="/nosotros">Nosotros</a>
                <a href="/anuncios">Anuncios</a>
                <a href="/blog">Blog</a>
                <a href="/contacto">Contacto</a>
                <?php if($auth) { ?>
                    <a href="/logout">Cerrar Sesión</a>
                <?php } else { ?>
                    <a href="/login">Iniciar Sesión</a>
                <?php }  ?>
            </nav>
        </div>

        <p class="copyright">Todos los derechos reservados <?php echo date('Y'); ?> &copy;</p>

    </footer> <!-- -------------------- fin .footer -------------------- -->

    <script src="/build/js/bundle.min.js"></script>
</body>
</html>