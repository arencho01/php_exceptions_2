<?php

//assert(true);
//assert(false);

//Написать код, который перехватывает все исключения брошенные функцией mythrow и вывод
//при спойманном исключении текст 'exception', иначе выводит 'passed'

class MyException extends Exception
{
    function __construct()
    {
        $this->message = "Сработало исключение 'MyException'!";
        parent::__construct();
    }
}

function myThrow()
{
    throw new Exception();
}

try {
    myThrow();
    echo 'passed';
}
catch (MyException $e)
{
    echo 'exception';
}
catch (Exception $e)
{
    echo 'exception';
}

