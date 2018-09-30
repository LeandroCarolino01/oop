<?php
    class User {
        public $name;
        public $age;

        public function __construct($name, $age){
            echo 'constructor ran...';
            $this->name = $name;
            $this->age = $age;
        }

        public function sayHello(){
            return $this->name . 'Says Hello';
        }
    }

    $user1 = new User('Brad', 30);

    echo $user1->name . ' is ' . $user1->age . ' years old';