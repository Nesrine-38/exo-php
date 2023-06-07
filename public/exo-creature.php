<?php

use App\battle\creature;

require '../vendor/autoload.php';

$instance= new creature("nesrine", 100);
$instance1= new creature("CHRISTOPHE", 10);
$instance2= new creature("maher", 10);



$instance->attack($instance1);
echo '<br>';
$instance1->attack($instance);
echo '<br>';
$instance2->attack($instance1);
echo '<br>';



?>