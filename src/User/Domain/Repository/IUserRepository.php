<?php


namespace Modules\User\Core\Domain\Repository;

use Project\User\Domain\User;

interface IUserRepository
{
    /**
     * @param string $email
     * @return User
     */
    public function findByEmail(string $email);
}
