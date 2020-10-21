<?php 
namespace edmingle_php_sdk;
require('Edminglecurl.php');
class Courses 
{
    public function GetAllCourse()
    {
      $Allcourse = new Edminglecurl('/institute/1/courses','GET','0');
      return $Allcourse->Get_curl_no_auth();
    }

    public function CourseDetail($course_id)
    {
      $course_detail = new Edminglecurl('/bundles/'.$course_id.'','GET','0');
      return $course_detail->Get_curl_no_auth();
    }

    public function CourseSchedule($course_id)
    {
      $course_schedule = new Edminglecurl('/public/bundle/'.$course_id.'/schedule','GET','0');
      return $course_schedule->Get_curl_no_auth();
    }


}
$c = new Courses();
//print_r($c->GetAllCourse());
//print_r($c->CourseDetail(20));
//print_r($c->CourseSchedule(10));