<!DOCTYPE html>
<html>
<body>

<?php
$name = array("Roshni", "Subedi", "def");
sort($name);

$clength = count($name);
for($x = 0; $x < $clength; $x++) {
  echo $name[$x];
  echo "<br>";
}
?>
<?php
$name = array("Roshni", "Subedi", "def");
rsort($name);

$clength = count($name);
for($x = 0; $x < $clength; $x++) {
  echo $name[$x];
  echo "<br>";
}
?>
<?php
$age = array("Roshni"=>"35", "Subedi"=>"40", "def"=>"20");
asort($age);

foreach($age as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}
?>
<?php
$age = array("Roshni"=>"35", "Subedi"=>"40", "def"=>"20");
ksort($age);

foreach($age as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}
?>
<?php
$age = array("Roshni"=>"35", "Subedi"=>"40", "def"=>"20");
arsort($age);

foreach($age as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}
?>
<?php"Roshni"=>"35", "Subedi"=>"40", "def"=>"20");
krsort($age);

foreach($age as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}
?>
</body>
</html>