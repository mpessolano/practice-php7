<?php
require './../vendor/autoload.php';

class A {}

class B extends A {}

class C {}

function f(A $a) {
    println(get_class($a));
}

f(new A);
f(new B);
//f(new C); // Fatal error: Uncaught TypeError: Argument 1 passed to f() must be an instance of A, instance of C given
