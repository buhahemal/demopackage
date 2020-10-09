<?php 
namespace demopackage;
require('Edminglecurl.php');
class UserProfile
{
    public function Usermeta()
    {
        $p = new Edminglecurl('/user/usermeta','GET','1');
        return json_decode($p->Get_curl_auth());
    }
}


