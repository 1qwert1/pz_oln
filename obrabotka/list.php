<?php


session_start();

echo "<pre>";
print_r($_POST);
echo "</pre>";


echo $_SESSION['$val'];

echo "<pre>";
var_dump($_SESSION);
echo "</pre>";

include '../for_form/header.php';



echo '<button onclick=print() class="butt">До друку</button>';


include '../for_form/footer.php';