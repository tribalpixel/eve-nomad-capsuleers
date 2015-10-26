<?php

namespace AppBundle\Service;

use Perry\Perry;
use Perry\Setup;

/**
 * 
 */
class PerryService {

    private $baseUrl;

    public function __construct() {
        $this->baseUrl = "https://public-crest.eveonline.com/";
    }
    
    public function __get($name) {
        $url = $this->baseUrl.$name."/";
        return Perry::fromUrl($url);
    }

}
