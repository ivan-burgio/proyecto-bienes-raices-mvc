<main class="contenedor seccion">
    <h1>Nuevo Blog</h1>

    <?php foreach($errores as $error): ?>
        <div class="alerta error">
            <?php echo $error; ?>
        </div>
    <?php endforeach; ?>

    <a href="/admin" class="boton boton-verde">&larr; Volver</a>
        
    <form class="formulario" method="POST" enctype="multipart/form-data">
        <?php include 'formulario_blogs.php'; ?>

        <input type="submit" value="Crear blog" class="boton boton-verde">
    </form>
</main>