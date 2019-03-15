<?php

spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});	


        
//STUDENTS
echo '<h2>Students</h2>';
$Students = new Students();
$Students->setfirstName('Hong Phat');
$Students->setlastName('Phan');
$Students->setyearOfBirth('1991');
$Students->setselectedCourses('PHP and Database');
//$Students->setselectedCourses('Database and Javascript');
$Students->setgreditPoint('3');

echo 'The Student Name is '.$Students->getlastName().' '.$Students->getfirstName().'<br>';
echo 'Year of Birth : '.$Students->getyearOfBirth();
echo '<br>The Course which is selected :  ';
//$course=$Students->getselectedCourses();
//print_r($course[2]);
echo $Students->getselectedCourses()[1];
echo '<br>The grade he got is: '.$Students->getgreditPoint();

//TEACHER
	echo '<h2>Teacher</h2>';
$Teacher = new Teacher();
$Teacher->setfirstName('Pekka');
$Teacher->setlastName('Alaluukas');
$Teacher->setyearOfBirth('1965.');
$Teacher->setteachingSubjects('PHP and Database');
$Teacher->setdepartment('OULU, FINLAND.');

echo 'The teacher Name is '.$Teacher->getlastName().' '.$Teacher->getfirstName().'<br>';
echo 'Year of Birth : '.$Teacher->getyearOfBirth();
echo '<br>The Course which is taught :  ';
$courses=$Teacher->getteachingSubjects();
echo $courses[0];
echo '<br>His Address : '.$Teacher->getdepartment();

//Staff 1
	echo '<h2>Staff 1</h2>';
$Staff = new Staff();
$Staff->setfirstName('Dinh Tai');
$Staff->setlastName('Nguyen');
$Staff->setyearOfBirth('1997.');
$Staff->setvacancy('Cleaner');

echo 'The staff name is '.$Staff->getlastName().' '.$Staff->getfirstName().'<br>';
echo 'Year of Birth : '.$Staff->getyearOfBirth();
echo '<br>His position : '.$Staff->getvacancy();
//Staff 2
echo '<h2>Staff 2</h2>';
$Staff = new Staff();
$Staff->setfirstName('Thanh Dat.');
$Staff->setlastName('Phan');
$Staff->setyearOfBirth('1996.');
$Staff->setvacancy('Caretaker.');
echo 'The staff name is '.$Staff->getlastName().' '.$Staff->getfirstName().'<br>';
echo 'Year of Birth : '.$Staff->getyearOfBirth();
echo '<br>His position : '.$Staff->getvacancy();
?>
