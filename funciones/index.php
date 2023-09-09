<?php
    #funciones sin parametros
    function bannerBienvenida(){
        echo ("<h1>Bienvenidos</h1>");
        echo("A la pagina de APP Web <br>");
        echo ("Iisis.co<br>");
    }

    function bannerDespedida(){
        echo("Hasta la vista <br>");
        echo("Saludos de APP Web <br>");
        echo("Iisis.co<br>");
    }

    bannerBienvenida();
    echo("<br><br>");
    bannerDespedida();

    #Funciones con parametros
    $adios = "";
    function despedida($adios){
        echo $adios  . "mortal. <br>";
    }
    despedida("See you later: ");

    $a = "hola hola hola ";
    despedida($a);

    echo("+++++++++++++++++++++++++++++++++++++++ <br>");
    echo("+++++++++++++++++++++++++++++++++++++++ <br>");
    despedida("$a");

    $a = "  - UTT.";
    echo("<br>"."+++++++++++++++++++++++++++++++++++++++ <br>");
    echo("+++++++++++++++++++++++++++++++++++++++ <br>");
    despedida("<br> Mi nombre es: Adrian." . $a);
    

    echo("+++++++++++++++++++++++++++++++++++++++ <br> <br> <br> <br>");

    #Funciones con retorno
    function retorno($retornar){
        $retornar = $retornar .
                                "Tercer tipo de funcion. <br>" . 
                                "Y regresan un valor dado.";
    
    return $retornar;
    }    
    echo retorno("Tema: Funciones con retorno: " . "<br>");


    echo(" <br> <br> +++++++++++++++++++++++++++++++++++++++ <br> <br> <br> <br>");
    /*  De un valor dado de un producto, realizar una función
        que se llame descuentoProducto, realice el calculo de
        descuento de un 25%, Lo imprima en la página y que se
        imprima una cadena que diga: Gracias por su compra,
        su descuento fue de 20 pesos. 
        Costo total es: $100 - $25 = $75.00 */
/*
     #Funciones con retorno
     function descuentoProducto($descuento){
        $descuento = "Gracias por su compra, <br>
                    su descuento fue de " . $descuento = 100 * 0.25 . " pesos". 
                        " <br> Costo total es:  $100 - $25 = $75.00 ";
    return $descuento;
    }    
    echo descuentoProducto("");
echo("<br>");*/

    function descuentoProducto($precio){
        $Descuento = $precio * 0.25;
        $resultado ="Gracias por su compra, su descuento fue de: ". $Descuento. "<br>". "Costo total es: $ ". $precio . "-". $Descuento. "=". $precio*0.75. "<br>";
        return $resultado;
    }
    echo descuentoProducto(100);
?>