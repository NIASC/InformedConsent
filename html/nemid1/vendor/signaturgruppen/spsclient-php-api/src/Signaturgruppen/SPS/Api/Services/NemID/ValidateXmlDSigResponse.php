<?php

namespace Signaturgruppen\SPS\Api\Services\NemID {

    use Signaturgruppen\SPS\Api\Body;

    class ValidateXmlDSigResponse extends Body
    {
        public function mustEncrypt()
        {
            return true;
        }

        public function mustSign()
        {
            return true;
        }

        /**
         * @var XmlDSigInfo|null
         */
        public $XmlDSigInfo;

    };
}

