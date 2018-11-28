<?php

namespace Signaturgruppen\SPS\Api\Services\Ades {

    use Signaturgruppen\SPS\Api\Body;

    class PadesVerificationRequest extends Body
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
         * @var string|null
         */
        public $Pades;

    };
}

