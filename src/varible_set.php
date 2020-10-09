<?php 
namespace demopackage;
include('config_file.php');
class SetApiKey
{
    
    public function SetApiKey($apikey)
    {
        $_SESSION['apikey'] = $apikey;
    }
}/* 
$api = new SetApiKey();
$api->SetApiKey('f33e18e167552b7f96b9c148a734d88e'); */
