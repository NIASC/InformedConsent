<?php

namespace Signaturgruppen\SPS\Api\Services\AttributeService {

    use Signaturgruppen\SPS\Api\Body;

    class StatusResponse extends Body
    {
        public function mustEncrypt()
        {
            return false;
        }

        public function mustSign()
        {
            return true;
        }

        /**
         * @var string|null
         */
        public $Status;

    };
}

