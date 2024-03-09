<?php 

namespace Belajar\Com;

class Customer
{
     function __construct(public string $name) {

    }

    function sayHello(string $name) : string
    {
        return "Hello $this->name, My name is $name";
    }
}
