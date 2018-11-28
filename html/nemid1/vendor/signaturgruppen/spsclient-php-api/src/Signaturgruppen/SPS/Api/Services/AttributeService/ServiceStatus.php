<?php

namespace Signaturgruppen\SPS\Api\Services\AttributeService {

    final class ServiceStatus
    {
        private function __construct()
        {
        }

        const StatusOk = "StatusOk";
        const UnknownAttribute = "UnknownAttribute";
        const ReferralAttribute = "ReferralAttribute";
        const LookupNotAllowed = "LookupNotAllowed";
        const VerificationNotAllowed = "VerificationNotAllowed";
        const IssuerNotSupported = "IssuerNotSupported";
        const UnknownUser = "UnknownUser";
        const AttributeNotConfiguredForUser = "AttributeNotConfiguredForUser";
        const StatusError = "StatusError";
        const ValueNotVerified = "ValueNotVerified";
        const StatusUnknown = "StatusUnknown";
    }
}

