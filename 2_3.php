<?php
    // define a class
    class User {
        //properties
        public $name;
        // methods (functions)
        public function sayHello(){
            return $this->name .'Says Hello';
        }
    }

    // instantiate class
    $user1 = new User();

    echo $user1-> name;
    echo '<br />';
    echo $user1->sayHello();