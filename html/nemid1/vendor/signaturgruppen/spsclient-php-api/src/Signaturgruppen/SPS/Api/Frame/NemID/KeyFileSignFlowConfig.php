<?php

namespace Signaturgruppen\SPS\Api\Frame\NemID {

    use Signaturgruppen\SPS\Api\Services\Document\ToBeSigned;

    class KeyFileSignFlowConfig extends KeyFileFlowConfig
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
         * @var ToBeSigned|null
         */
        public $ToBeSigned;

    };
}

