<?php

namespace Signaturgruppen\SPS\Api\Services\AttributeService {

    class QueryResponse extends StatusResponse
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
        public $Value;

    };
}

