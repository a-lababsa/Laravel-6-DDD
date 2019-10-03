<?php

namespace Project\Core\Domain;

use Illuminate\Database\Eloquent\Model;
use Webpatser\Uuid\Uuid;

class EntityUuid extends Entity
{
    /** @var Uuid */
    protected $uuid;

    /**
     * @param string|Model|Uuid $uuid
     */
    public function __construct($uuid = null)
    {
        parent::__construct($uuid);
        if ($this->exist()) {
            $this->uuid = Uuid::import($this->model->getAttributes()[$this->model->getKeyName()]);
            return;
        }
        if ($uuid && $uuid instanceof Uuid) {
            if ($entity = $this->model::query()->findOrNew($uuid)) {
                $this->model = $entity->exists() ? $entity : $this->model;
                $this->uuid = $uuid;
            }
        } else {
            if ($uuid) {
                $this->uuid = $uuid;
            } else {
                $this->uuid = Uuid::generate(4);
            }
        }

    }

    /**
     * @return Uuid
     */
    public function getUuid(): Uuid
    {
        return $this->uuid;
    }

    /**
     * @param Uuid $uuid
     */
    public function setUuid(Uuid $uuid): void
    {
        $this->uuid = $uuid;
    }
}
