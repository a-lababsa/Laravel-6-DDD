<?php


namespace App\Http\Controllers\Auth;



use Project\User\Data\User;

/**
 * @property User model
 */
trait HandleModel
{
    /**
     * @return Model
     */
    public function getModel(): User
    {
        return $this->model;
    }
}
