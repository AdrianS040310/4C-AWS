<?php
    #funciones sin parametros
    function saludo(){
        echo ("<h1>Hola</h1>");
        echo ("<br> <br> Funciones sin parametros <br> <br> ");
    }
    
    saludo();

    #Funciones con parametros
    function despedida($recibirParametro){
        echo $recibirParametro;
        echo ("<br> <br> Funciones sin parametros <br> <br> ");
    }

    despedida("Hasta pronto ...");
?>