<?php

namespace Signaturgruppen\SPS\Api\Services\NemID {

    class XmlDSigInfo
    {
        /**
         * @var NemIDCertificateInfo|null
         */
        public $NemIDInfo;

        /**
         * @var NemIDXmlDSigInfo|null
         */
        public $NemIDXmlDSigInfo;

        /**
         * @var string|null
         */
        public $Message;

        /**
         * @var string|null
         */
        public $UserMessage;

        /**
         * @var string|null
         */
        public $Status;

    };
}

