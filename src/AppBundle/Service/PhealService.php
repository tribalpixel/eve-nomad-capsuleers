<?php

namespace AppBundle\Service;

use Pheal\Pheal;
use Pheal\Core\Config;
use Pheal\Access\StaticCheck;
use Pheal\Cache\FileStorage;

/**
 * 
 */
class PhealService {

    private $apiKey;
    private $vCode;
    private $cachePath;

    private $parameters;
    
    public function __construct($parameters) {
        
        $this->parameters = $parameters;
        
        $this->cachePath = $this->getParameter('root_dir').''.$this->getParameter('cache');
        if (!is_writable($this->cachePath)) {
            // create cache folder
            $oldUmask = umask(0);
            mkdir($this->cachePath, 0755, true);
            umask($oldUmask);        
        }        
        
        // Pheal configuration
        Config::getInstance()->cache = new FileStorage($this->cachePath);
        Config::getInstance()->access = new StaticCheck();
        Config::getInstance()->http_user_agent = $this->getParameter('name');
        
    }

    public function setApiKey($apiKey)
    {
        $this->apiKey = $apiKey;
        return $this;
    }

    public function setVCode($vCode)
    {
        $this->vCode = $vCode;
        return $this;
    }
     
    public function getCharacters()
    {
        try { 
            $pheal = new Pheal($this->apiKey, $this->vCode);
            return $pheal->Characters();       
        } catch (\Pheal\Exceptions\PhealException $e) {
            throw new \Exception( sprintf(
                "an exception was caught! Type: %s Message: %s", get_class($e), $e->getMessage()
            ) );      
        }        
    }
    
    public function getCharacterSheet($characterID)
    {
        try { 
            $pheal = new Pheal($this->apiKey, $this->vCode, 'char');
            return $pheal->CharacterSheet(array("characterID" => $characterID));       
        } catch (\Pheal\Exceptions\PhealException $e) {
            throw new \Exception( sprintf(
                "an exception was caught! Type: %s Message: %s", get_class($e), $e->getMessage()
            ) );      
        }        
    }
    
    public function getAssetList($characterID)
    {
        try { 
            $pheal = new Pheal($this->apiKey, $this->vCode, 'char');
            return $pheal->AssetList(array("characterID" => $characterID));       
        } catch (\Pheal\Exceptions\PhealException $e) {
            throw new \Exception( sprintf(
                "an exception was caught! Type: %s Message: %s", get_class($e), $e->getMessage()
            ) );      
        }        
    }    

    public function getConquerableStationList()
    {
        try { 
            $pheal = new Pheal(NULL,NULL,'eve');
            return $pheal->ConquerableStationList();       
        } catch (\Pheal\Exceptions\PhealException $e) {
            throw new \Exception( sprintf(
                "an exception was caught! Type: %s Message: %s", get_class($e), $e->getMessage()
            ) );      
        }        
    }     
    
    /**
     * Get parameter by key
     * 
     * @param array $parameterKey
     * @return mixed
     */
    private function getParameter($parameterKey)
    {
        if (array_key_exists($parameterKey, $this->parameters)) {
            return $this->parameters[$parameterKey];
        }
        return null;
    }      
    
}
