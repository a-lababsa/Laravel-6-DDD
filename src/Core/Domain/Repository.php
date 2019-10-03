<?php

namespace Project\Core\Domain;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

abstract class Repository
{
    /** @var string */
    protected static $entityClass;

    /** @var Model */
    protected $model;

    public function __construct()
    {
        $this->model = new $this->model();
    }

    /**
     * @param Collection $models
     * @return array|null
     */
    public function createEntities(Collection $models)
    {
        $entities = [];
        foreach ($models as $model) {
            $entities[] = $this->createEntity($model);
        }
        return $entities;
    }

    /**
     * @param Model $model
     * @return mixed
     */
    public function createEntity($model)
    {
        return new static::$entityClass($model);
    }
}
