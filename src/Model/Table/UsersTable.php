<?php 

use \Cake\ORM\Table;

class UsersTable extends Table{

    public function initialize(array $config): void
    {
        $this->aadBehavior('Timestamp');
    }

}