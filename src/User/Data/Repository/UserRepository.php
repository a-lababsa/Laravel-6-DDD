<?php


namespace Modules\User\Core\Data\Repository;


use Modules\User\Core\Domain\Repository\IUserRepository;
use Project\Core\Domain\Repository;
use Project\User\Data\User as Model;
use Project\User\Domain\User as Entity;

class UserRepository extends Repository implements IUserRepository
{
    /** @var string  */
    protected static $entityClass = Entity::class;

    /** @var Model  */
    protected $model = Model::class;

    /**
     * @param string $email
     * @return Entity
     */
    public function findByEmail(string $email)
    {
        return $this->createEntity($this->model::query()
            ->where('email', $email)
            ->first());
    }
}
