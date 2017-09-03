<?php

/**
 * Created by PhpStorm.
 * User: artmas
 * Date: 02.09.2017
 * Time: 19:24
 */
class testClass
{
    const TY = 1;
    const wrong = 0;

    public function superMethod ($a=1,$b=2) {
        if (1==1){

        }

        if ( 1 == 1 )
        {

        }
    }

    private $one = 1;
    private $HELLOworld = 2;

}

$a = new testClass();
$a->superMethod(3,4);