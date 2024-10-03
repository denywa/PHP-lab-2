<?php
class student{
    public $name;
    public $age;
    public $sex;
    public $gpa;
    public $isStudent;

    public function __construct($name, $birthDate, $sex, $gpa, $isStudent) {
        $this->name = $name;

        $birthDate = new DateTime($birthDate);
        $today = new DateTime('today');
        $diff = $birthDate->diff($today);
        $this->age = $diff->y.' years, '. $diff->m.' months, '. $diff->d.' days.';

        $this->gpa = $gpa;
        $this->sex = $sex;
        $this->isStudent = $isStudent;

    }
}

$student1 = new student('Deny', '2005-03-15', 'Male', 3.92, true);
echo 'Name: ' . $student1->name . '<br>';
echo 'Age: '. $student1->age . '<br>';
echo 'Sex: '. $student1->sex . '<br>';
echo 'GPA: '. $student1->gpa . '<br>';
echo 'Is Student: '. ($student1->isStudent ? 'true' : 'false') . '<br><br>';

$student2 = new student('Tomi', '2004-02-14', 'Male', 3.82, true);
echo 'Name: ' . $student2->name . '<br>';
echo 'Age: '. $student2->age . '<br>';
echo 'Sex: '. $student2->sex . '<br>';
echo 'GPA: '. $student2->gpa . '<br>';
echo 'Is Student: '. ($student2->isStudent ? 'true' : 'false') . '<br><br>';

$student3 = new student('Budi', '2003-01-13', 'Male', 3.72, true);
echo 'Name: ' . $student3->name . '<br>';
echo 'Age: '. $student3->age . '<br>';
echo 'Sex: '. $student3->sex . '<br>';
echo 'GPA: '. $student3->gpa . '<br>';
echo 'Is Student: '. ($student3->isStudent ? 'true' : 'false') . '<br><br>';

$student4 = new student('Anto', '2002-01-15', 'Male', 3.62, true);
echo 'Name: ' . $student4->name . '<br>';
echo 'Age: '. $student4->age . '<br>';
echo 'Sex: '. $student4->sex . '<br>';
echo 'GPA: '. $student4->gpa . '<br>';
echo 'Is Student: '. ($student4->isStudent ? 'true' : 'false') . '<br><br>';

$student5 = new student('Tono', '2001-03-15', 'Male', 3.52, true);
echo 'Name: ' . $student5->name . '<br>';
echo 'Age: '. $student5->age . '<br>';
echo 'Sex: '. $student5->sex . '<br>';
echo 'GPA: '. $student5->gpa . '<br>';
echo 'Is Student: '. ($student5->isStudent ? 'true' : 'false') . '<br><br>';


?>