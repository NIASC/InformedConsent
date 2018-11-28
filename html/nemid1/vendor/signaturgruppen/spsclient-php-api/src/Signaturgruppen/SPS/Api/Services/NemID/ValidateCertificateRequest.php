<?php

namespace Signaturgruppen\SPS\Api\Services\NemID {

    use Signaturgruppen\SPS\Api\Frame\Language;

    use Signaturgruppen\SPS\Api\Body;

    class ValidateCertificateRequest extends Body
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
        public $Certificate;

        /**
         * @var string|null
         */
        public $Language;

    };
}

