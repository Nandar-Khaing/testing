<h3>Using if Statement</h3>
<?php
$t = date("H");

if ($t < "20")
{
  echo "Have a good day!<br>";
}
?>
<h3>Using switch</h3>
<?php
$favcolor = "red";

switch ($favcolor)
{
  case "red":
    echo "Your favorite color is red!<br>";
    break;
  case "blue":
    echo "Your favorite color is blue!<br>";
    break;
  case "green":
    echo "Your favorite color is green!<br>";
    break;
  default:
    echo "Your favorite color is neither red, blue, nor green!<br>";
}
?>
<h3>Using for loop</h3>
<?php
for ($x = 0; $x <= 10; $x++)
{
  echo "The number is: $x <br>";
}
?>
<h3>Using foreach loop</h3>
<?php
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach($age as $x => $val)
{
  echo "$x = $val<br>";
}
?>
<h3>Using do while loop</h3>
<?php
$x = 6;

do
{
  echo "The number is: $x <br>";
  $x++;
}
while ($x <= 5);
?>
<h3>Using break</h3>
<?php
for ($x = 0; $x < 10; $x++)
{
  if ($x == 4)
  {
    break;
  }
  echo "The number is: $x <br>";
}
?>
<h3>using continue</h3>
<?php
for ($x = 0; $x < 10; $x++)
{
  if ($x == 4)
  {
    continue;
  }
  echo "The number is: $x <br>";
}
?>
<h3>Using debug_backtrace()</h3>
<?php
function a($txt)
{
  b("Glenn");
}
function b($txt)
{
  c("Cleveland");
}
function c($txt)
{
  var_dump(debug_backtrace());
}
a("Peter");
?>