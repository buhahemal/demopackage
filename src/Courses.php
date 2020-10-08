<?php 

namespace demopackage;
include('config_file.php');
class Courses
{
    public function GetAllCourse()
    {
        $curl = curl_init(); 
    
        curl_setopt_array($curl, array(
        CURLOPT_URL => constant("API_URL") . '/institute/1/courses',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET"
    ));
    
    $response = curl_exec($curl);
    if(curl_errno($curl)){
      echo '["code":3002,"message":'.curl_error($curl).']';
    }
    curl_close($curl);
    echo $response;
    }
}

