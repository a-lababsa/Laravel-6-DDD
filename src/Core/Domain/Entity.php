<?php

namespace Project\Core\Domain;

use Illuminate\Database\Eloquent\Model;

class Entity
{
    /** @var string */
    protected static $modelClass;

    /** @var Model */
    protected $model;

    public function __construct($model = null)
    {
        if ($model && $model instanceof Model) {
            $this->model = $model;
        } else {
            $this->model = new $this->model();
        }
    }

    public function exist(): bool
    {
        return $this->model->exists;
    }

    public function save(): void
    {
        $this->model->save();
    }
}
