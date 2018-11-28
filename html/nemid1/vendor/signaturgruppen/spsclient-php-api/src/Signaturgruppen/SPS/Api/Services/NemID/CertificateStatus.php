<?php

namespace Signaturgruppen\SPS\Api\Services\NemID {

    final class CertificateStatus
    {
        private function __construct()
        {
        }

        const Invalid = "Invalid";
        const Valid = "Valid";
        const Revoked = "Revoked";
        const Expired = "Expired";
        const IssuerNotTrusted = "IssuerNotTrusted";
        const NotAllowedForDigitalSignature = "NotAllowedForDigitalSignature";
        const RevocationCheckFailure = "RevocationCheckFailure";
        const Error = "Error";
    }
}

