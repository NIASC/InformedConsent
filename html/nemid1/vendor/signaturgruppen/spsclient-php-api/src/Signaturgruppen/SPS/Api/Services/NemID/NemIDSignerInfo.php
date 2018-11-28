<?php

namespace Signaturgruppen\SPS\Api\Services\NemID {

    class NemIDSignerInfo
    {
        /**
         * @var string|null
         */
        public $VerifiedTime;

        /**
         * @var string|null
         */
        public $Ip;

        /**
         * @var string|null
         */
        public $SignerName;

        /**
         * @var string|null
         */
        public $AdditionalShortInfo;

        /**
         * @var string|null
         */
        public $Titel;

        /**
         * @var string|null
         */
        public $NemIDSsn;

        /**
         * @var bool|null
         */
        public $CprVerified;

    };
}

