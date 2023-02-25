<main class="contenedor seccion contenido-centrado">
    <h1><?php echo $blog->titulo; ?></h1>
    <div class="imagen">
        <img loading="lazy" src="/imagenes/<?php echo $blog->imagen; ?>" alt="texto entrada blog">
    </div>

    <p class="informacion-meta">Escrito el: <?php echo $blog->creado; ?></p>
    <div class="resumen-propiedad">
        <p><?php echo $blog->descripcion2; ?></p>
    </div>
</main>