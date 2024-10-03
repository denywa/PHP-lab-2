<?php
ob_start();
include 'variables.php'; 
ob_end_clean();//untuk kasi hilang output dari file yang di include

echo 'Name: ' . $student1->name . '<br>';
echo 'Age: '. $student1->age . '<br>';

if ($student1->age >= 18) {
    echo 'You are an adult ';
} else {
    echo 'You are a minor';
}

?>  