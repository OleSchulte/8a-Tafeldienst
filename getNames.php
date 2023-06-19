<?php
$names = array("Ole", "Tom", "Aurelio", "Jonatan", "Leandro", "Lasse", "Max", "Samuel", "Emilian", "Meiko", "Engin", "Tarik", "Liam", "Lars", "Marlon", "Frieda", "Frida", "Martha", "Charlotte", "Ella", "Janne", "Carlotta", "Ana-Marija", "Oranan", "Ece", "Greta", "Paula");
shuffle($names);
$selectedNames = array_slice($names, 0, 2);

header('Content-Type: application/json');
echo json_encode($selectedNames);
?>
