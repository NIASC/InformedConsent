<?php
/*
* Copyright (c) 2016, Signaturgruppen A/S <info@signaturgruppen.dk>.
* All rights reserved.
* @license    See separate agreement regarding license information
*/

namespace Signaturgruppen\SPS\Frame;

use Signaturgruppen\SPS\Api\Frame\ClientFlow;
use Signaturgruppen\SPS\Api\Frame\NemID\KeyFileFlowConfig;
use Signaturgruppen\SPS\Api\Frame\NemID\SignProperty;
use Signaturgruppen\SPS\Configuration\Config;


class KeyFileFrameBuilder {
    /**
     * @var KeyFileFlowConfig
     */
    protected $config;

    public function __construct()
    {
      $this->config = new KeyFileFlowConfig();
      $this->config->ClientFlow = ClientFlow::NemIDKeyFile;
    }

    /**
     * @param string $language
     * @return $this
     */
    public function useLanguage($language)
    {
        $this->config->Language = $language;
        return $this;
    }

    /**
     * @param array $properties
     * @return $this;
     */
    public function withSignProperties($properties)
    {
        $result = array();
        foreach($properties as $key => $value) {
            $prop = new SignProperty();
            $prop->Name = $key;
            $prop->Value = $value;
            array_push($result, $prop);
        }
        $this->config->SignProperties = $result;
        return $this;
    }

    public function buildScript($returnUrl)
    {
        $builder = new FrameBuilder($this->config);
        return $builder->buildScript($returnUrl);
    }

    public function getFrameUrl()
    {
        return Config::getDefault()->getFrameUrl();
    }
    
}
