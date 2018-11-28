<?php

namespace Signaturgruppen\SPS\Api\Services\Ades {

    use Signaturgruppen\SPS\Api\Services\NemID\RevocationInfo;

    use Signaturgruppen\SPS\Api\Services\NemID\NemIDSignerInfo;

    class NemIDSignature
    {
        /**
         * @var string|null
         */
        public $Xml;

        /**
         * @var RevocationInfo|null
         */
        public $RevocationInfo;

        /**
         * @var NemIDSignerInfo|null
         */
        public $SignerInfo;

    };
}

