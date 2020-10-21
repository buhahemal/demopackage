<?php 
namespace edmingle_php_sdk;
require('Edminglecurl.php');
class Stat 
{
    public function GetStat()
    {
      $stat_info = new Edminglecurl('/institution/stats/public?institution_id=1','GET','0');
      return $stat_info->Get_curl_no_auth();
    }
}
//$s = new Stat();
//print_r($s->GetStat());