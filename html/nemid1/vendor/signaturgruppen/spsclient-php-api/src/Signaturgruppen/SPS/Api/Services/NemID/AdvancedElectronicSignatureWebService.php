<?php

namespace Signaturgruppen\SPS\Api\Services\NemID {

    use Signaturgruppen\SPS\Api\Webservice;
    use Signaturgruppen\SPS\Transport\WebserviceClient;

    abstract class AdvancedElectronicSignatureWebService implements Webservice
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
            return "AdvancedElectronicSignature";
        }

        /**
         * @param PadesRequest $request
         * @return PadesResponse
         */
        public abstract function createPades(PadesRequest $request);

        /**
         * @param PadesVerificationRequest $request
         * @return PadesVerificationResponse
         */
        public abstract function verifyPades(PadesVerificationRequest $request);

    }
}

