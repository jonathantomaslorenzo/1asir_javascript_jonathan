<?php

/*Dado dos numeros en un formulario, y dos boton de radio, que diga sumar o restar, si el usuario pulsa en sumar, al pulsar en el boton de calcular. Y si elige la opcion de resta y le da a calcular se visualiza la resta.
*/


  if ($_POST['radio1'] == "Sumar") {
    $suma = $_POST['numero1'] + $_POST['numero2'];
    echo "La suma es: " . $suma;
  } else {

    if ($_POST['radio1'] == "Restar") {
      $resta = $_POST['numero1'] - $_POST['numero2'];
      echo "La resta es: " . $resta;
    }
  }

?>