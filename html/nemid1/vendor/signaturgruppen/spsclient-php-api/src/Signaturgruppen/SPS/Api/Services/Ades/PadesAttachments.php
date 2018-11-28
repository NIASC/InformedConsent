<?php

namespace Signaturgruppen\SPS\Api\Services\Ades {

    class PadesAttachments
    {
        /**
         * @var string|null
         */
        public $OriginalDocument;

        /**
         * @var string|null
         */
        public $OriginalDocumentExtension;

        /**
         * @var PadesSignerAttachments[]
         */
        public $SignerAttachments;

    };
}

