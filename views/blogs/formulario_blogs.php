<fieldset>
    <legend>Información del Blog</legend>

    <label for="titulo">Titulo:</label>
    <input type="text" id="titulo" name="blog[titulo]" placeholder="Titulo blog" value="<?php echo s($blog->titulo ); ?>" >

    <label for="imagen">Imagen:</label>
    <input type="file" id="imagen" accept="image/jpeg image/png" name="blog[imagen]">
    <?php if($blog->imagen):?>
        <img src="/imagenes/<?php echo $blog->imagen?>" class="imagen-small" alt="<?php echo "Imagen ".$blog->titulo?>">
    <?php endif;?>

    <label for="descripcion">Descripción Corta:</label>
    <textarea name="blog[descripcion]" id="descripcion" cols="30" rows="10"><?php echo s($blog->descripcion);?></textarea>

    <label for="descripcion2">Descripción Larga:</label>
    <textarea name="blog[descripcion2]" id="descripcion2" cols="30" rows="10"><?php echo s($blog->descripcion2);?></textarea>
</fieldset>