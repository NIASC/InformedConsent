<?php

namespace Signaturgruppen\SPS\Api\Services\Ades {

    use Signaturgruppen\SPS\Api\Body;

    class PadesVerificationResponse extends Body
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
        public $NemIDAttachmentsError;

        /**
         * @var String[]
         */
        public $PadesVerificationErrors;

        /**
         * @var bool|null
         */
        public $Valid;

        /**
         * @var string|null
         */
        public $VerificationTime;

        /**
         * @var PadesAttachments|null
         */
        public $Attachments;

    };
}

