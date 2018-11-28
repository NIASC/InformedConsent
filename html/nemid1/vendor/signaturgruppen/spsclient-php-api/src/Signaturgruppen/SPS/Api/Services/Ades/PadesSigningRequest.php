<?php

namespace Signaturgruppen\SPS\Api\Services\Ades {

    use Signaturgruppen\SPS\Api\Body;

    class PadesSigningRequest extends Body
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
        public $DocumentToSign;

        /**
         * @var string|null
         */
        public $Type;

        /**
         * @var NemIDSignature[]
         */
        public $Signers;

    };
}

