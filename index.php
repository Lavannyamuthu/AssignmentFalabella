<?php

use phpclass\AssignmentFalabella\src\Main;

require 'vendor/autoload.php';

$main = new Main();
echo "Printing Numbers between 0 to 100";
echo "<br/>";
echo "=======================";
echo "<br/>";
$numberPrint = $main->printNumberExecute();
