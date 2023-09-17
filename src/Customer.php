<?php

namespace ProgrammerZamanNow\Belajar;

class Costumer
{
    public function __construct(private string $name){

    }

    public function sayHello(string $name = "Guest"): string 
    {
        return "Hello $name, My Name is $this->name";
    }
}