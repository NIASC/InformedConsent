<?php

namespace Signaturgruppen\SPS\Api\Services\NemID {

    use Signaturgruppen\SPS\Api\Body;

    class CprLookupResponse extends Body
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
         * @var string|null
         */
        public $Cpr;

    };
}

