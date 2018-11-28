<?php

namespace Signaturgruppen\SPS\Api\Frame {

    class ErrorFlowResult extends FlowResult
    {
        public function mustEncrypt()
        {
            return false;
        }

        public function mustSign()
        {
            return false;
        }

    };
}

