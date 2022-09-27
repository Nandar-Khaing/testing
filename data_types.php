<?php
class  Student{
  public $name;
  public $age;
  public $nrc = null;
  public function __construct($name, $age) {
    $this->name = $name;
    $this->age = $age;
  }
  public function message() {
    return "Student name is " . $this->name . " and age is " . $this->age . ".";
  }
}

$stu = new Student("Mya", 11);
echo $stu -> message();
echo "<br>";
$stu = new Student("Mg Mg", 5);
echo $stu-> message();
?>