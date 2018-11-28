<?php

namespace Signaturgruppen\SPS\Api\Services\Monitoring {

    use Signaturgruppen\SPS\Api\Body;

    class PingAliveRequest extends Body
    {
        public function mustEncrypt()
        {
            return false;
        }

        public function mustSign()
        {
            return true;
        }

    };
}

