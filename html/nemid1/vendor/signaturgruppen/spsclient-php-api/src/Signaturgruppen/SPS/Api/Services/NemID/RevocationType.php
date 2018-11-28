<?php

namespace Signaturgruppen\SPS\Api\Services\NemID {

    final class RevocationType
    {
        private function __construct()
        {
        }

        const None = "None";
        const Full = "Full";
        const Partial = "Partial";
        const Ocsp = "Ocsp";
    }
}

