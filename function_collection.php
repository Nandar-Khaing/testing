<?php declare(strict_types=1); 
echo "Today is " . date("Y/m/d") . "<br>";
echo "The time is " . date("h:i:sa") . "<br>";
class greeting
{
  public static function welcome()
  {
    echo "This is Static function<br>";
  }
}

// Call static method
greeting::welcome();
function writeMsg()
{
  echo "Function without parameters called!<br>";
}

writeMsg(); // call the function
function familyName($fname)
{
  echo "Function with one parameter. Param Name-> $fname <br>";
}

familyName("Jani");
familyName("Hege");
familyName("Stale");

function addNumbers(int $a, int $b=5)
{
  return "Using default parameter" . $a + $b ."<br>";
}
echo addNumbers(5);
echo addNumbers(5,2);
function subtractNumbers(float $a, float $b): float
{
  return $a - $b;
}
echo "Subtraction return value=>" . subtractNumbers(3.5,1.4) . "<br>";
//pass by reference
function add_five(&$value)
{
  $value += 5;
}
$num = 2;
add_five($num);
echo $num;
?>
<?php
$x = 75;
$y = 25;
function addition()
{
  $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}
 
addition();
echo $z;
?>
<?php
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
echo "<br>";
?>
<?php
function exclaim($str) {
  return $str . "! ";
}

function ask($str) {
  return $str . "? ";
}

function printFormatted($str, $format) {
  // Calling the $format callback function
  echo $format($str);
}

// Pass "exclaim" and "ask" as callback functions to printFormatted()
printFormatted("Hello world", "exclaim");
echo "<br>";
printFormatted("Hello world", "ask");
echo "<br>";
function factorial($n)    
{    
if ($n < 0)    
return -1;  
if ($n == 0)    
return 1;
return ($n * factorial ($n -1));    
}    
echo "Factorial"  . factorial(10);    

?>


