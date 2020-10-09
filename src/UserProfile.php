<?php 
namespace demopackage;
require('Edminglecurl.php');
class UserProfile
{
    public function Usermeta()
    {
        $User = new Edminglecurl('/user/usermeta','GET','1');
        return json_decode($User->Get_curl_auth());
    }
}