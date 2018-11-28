<?php

namespace Signaturgruppen\SPS\Api\Services\NemID {

    final class XmlDSigStatus
    {
        private function __construct()
        {
        }

        const Valid = "Valid";
        const Revoked = "Revoked";
        const Expired = "Expired";
        const IssuerNotTrusted = "IssuerNotTrusted";
        const Invalid = "Invalid";
        const NotAllowedForDigitalSignature = "NotAllowedForDigitalSignature";
        const InvalidXml = "InvalidXml";
        const RevocationCheckFailure = "RevocationCheckFailure";
        const Error = "Error";
        const None = "None";
    }
}

