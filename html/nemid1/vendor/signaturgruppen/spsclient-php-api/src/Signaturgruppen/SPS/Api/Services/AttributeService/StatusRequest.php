<?php

namespace Signaturgruppen\SPS\Api\Services\AttributeService {

    use Signaturgruppen\SPS\Api\Body;

    class StatusRequest extends Body
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
         * @var int|null
         */
        public $AttributeId;

        /**
         * @var string|null
         */
        public $PublishToCvr;

    };
}

