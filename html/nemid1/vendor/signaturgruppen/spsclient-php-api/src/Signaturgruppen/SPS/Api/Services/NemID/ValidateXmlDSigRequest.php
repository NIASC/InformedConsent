<?php

namespace Signaturgruppen\SPS\Api\Services\NemID {

    use Signaturgruppen\SPS\Api\Frame\Language;

    use Signaturgruppen\SPS\Api\Body;

    class ValidateXmlDSigRequest extends Body
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
         * @var bool|null
         */
        public $DisableExpiryAndCrlVerification;

        /**
         * @var string|null
         */
        public $XmlDSig;

        /**
         * @var string|null
         */
        public $Crl;

        /**
         * @var string|null
         */
        public $Language;

    };
}

