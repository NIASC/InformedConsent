<?php

namespace Signaturgruppen\SPS\Api\Services\NemID {

    use Signaturgruppen\SPS\Api\Webservice;
    use Signaturgruppen\SPS\Transport\WebserviceClient;

    abstract class CvrInfoWebservice implements Webservice
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
            return "CvrInfo";
        }

        /**
         * @param CvrInfoRequest $request
         * @return CvrInfoResponse
         */
        public abstract function cvrInfo(CvrInfoRequest $request);

    }
}

