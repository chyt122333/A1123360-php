<?php
$uName = $_POST["uName"];
$uEmail = $_POST["uEmail"];
$gender = $_POST["gender"];
$other = $_POST["other"];

echo "Your name is " . $uName . "<br>";
echo "Your email is " . $uEmail . "<br>";
echo "Your gender is " . $gender . "<br>";
echo "Other information: " . $other;
?>