<?php
namespace edmingle_php_sdk;
Class auth{
    public $apikey;
  
    function __construct($apikey) {
      $this->apikey = $apikey;
    }
    function get_apikey() {
      return $this->apikey;
    }
    function set_apikey($apikey) {
    $this->apikey = $apikey;
    }  
}
?>