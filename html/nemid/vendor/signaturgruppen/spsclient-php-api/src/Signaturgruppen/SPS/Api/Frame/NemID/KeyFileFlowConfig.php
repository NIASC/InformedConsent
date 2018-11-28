<?php

namespace Signaturgruppen\SPS\Api\Frame\NemID {

    class KeyFileFlowConfig extends OcesFlowConfig
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
        public $AppletHeight;

        /**
         * @var int|null
         */
        public $AppletWidth;

    };
}

