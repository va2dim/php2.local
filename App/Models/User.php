<?php

namespace App\Models;

use App\Model;
use App\TCollection;

/**
 * Class User
 * @package App\Models
 * @property int age;
 */
class User
    extends Model
    implements HasEmail, \ArrayAccess, \Iterator
{

    use TCollection;

    const TABLE = 'users';
    public $name;
    public $email;
    public $login;
    public $password;

    /**
     * Метод, возвращающий адрес e-mail
     * @deprecated
     * @return string Адрес электронной почты
     */
    public function getEmail() {
        return $this->email;
    }
}