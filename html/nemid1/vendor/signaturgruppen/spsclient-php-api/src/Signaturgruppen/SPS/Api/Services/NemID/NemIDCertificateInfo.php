<?php

namespace Signaturgruppen\SPS\Api\Services\NemID {

    use Signaturgruppen\SPS\Api\Frame\NemID\CertificateType;

    class NemIDCertificateInfo
    {
        /**
         * @var string|null
         */
        public $IssuerDn;

        /**
         * @var string|null
         */
        public $DistinguishedName;

        /**
         * @var string|null
         */
        public $SubjectSerialNumber;

        /**
         * @var string|null
         */
        public $Pid;

        /**
         * @var string|null
         */
        public $Rid;

        /**
         * @var string|null
         */
        public $Email;

        /**
         * @var string|null
         */
        public $Cvr;

        /**
         * @var string|null
         */
        public $Company;

        /**
         * @var string|null
         */
        public $CommonName;

        /**
         * @var string|null
         */
        public $CertificateType;

        /**
         * @var bool|null
         */
        public $IsYouthCert;

        /**
         * @var string|null
         */
        public $CertificateSerialNumber;

        /**
         * @var RevocationInfo|null
         */
        public $RevocationInfo;

    };
}

