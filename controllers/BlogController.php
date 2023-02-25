<?php

namespace Controllers;
use MVC\Router;
use Model\Blog;
use Intervention\Image\ImageManagerStatic as Image;

class BlogController {
    public static function crear(Router $router) {

        $blog = new Blog();
        $errores = Blog::getErrores();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            // Crea una nueva instancia
            $blog = new Blog($_POST['blog']);
    
            // ---------- SUBIDA DE ARCHIVOS ----------
    
            // Generar un nombre único
            $nombreImagen = md5( uniqid( rand(), true) ) . ".jpg";
    
            // Setear la imagen
            // Realiza un resize a la imagen con intervetion
            if ($_FILES['blog']['tmp_name']['imagen']) {
                $image = Image::make($_FILES['blog']['tmp_name']['imagen'])->fit(800,600);
                $blog->setImagen($nombreImagen);
            }

            // Validación
            $errores = $blog->validar();
    
            // Revisar que el arreglo de errores este vacio
            if (empty($errores)) {
    
                // Crear Carpeta
                if (!is_dir(CARPETA_IMAGENES)) {
                    mkdir(CARPETA_IMAGENES);
                }
    
                // Guarda la imagen en el servidor
                $image->save(CARPETA_IMAGENES . $nombreImagen);
    
                // Guardar en la DB
                $blog->guardar();
            }
        }

        $router->render('/blogs/crear', [
            'blog' => $blog,
            'errores' => $errores
        ]);
    }

    public static function actualizar(Router $router) {
        $id = validarORedireccionar('/admin');
        $blog = Blog::find($id);
        $errores = Blog::getErrores();

        // Ejecutar el código despues de que el usuario envie el formulario
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            // Asignar los atributos
            $args = $_POST['blog'];

            $blog->sincronizar($args);

            // Validación
            $errores = $blog->validar();

            // ---------- SUBIDA DE ARCHIVOS ----------
            
            // Generar un nombre único
            $nombreImagen = md5(uniqid(rand(),true)) . ".jpg";

            if ($_FILES['blog']['tmp_name']['imagen']) {
                $image = Image::make($_FILES['blog']['tmp_name']['imagen'])->fit(800,600);
                $blog->setImagen($nombreImagen);
            }

            // Revisar que el arreglo de errores este vacio
            if (empty($errores)) {
                if ($_FILES['blog']['tmp_name']['imagen']) {
                    // Almacenar la imagen
                    $image->save(CARPETA_IMAGENES . $nombreImagen);
                }
                $blog->guardar();
            }
        }

        $router->render('/blogs/actualizar', [
            'blog' => $blog,
            'errores' => $errores,
        ]);
    }

    public static function eliminar() {
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Validar ID
            $id = $_POST['id'];
            $id = filter_var($id, FILTER_VALIDATE_INT);
    
            if ($id) {
                $tipo = $_POST['tipo'];
                if (validarTipoContenido($tipo)) {
                    $blog = Blog::find($id);
                    $blog->eliminar();
                }
            }
        }
    }
}