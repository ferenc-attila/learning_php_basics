<?php

#Érték szerinti átadás:
$name = "Attila";
$anotherName = $name;

$name = "Béla";

echo "<div>", $anotherName, "'s Invoice", "</div>";

#Paraméter szerinti átadás:
$animal = "Dog";
$anotherAnimal = &$animal;

$animal = "Cat";

echo "<div>", "The ", $anotherAnimal, " says 'MIAU'", "</div>";

echo 'Hello $name<br>';
echo "Hello {$name}<br>";
echo 'Hello ' . $name;