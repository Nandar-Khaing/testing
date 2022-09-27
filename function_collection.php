<h3>Static method</h3>
<?php
class greeting
{
  public static function welcome()
  {
    echo "Hello World!<br>";
  }
}

// Call static method
greeting::welcome();
function writeMsg()
{
  echo "Function without parameters called!";
}

writeMsg(); // call the function
?>
<h3>Function with one parameter</h3>
<?php
function familyName($fname)
{
  echo "$fname Refsnes.<br>";
}

familyName("Jani");
familyName("Hege");
familyName("Stale");
?>
<h3>Using default parameter</h3>
<?php 
function addNumbers(int $a, int $b=5)
{
  return $a + $b;
}
echo addNumbers(5);
?>