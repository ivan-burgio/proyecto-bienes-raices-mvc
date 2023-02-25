<?php

namespace Model;

class Blog extends ActiveRecord {
    protected static $tabla = 'blogs';
    protected static $columnasDB = ['id','titulo','imagen','descripcion','creado','descripcion2'];

    public $id;
    public $titulo;
    public $imagen;
    public $descripcion;
    public $creado;
    public $descripcion2;

    public function __construct($args = []) {
        $this->id = $args['id'] ?? null;
        $this->titulo = $args['titulo'] ?? '';
        $this->imagen = $args['imagen'] ?? '';
        $this->descripcion = $args['descripcion'] ?? '';
        $this->creado = date('Y/m/d');
        $this->descripcion2 = $args['descripcion2'] ?? '';
    }

    public function validar() {
        if (!$this->titulo) {
            self::$errores[] = "Debes añadir un titulo";
        }
        if (strlen($this->titulo) > 45) {
            self::$errores[] = "Tu titulo debe tener menos de 45 caracteres";
        }
        if (!$this->imagen) {
            self::$errores[] = "Debes añadir una imagen";
        }
        if (!$this->descripcion) {
            self::$errores[] = "Debes añadir una descripcion corta";
        }
        if (!$this->descripcion2) {
            self::$errores[] = "Debes añadir una descripcion larga";
        }
        return self::$errores;
    }
}