<?php

class Student {
    public $firstname;
    public $surname;
    public $middlename;
    public $age;
    public $gender;

    function __construct($firstname) {
        $this->firstname = $firstname;
    }

    function set_details($surname, $middlename, $age, $gender) {
        $this->surname = $surname;
        $this->middlename = $middlename;
        $this->age = $age;
        $this->gender = $gender;
    }

    function get_details() {
        return $this->firstname . " " . $this->surname . " " . $this->middlename . " " . $this->age . " " . $this->gender;
    }
}

$s1 = new Student("yna");
$s1->set_details("ropero", "concepcion", 20, "gurl");

$s2 = new Student("maykel");
$s2->set_details("lozada", "silvestre", 22, "male");

echo "Student 1: " . $s1->get_details();
echo "<br>";
echo "Student 2: " . $s2->get_details();

?>