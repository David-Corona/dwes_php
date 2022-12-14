<?php
namespace cursophp7dc\app\entity;

use cursophp7dc\core\database\IEntity;

class Producto implements IEntity
{
    const RUTA_IMAGENES_SHOP = 'images/shop/';
    const RUTA_IMAGENES_PRODUCTO = 'images/producto/';

    /**
     * @var int
     */
    private $id;
    /**
     * @var string
     */
    private $titulo;
    /**
     * @var string
     */
    private $subtitulo;
    /**
     * @var string
     */
    private $descripcion;
    /**
     * @var float
     */
    private $precio;
    /**
     * @var string
     */
    private $nombreImagen;
    /**
     * @var int
     */
    private $categoria;
    /**
     * @var int
     */
    private $usuario;

    /**
     * @param string $titulo
     * @param string $subtitulo
     * @param string $descripcion
     * @param int $categoria
     * @param float|int $precio
     * @param string $nombreImagen
     */
    public function __construct(string $titulo='', string $subtitulo='', string $descripcion='',
                                int $categoria=0, float $precio=0, string $nombreImagen='default.png', int $usuario=0)
    {
        $this->id = null;
        $this->titulo = $titulo;
        $this->subtitulo = $subtitulo;
        $this->descripcion = $descripcion;
        $this->precio = $precio;
        $this->nombreImagen = $nombreImagen;
        $this->categoria = $categoria;
        $this->usuario = $usuario;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->getTitulo();
    }


    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getTitulo(): string
    {
        return $this->titulo;
    }

    /**
     * @param string $titulo
     * @return Producto
     */
    public function setTitulo(string $titulo): Producto
    {
        $this->titulo = $titulo;
        return $this;
    }

    /**
     * @return string
     */
    public function getSubtitulo(): string
    {
        return $this->subtitulo;
    }

    /**
     * @param string $subtitulo
     * @return Producto
     */
    public function setSubtitulo(string $subtitulo): Producto
    {
        $this->subtitulo = $subtitulo;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescripcion(): string
    {
        return $this->descripcion;
    }

    /**
     * @param string $descripcion
     * @return Producto
     */
    public function setDescripcion(string $descripcion): Producto
    {
        $this->descripcion = $descripcion;
        return $this;
    }

    /**
     * @return float
     */
    public function getPrecio(): float
    {
        return $this->precio;
    }

    /**
     * @param float $precio
     * @return Producto
     */
    public function setPrecio(float $precio): Producto
    {
        $this->precio = $precio;
        return $this;
    }

    /**
     * @return string
     */
    public function getNombreImagen(): string
    {
        return $this->nombreImagen;
    }

    /**
     * @param string $nombreImagen
     * @return Producto
     */
    public function setNombreImagen(string $nombreImagen): Producto
    {
        $this->nombreImagen = $nombreImagen;
        return $this;
    }

    /**
     * @return int
     */
    public function getCategoria(): int
    {
        return $this->categoria;
    }

    /**
     * @param int $categoria
     * @return Producto
     */
    public function setCategoria(int $categoria): Producto
    {
        $this->categoria = $categoria;
        return $this;
    }

    /**
     * @return int
     */
    public function getUsuario(): int
    {
        return $this->usuario;
    }

    /**
     * @param int $usuario
     * @return Producto
     */
    public function setUsuario(int $usuario): Producto
    {
        $this->usuario = $usuario;
        return $this;
    }

    /**
     * @return string
     */
    public function getUrlImagen() : string
    {
        return self::RUTA_IMAGENES_PRODUCTO . $this->getNombreImagen();
    }

    /**
     * @return string
     */
    public function getUrlImagenMini() : string
    {
        return self::RUTA_IMAGENES_SHOP . $this->getNombreImagen();
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        return [
            'id' => $this->getId(),
            'titulo' => $this->getTitulo(),
            'subtitulo' => $this->getSubtitulo(),
            'descripcion' => $this->getDescripcion(),
            'categoria' => $this->getCategoria(),
            'precio' => $this->getPrecio(),
            'nombreImagen' => $this->getNombreImagen(),
            'usuario' => $this->getUsuario()
        ];
    }
}