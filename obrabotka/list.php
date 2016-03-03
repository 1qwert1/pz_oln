<?php


session_start();

echo "<pre>";
print_r($_POST);
echo "</pre>";

include '../for_form/header.php';

//echo $_SESSION['$val'];

//echo "<pre>";
//var_dump($_SESSION);
//echo "</pre>";

echo '<button onclick=print() class="butt">До друку</button>';


include '../for_form/footer.php';