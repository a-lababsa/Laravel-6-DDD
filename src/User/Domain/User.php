<?php


namespace Project\User\Domain;

use App\Http\Controllers\Auth\HandleModel;
use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Project\Core\Domain\EntityUuid;
use Project\User\Data\User as Model;

class User extends EntityUuid
{
    use HandleModel;

    /** @var string  */
    protected static $modelClass = self::class;

    /** @var Model */
    protected $model = Model::class;

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->model->email;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email): void
    {
        $this->model->email = $email;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->model->password;
    }

    /**
     * @param string $password
     */
    public function setPassword(string $password): void
    {
        $this->model->password = $password;
    }

    /**
     * @return int
     */
    public function getRole(): int
    {
        return $this->model->role;
    }

    /**
     * @param int $role
     */
    public function setRole(int $role): void
    {
        $this->model->role = $role;
    }

    /**
     * @return bool
     */
    public function isActive(): bool
    {
        return $this->model->active;
    }

    /**
     * @param bool $active
     */
    public function setActive(bool $active): void
    {
        $this->model->active = $active;
    }

    /**
     * @return string
     */
    public function getSessionId(): string
    {
        return $this->model->session_id;
    }

    /**
     * @param string $session_id
     */
    public function setSessionId(string $session_id): void
    {
        $this->model->session_id = $session_id;
    }
}
