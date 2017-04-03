<?php

class A
{
    public static function who()
    {
        echo __CLASS__ . "\n";
    }

    public static function test()
    {
        self::who();
    }
}

class B extends A
{
    public static function who()
    {
        echo __CLASS__ ."\n";
    }
}
B::test(); // this will print A

// to solve the problem we have to use static keyword

//public static function test()
//{
//    static::who();
//}