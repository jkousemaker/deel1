<?php

class Person
{
    public $name;
    private $age;
    protected $gender;
    public $isStudent;
    public $averageGrade;

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
    public function setAverageGrade(double $grade) {
        $this->averageGrade = $grade;
    }
    public function getAverageGrade() {
        return $this->averageGrade;
    }
    public function getGegevens() {
        return "De gegevens van ".$this->getName()." <br> Leeftijd: ".$this->getAge()." <br> Geslacht: ".$this->getGender();
    }
}