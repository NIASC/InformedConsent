<?php

namespace Signaturgruppen\SPS\Api\Services\NemID {

    use Signaturgruppen\SPS\Api\Webservice;
    use Signaturgruppen\SPS\Transport\WebserviceClient;

    abstract class CertificateWebservice implements Webservice
    {
        protected $client;

        /**
         * @param WebserviceClient $client
         */
        public function __construct(WebserviceClient $client)
        {
            $this->client = $client;
        }

        public function getEndpoint()
        {
            return "Certificate";
        }

        /**
         * @param ValidateCertificateRequest $request
         * @return ValidateCertificateResponse
         */
        public abstract function validateCertificate(ValidateCertificateRequest $request);

        /**
         * @param ValidateXmlDSigRequest $request
         * @return ValidateXmlDSigResponse
         */
        public abstract function validateXmlDSig(ValidateXmlDSigRequest $request);

    }
}

