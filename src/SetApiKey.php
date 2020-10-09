<?php 
namespace demopackage;
include('config_file.php');
class SetApiKey
{
    
    public function Setvariable($apikey)
    {
        $_SESSION['apikey'] = $apikey;
    }
}
