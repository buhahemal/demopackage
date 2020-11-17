<?php 
namespace edmingle_php_sdk;
require('Edminglecurl.php');
class Login
{
    public function Login($JsonString)
    {
      $Login_Attempt = new Edminglecurl('/tutor/login','GET','0');
      return $Login_Attempt->Get_curl_no_auth();
    }
}
//$s = new Login();
//print_r($s->Login(1));