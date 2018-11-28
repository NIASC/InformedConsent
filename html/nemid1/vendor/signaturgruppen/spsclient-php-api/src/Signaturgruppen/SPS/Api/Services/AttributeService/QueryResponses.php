<?php

namespace Signaturgruppen\SPS\Api\Services\AttributeService {

    use Signaturgruppen\SPS\Api\Body;

    class QueryResponses extends Body
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
         * @var QueryResponse[]
         */
        public $Responses;

    };
}

