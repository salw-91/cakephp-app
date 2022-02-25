<?php 

use \Cake\ORM\Entity;
use Authentication\PasswordHasher\DefaultPasswordHasher;


class UsersTable extends Entity{

    protected $_accessible = [
        '*' => true,
        'id' => false,
        'slug' => false,
    ];

    // Code from bake.

    // Add this method
    protected function _setPassword(string $password) : ?string
    {
        if (strlen($password) > 0) {
            return (new DefaultPasswordHasher())->hash($password);
        }
    }

}