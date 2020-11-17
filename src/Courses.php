<?php 
namespace edmingle_php_sdk;
require('Edminglecurl.php');
class Courses 
{
    public function GetAllCourse($Institute_id)
    {
      $Allcourse = new Edminglecurl('/institute/'.$Institute_id.'/courses?get_tags=1','GET','0');
      return $Allcourse->Get_curl_no_auth();
    }

    public function CourseDetail($course_id)
    {
      $course_detail = new Edminglecurl('/organization/bundles/'.$course_id.'','GET','0');
      return $course_detail->Get_curl_no_auth();
    }

    public function CourseSchedule($course_id)
    {
      $course_schedule = new Edminglecurl('/public/bundle/'.$course_id.'/schedule','GET','0');
      return $course_schedule->Get_curl_no_auth();
    }

    public function CourseSchedule2($course_id,$oraganization_id){
      $course_schedule = new Edminglecurl('/bundles/'.$course_id.'/masterbatches?organization_id='.$oraganization_id,'GET','0');
      return $course_schedule->Get_curl_no_auth();
    }

    public function Masterbranch_schedule($masterbranch_id){  
      $Masterbranch_schedule = new Edminglecurl('/public/masterbatches/'.$masterbranch_id.'/classes','GET','0');
      return $Masterbranch_schedule->Get_curl_no_auth();
    }
    public function CourseFilter($Institute_id,$EncodedUrl){ 
      $Course_Filter = new Edminglecurl('/institute/'.$Institute_id.'/courses?get_tags=1&tag_categories_name_array='.$EncodedUrl,'GET','0');
      return $Course_Filter->Get_curl_no_auth();
    }
    public function GetBundleCurriculums($Institute_id){
      $Bundle_Curriculum = new Edminglecurl('/public/tutor/courses/all/'.$Institute_id,'GET','0');
      return $Bundle_Curriculum->Get_curl_no_auth();
    }
    public function CurriculumDetails($Institute_id,$Course_id){
      $Curriculum_details = new Edminglecurl('/public/tutor/class/curriculum/'.$Course_id.'?institution_bundle_id='.$Institute_id,'GET','0');
      return $Curriculum_details->Get_curl_no_auth();
    }

    

}
//$c = new Courses();
//print_r($c->GetAllCourse());
//print_r($c->CourseDetail(20));
//print_r($c->CourseSchedule(10));