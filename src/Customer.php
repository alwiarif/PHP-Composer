<?php

namespace Aliyama\Belajar;

class Customer{

     public function __construct(private string $name)
     {

         
     }

     public function sayHello(string $name = "Test"):string {
         return "Hello $name, My name is $this->name";
     }

}