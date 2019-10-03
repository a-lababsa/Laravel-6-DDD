<?php

namespace Project\User\Data;

use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Webpatser\Uuid\Uuid;

/**
 * @property string email
 * @property string password
 * @property integer role
 * @property boolean active
 * @property string session_id
 */
class User extends Model implements AuthenticatableContract, AuthorizableContract
{
    use Authenticatable, Authorizable;

    protected $primaryKey = 'uuid';
    protected $keyType = 'string';
    public $incrementing = false;
    protected $table = 'users';

    public function getAuthIdentifier()
    {
        return $this->getAttributeValue($this->getKeyName());
    }
}
