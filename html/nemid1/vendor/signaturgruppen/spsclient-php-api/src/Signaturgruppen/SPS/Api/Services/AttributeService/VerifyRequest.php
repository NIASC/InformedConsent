<?php

namespace Signaturgruppen\SPS\Api\Services\AttributeService {

    class VerifyRequest extends QueryRequest
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
        public $AttributeValue;

    };
}

