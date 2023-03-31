<?php

class Person
{
    public $name;
    private $age;
    protected $gender;
    public $isStudent;
    public $averageGrade;

    function __construct(string $name, int $age, string $gender) {

        $this->name = $name;

        $this->age = $age;

        $this->gender = $gender;

        echo "A new Person-object has been created.";

        echo "The property name of this object is: $name <br>";

    }

    public function setGender(char $gender) {
        $this->gender = $gender;
    }

    public function getGender() {
        return $this->gender;
    }

    public function setName(string $name) {
        $this->name = $name;
    }
    public function getName() {
        return $this->name;
    }
    public function setAge(int $age) {
        echo "<br> <br> Leeftijd van ".$this->getName()." is veranderd van ".$this->getAge()." naar ".$age;
        $this->age = $age;
    }
    public function getAge() {
        return $this->age;
    }
    public function setIsStudent(bool $value) {
        $this->isStudent = $value;
    }
    public function getIsStudent() {
        return $this->isStudent;
    }
    public function setAverageGrade(\double $grade) {
        $this->averageGrade = $grade;
    }
    public function getAverageGrade() {
        return $this->averageGrade;
    }
    public function getGegevens() {
        return "<br> De gegevens van ".$this->getName()." zijn:<br> Leeftijd: ".$this->getAge()." <br> Geslacht: ".$this->getGender();
    }
}