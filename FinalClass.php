<?php

final class Home
{
    public function getHomeAddress()
    {
        return "My Home Address";
    }
}

//$home = new Home();
//var_dump($home->getHomeAddress());
/*
$day = 'monday';
$$day = 'First day of the week';
echo "$monday";*/

class A
{
    public $foo = 1;
}
$a = new A;
$b = $a; // $a and $b are copies of the same identifier
$b->foo = 2;
echo $a->foo . "\n";

$c = new A;
$d = &$c;

$d->foo = 2;

echo $c->foo . "\n";

$e = new A;

function foo($obj)
{
    $obj->foo = 2;
}

foo($e);
echo $e->foo ."\n";