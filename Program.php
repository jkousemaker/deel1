<?php
include 'Person.php';

$umut = new Person("Umut", 18, "M");

$demirel = new Person("Demirel", 22, "M");

$justin = new Person("Justin", 20, "M");

$maaike = new Person("Maaike", 19, "V");

$james = new Person("James", 25, "M");

echo $justin->getGegevens();

$james->setAge(26);

echo "<br>setAge check:  ".$james->getAge();



