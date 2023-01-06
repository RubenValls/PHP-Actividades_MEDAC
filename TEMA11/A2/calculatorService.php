<?php 
    $uri="http://localhost/test/SOAP";
    $server = new SoapServer(null,array('uri'=>$uri));
    $server->addFunction("plus");
    $server->addFunction("subs");
    $server->addFunction("divide");
    $server->addFunction("root");
    $server->addFunction("power");
    $server->handle();

    function plus($num1, $num2){
        $result = $num1 + $num2;
        return $result;
    }

    function subs($num1, $num2){
        $result = $num1 - $num2;
        return $result;
    }

    function divide($num1, $num2){
        $result = $num1 / $num2;
        return $result;
    }

    function root($num1){
        $result = sqrt($num1);
        return $result;
    }

    function power($num1, $num2){
        $result = pow($num1,$num2);
        return $result;
    }


?>