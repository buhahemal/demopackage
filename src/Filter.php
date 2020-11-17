<?php 
namespace edmingle_php_sdk;
require('Edminglecurl.php');
class Filter 
{
    public function FilterGetFilter($Institute_Id)
    {
      $FilterDeatis = new Edminglecurl('/institution/public/tag/'.$Institute_Id,'GET','0');
      return $FilterDeatis->Get_curl_no_auth();
    }
}
//$s = new Stat();
//print_r($s->GetStat());