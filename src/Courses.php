<?php 
namespace demopackage;
require('Edminglecurl.php');
class Courses
{
    public function GetAllCourse()
    {
      $Courses = new Edminglecurl('/institute/1/courses','GET','0');
    }
}
$c = new Courses();
$c->GetAllCourse();
