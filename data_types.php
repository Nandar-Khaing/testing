<?php
class  Student
{
  public $name;
  public $age;
  public $nrc = null;
  public function __construct($name, $age)
  {
    $this->name = $name;
    $this->age = $age;
  }
  public function message()
  {
    return "Student name is " . $this->name . " and age is " . $this->age . ".";
  }
}

$stu = new Student("Mya", 11);
echo $stu -> message();
echo "<br>";
$stu = new Student("Mg Mg", 5);
echo $stu-> message();
?>
<?php
$txt = "Hello This is String";
echo "<br>Length of text: " .strlen($txt). "<br>";
echo "Word Count of text: ". str_word_count($txt) ."<br>" ;
echo "Reverse String: " .strrev($txt). "<br>";
?>
<?php
define("GREETING", "Welcome<br>");
echo "constant value is " . GREETING;
?>
<?php
echo "Minimum value is " . (min(0, 150, 30, 20, -8, -200)) ."<br>"; 
echo "Miximum value is " . (max(0, 150, 30, 20, -8, -200))."<br>"; 
echo '<h3>Associative array</h3>';
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
asort($age);
foreach($age as $x => $x_value)
{
  echo "Key=> " . $x . ", Value=>" . $x_value;
  echo "<br>";
  }
  echo  "Array Count " . count($age) . "<br>";
?>
