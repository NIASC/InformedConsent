<?php

namespace Signaturgruppen\SPS\Api\Services\Document {

    use Signaturgruppen\SPS\Api\Services\NemID\RevocationInfo;

    class SignedDocument
    {
        /**
         * @var string|null
         */
        public $Id;

        /**
         * @var ToBeSigned|null
         */
        public $ToBeSignedDocument;

        /**
         * @var string|null
         */
        public $Signature;

        /**
         * @var string|null
         */
        public $SignatureType;

        /**
         * @var string|null
         */
        public $SigningCertificate;

        /**
         * @var RevocationInfo|null
         */
        public $RevocationInfo;

        /**
         * @var string|null
         */
        public $VerifiedTime;

        /**
         * @var string|null
         */
        public $SignerIp;

        /**
         * @var bool|null
         */
        public $CprVerified;

    };
}

