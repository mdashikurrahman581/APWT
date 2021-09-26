<?php

class Student{

public $name;
public $id;
public $dob;
public $courses=[];

function showInfo(){

  echo"Name: $this->name";
   echo"Id: $this->id";
    echo"Dob: $this->dob";
}


function addCourse($courseName){

$this->courses[]=$courseName;

}


function showCourses(){
 echo"Name: $this->name <br>";
   echo"Id: $this->id <br>";
    echo"Dob: $this->dob <br><br><br><br>";
    echo"Courses: <br><br>";

    foreach($this->courses as $c){

     echo "$c <br>";


    }


}

 


}

$s1 = new Student();
$s1->name="ASHIK";
$s1->id="18-37852-2";
$s1->dob="18-05-1999";
$s1->addCourse("PL1");
$s1->addCourse("PL2");
$s1->addCourse("JAVA");
$s1->addCourse("C#");
$s1->addCourse("WT");
$s1->addCourse("AWT");
$s1->addCourse("SQT");
$s1->showCourses();






?>
