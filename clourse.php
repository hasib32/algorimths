<?php
/*
$name = function() {
   return 'hasan hasibul';
};
$name();*/

class HelloName
{
    const MY_NAME = 'Hasan Hasibul';

    public function testing()
    {
        return function() {
            $name = constant(__CLASS__ . "::MY_NAME");
            var_dump($name);
        };
    }
}

$object = new HelloName();
$method = $object->testing();
$method();