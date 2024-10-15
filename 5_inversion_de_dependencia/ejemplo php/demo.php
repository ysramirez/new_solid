<?php

$nombre = $request->getNombre();
$carta = new Carta($nombre);
$carta->set($nombre);

Test 

$nombre = $request->getNombre();
$carta = new Carta();
$respuestaOperacion = $carta->ejecutaOperacion($nombre);

