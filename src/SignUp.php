<?php 
namespace edmingle_php_sdk;
require('Edminglecurl.php');
class SignUp
{
    public function SignUp($JsonString)
    {
      $SignUp = new Edminglecurl('user/signup','GET','0');
      return $SignUp->Get_curl_no_auth();
    }
}
//$s = new SignUp();
//print_r($s->SignUp(1));