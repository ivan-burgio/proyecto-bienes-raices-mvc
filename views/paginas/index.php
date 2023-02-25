<main class="contenedor seccion"> <!-- -------------------- inicio main -------------------- -->
    <h2>Más sobre nosotros</h2>
    <?php include 'iconos.php' ?>
</main> <!-- -------------------- fin main -------------------- -->

<section class="seccion contenedor">
    <h2>Casas y Departamentos en Venta</h2>
    
    <?php include 'listado_propiedades.php'; ?>

    <div class="alinear-derecha">
        <a href="/anuncios" class="boton boton-verde">Ver Todas</a>
    </div>
</section>

<section class="imagen-contacto"> <!-- ---------- inicio .imagen-contacto --------- -->
    <h2>Encuentra la casa de tus seños</h2>
    <p>Llena el formulario de contacto y un asesor se pondra en contacto contigo a la brevedad</p>
    <a href="/contacto" class="boton-amarillo">Contactanos</a>
</section> <!-- ---------- fin .imagen-contacto --------- -->

<div class="contenedor seccion seccion-inferior"> <!-- ---------- inicio .seccion-inferior --------- -->
    <section class="blog">
        <h3>Nuestro Blog</h3>
        
        <?php include 'listado_blogs.php'; ?>
    </section>

    <section class="testimoniales">
        <h3>Testimoniales</h3>
        <div class="testimonial">
            <blockquote>
                El personal se comportó de una excelente forma, muy buena atención y la casa que me 
                ofrecieron cumple con todas mis espectativas.
            </blockquote>
            <p>- Iván Burgio</p>
        </div>
    </section>

</div> <!-- ---------- fin .seccion-inferior --------- -->