<?php
include '../Person.php';

$james = new Person("James", 25, "M");

echo $james->getGegevens();

$james->setAge(26);

echo "<br>setAge check:  ".$james->getAge();



