<main class="contenedor seccion contenido-centrado">
    <h1>Iniciar Sesión</h1>

    <?php foreach($errores as $error): ?>
        <div class="alerta error">
            <?php echo $error; ?>
        </div>
    <?php endforeach; ?>

    <form method="POST" class="formulario" action="/login">
        <fieldset>
            <legend>Datos</legend>

            <label for="email">E-mail</label>
            <input type="email" name="email" placeholder="Tu e-mail" id="email">

            <label for="password">Contraseña</label>
            <input type="password" name="password" placeholder="Tu contraseña" id="password">

        </fieldset>

        <input type="submit" value="Iniciar Sesión" class="boton boton-verde">

    </form>
</main>