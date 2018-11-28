<?php

namespace Signaturgruppen\SPS\Api\Services\NemID {

    use Signaturgruppen\SPS\Api\Body;

    class NemIDPDFResponse extends Body
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
        public $ValidForSignature;

        /**
         * @var string|null
         */
        public $ErrorMessage;

    };
}

