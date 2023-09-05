<?php
    #var_dump(). El tipo de valor
    #variable numerica
    $numero = 5;
    echo "Esta es la variable numero: " . $numero;
    echo "<br><br>";
    echo "Esta es la variable numero: $numero";
    echo "<br>";
    var_dump($numero);
    echo "<br><br>";

    #variable texto
    $texto = "Variable texto";
    echo "Esta es la variable texto: " . $texto;
    echo "<br>";
    var_dump($texto);
    echo "<br><br>";

    #variable booleana
    $booleana = true;
    echo "Esta es la variable booleana: " . $booleana;
    echo "<br>";
    var_dump($booleana);
    echo "<br><br>";

    #variable arreglo
    $colores= array("rojo", "amarillo", "verde", "azul", "morados");
    echo "Esta es la variable numero: " . $colores[3];
    echo "<br>";
    var_dump($colores);
    echo "<br><br>";

    #variable arreglo CON PROPIEDADES
    $verduras= array("verdura1" => "lechuga", "verdura2" => "cebolla");
    echo "Esta es la variable array con propiedades:  $verduras[verdura2]";
    echo "<br>";
    var_dump($verduras);
    echo "<br><br>";

    #variable objeto
    $frutas= (object) ["fruta1" => "pera", "fruta2" => "manzana"];
    echo "Esta es la variable array con propiedades:  $frutas->fruta1";
    echo "<br>";
    var_dump($frutas);
    echo "<br><br>";
?>