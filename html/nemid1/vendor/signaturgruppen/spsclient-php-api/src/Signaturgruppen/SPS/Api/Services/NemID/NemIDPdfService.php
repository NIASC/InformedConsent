<?php

namespace Signaturgruppen\SPS\Api\Services\NemID {

    use Signaturgruppen\SPS\Api\Webservice;
    use Signaturgruppen\SPS\Transport\WebserviceClient;

    abstract class NemIDPdfService implements Webservice
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
            return "NemIDPDF";
        }

        /**
         * @param NemIDPDFRequest $request
         * @return NemIDPDFResponse
         */
        public abstract function verifyPdf(NemIDPDFRequest $request);

    }
}

