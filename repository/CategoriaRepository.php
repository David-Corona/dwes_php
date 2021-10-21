<?php
require_once __DIR__ . '/../database/QueryBuilder.php';

class CategoriaRepository extends QueryBuilder
{

    public function __construct(string $table='categorias', string $classEntity='Categoria')
    {
        parent::__construct($table, $classEntity);
    }
}