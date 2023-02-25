<?php

namespace Model;

class Propiedad extends ActiveRecord {
    protected static $tabla = 'propiedades';
    protected static $columnasDB = ['id','titulo','precio','imagen','descripcion','habitaciones','wc','estacionamiento','creado','vendedores_id'];

    public $id;
    public $titulo;
    public $precio;
    public $imagen;
    public $descripcion;
    public $habitaciones;
    public $wc;
    public $estacionamiento;
    public $creado;
    public $vendedores_id;

    public function __construct($args = []) {
        $this->id = $args['id'] ?? null;
        $this->titulo = $args['titulo'] ?? '';
        $this->precio = $args['precio'] ?? '';
        $this->imagen = $args['imagen'] ?? '';
        $this->descripcion = $args['descripcion'] ?? '';
        $this->habitaciones = $args['habitaciones'] ?? '';
        $this->wc = $args['wc'] ?? '';
        $this->estacionamiento = $args['estacionamiento'] ?? '';
        $this->creado = date('Y/m/d');
        $this->vendedores_id = $args['vendedores_id'] ?? '';
    }

    public function validar() {
        if (!$this->titulo) {
            self::$errores[] = "Debes añadir un titulo";
        }
        if (strlen($this->titulo) > 45) {
            self::$errores[] = "Tu titulo debe tener menos de 45 caracteres";
        }
        if (!$this->precio) {
            self::$errores[] = "Debes añadir un precio";
        }
        if (strlen($this->precio) > 8) {
            self::$errores[] = "Tu precio debe tener menos de 8 digitos";
        }
        if (!$this->imagen) {
            self::$errores[] = "Debes añadir una imagen";
        }
        if (strlen($this->descripcion) < 20) {
            self::$errores[] = "Debes añadir una descripcion con almenos 20 caracteres";
        }
        if (!$this->habitaciones) {
            self::$errores[] = "Debes añadir el número de habitaciones";
        }
        if (!$this->wc) {
            self::$errores[] = "Debes añadir el número de baños";
        }
        if (!$this->estacionamiento) {
            self::$errores[] = "Debes añadir el número de estacionamientos";
        }
        if (!$this->vendedores_id) {
            self::$errores[] = "Eligue un vendedor";
        }
        return self::$errores;
    }
}