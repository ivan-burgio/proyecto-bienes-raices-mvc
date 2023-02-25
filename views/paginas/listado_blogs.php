<article class="entrada-blog"> <!-- ---------- inicio .entrada-blog --------- -->
    <?php foreach($blogs as $blog): ?>

    <div class="imagen">
        <img loading="lazy" src="/imagenes/<?php echo $blog->imagen; ?>" alt="texto entrada blog">
    </div>
    <div class="texto-entrada">
        <a href="/entrada?id=<?php echo $blog->id; ?>">
            <h4><?php echo $blog->titulo; ?></h4>
            <p>Escrito el: <?php echo $blog->creado; ?></p>
            <p><?php echo $blog->descripcion; ?></p>
        </a>
    </div>
    <?php endforeach; ?>
</article> <!-- ---------- fin .entrada-blog --------- -->