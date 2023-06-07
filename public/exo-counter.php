<?php

use App\Counter;

require '../vendor/autoload.php';

$instance = new counter();
$instance1=new counter();


var_dump($instance);
echo '<br>';

$instance->increment();
var_dump($instance->count);
echo $instance->display();
echo '<br>';

$instance1->increment();
var_dump($instance->count);
echo $instance1->display();
echo '<br>';



$instance->decrement();
$instance->decrement();
$instance->decrement();
var_dump($instance->count);
echo $instance->display();
echo '<br>';

$instance1->decrement();
var_dump($instance->count);
echo $instance1->display();
echo '<br>';

?>