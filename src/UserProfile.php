<?php 
namespace demopackage;
require('Edminglecurl.php');
require('auth.php');
class UserProfile extends auth
{
    function __construct($apikey) {
        $this->set_apikey($apikey);
    }
    public function Usermeta()
    {
        $User = new Edminglecurl('/user/usermeta','GET','1',$this->get_apikey());
        return json_decode($User->Get_curl_auth());
    }
}
$u = new UserProfile('f33e18e167552b7f96b9c148a734d88e');
print_r($u->Usermeta());