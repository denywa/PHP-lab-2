<?php
ob_start(); 
include 'variables.php';
ob_end_clean(); //untuk kasi hilang output dari file yang di include
function greet($student){
    $msg = 'Hello '. $student.'!';
    return $msg;
}

$students = array($student1->name, $student2->name, $student3->name, $student4->name, $student5->name);

// Looping array menggunakan foreach
foreach ($students as $student){
    echo greet($student).'<br>';
}

// Looping array menggunakan normal for
for ($i = 0; $i < count($students); $i++){
    echo greet($students[$i]).'<br>';
}

?>
