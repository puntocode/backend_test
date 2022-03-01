<?php

function token($array){
    $nombreSplit = str_split($array['nombre']);
    $apellidoSplit = str_split($array['apellido']);
    $telefonoSplit = str_split($array['telefono']);

    $last = $apellidoSplit[count($apellidoSplit)-1];

    $vocales = returnVocales($nombreSplit);
    $pares = returnPares($telefonoSplit);

    $token = strtoupper($vocales.$apellidoSplit[0].$last.$pares);
    return $token;
}


function returnVocales($text){
    $vocales = '';

    for ($i = 0; $i < count($text); $i++) {
		if (in_array($text[$i], ["a", "e", "i", "o", "u"])) {
			$vocales = $vocales.$text[$i];
		}
	}

    return $vocales;
}


function returnPares($number){
    $pares = '';

    for ($i = 0; $i < count($number); $i++) {
		if (in_array($number[$i], ["0", "2", "4", "6", "8"])) {
			$pares = $pares.$number[$i];
		}
	}

    return $pares;
}


