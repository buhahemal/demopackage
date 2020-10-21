<?php 
namespace edmingle_php_sdk;
require('Edminglecurl.php');
class Tutor 
{
    public function Tutor_info($id)
    {
      $Tutor_info = new Edminglecurl('/tutor/'.$id.'/profile/public','GET','0');
      return $Tutor_info->Get_curl_no_auth();
    }
}
//$t = new Tutor();
//print_r($t->Tutor_info(1));