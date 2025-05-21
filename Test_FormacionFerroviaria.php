<?php

include 'Vagon.php';
include 'VagonPasajeros.php';
include 'VagonCarga.php';
include 'Locomotora.php';
include 'Formacion.php';

// Crear una locomotora
$locomotora = new Locomotora(15000, 80000); // peso: 15000kg, velocidad máxima: 80000kg de tracción

// Crear vagones
$vagon1 = new VagonPasajeros(2018, 10, 3, 10000, 100, 80); // 80 pasajeros, peso vacío: 10000kg
$vagon2 = new VagonPasajeros(2019, 12, 3, 11000, 120, 100);
$vagon3 = new VagonCarga(2017, 8, 2.5, 9000, 20000, 15000); // carga actual: 15000kg
$vagon4 = new VagonCarga(2020, 9, 2.8, 9500, 18000, 16000);

// Crear formación
$formacion = new Formacion($locomotora, [$vagon1, $vagon2, $vagon3, $vagon4]);

// Mostrar información
echo $formacion;