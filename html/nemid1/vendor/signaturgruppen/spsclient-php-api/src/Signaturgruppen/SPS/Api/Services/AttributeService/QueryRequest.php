<?php

namespace Signaturgruppen\SPS\Api\Services\AttributeService {

    use Signaturgruppen\SPS\Api\Body;

    class QueryRequest extends Body
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
        public $SubjectSerialNumber;

        /**
         * @var int|null
         */
        public $AttributeId;

    };
}

