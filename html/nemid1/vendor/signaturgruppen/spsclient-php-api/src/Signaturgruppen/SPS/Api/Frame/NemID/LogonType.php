<?php

namespace Signaturgruppen\SPS\Api\Frame\NemID {

    final class LogonType
    {
        private function __construct()
        {
        }

        const Otp = "Otp";
        const KeyFile = "KeyFile";
        const Unknown = "Unknown";
    }
}

