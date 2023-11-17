<?php

class Person {
    protected $name;
    protected $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function getInfo() {
        return "Ad: {$this->name}, Yaş: {$this->age}";
    }
}

class Student extends Person {
    private $studentId;

    public function __construct($name, $age, $studentId) {
        parent::__construct($name, $age);
        $this->studentId = $studentId;
    }

    public function getStudentInfo() {
        return $this->getInfo() . ", Öğrenci ID: {$this->studentId}";
    }
}

$person = new Person("Batuhan Çakar", 21);
echo $person->getInfo() . "\n";

$student = new Student("Mustafa Çiçek", 20, "12345");
echo $student->getStudentInfo() . "\n";

?>
