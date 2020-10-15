<?php
namespace demopackage;
require('config_file.php');
class Edminglecurl
{
    private $url;
    private $type;
    private $isauth;
    private $apikey;
    public $response;
    function __construct($url, $type, $isauth, $apikey= '')
    {
        $this->url = $url;
        $this->type = $type;
        $this->isauth = $isauth;
        $this->apikey = $apikey;
    }

    function Get_curl_auth()
    {

      if ($this->isauth)
      {
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => constant("API_URL") . $this->url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => $this->type,
            CURLOPT_HTTPHEADER => array(
                'APIKEY:' . $this->apikey
            )
        ));

        $this->response = curl_exec($curl);
        if (curl_errno($curl))
        {
            echo '["code":3002,"message":' . curl_error($curl) . ']';
        }
        curl_close($curl);
        return $this->response;
          
      }
      else
      {
          echo "Apikey Not Found";
      }
        
    }
    public function Get_curl_no_auth()
    {
        
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => constant("API_URL") . $this->url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => $this->type
        ));

        $this->response = curl_exec($curl);
        if (curl_errno($curl))
        {
            echo '["code":3002,"message":' . curl_error($curl) . ']';
        }
        curl_close($curl);
        return $this->response;
    }
}

