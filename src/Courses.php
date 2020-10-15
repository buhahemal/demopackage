<?php 
namespace demopackage;
require('Edminglecurl.php');
class Courses 
{
    public function GetAllCourse()
    {
      $Allcourse = new Edminglecurl('/institute/1/courses','GET','0');
      return json_decode($Allcourse->Get_curl_no_auth());
    }
}
$c = new Courses();
print_r($c->GetAllCourse());