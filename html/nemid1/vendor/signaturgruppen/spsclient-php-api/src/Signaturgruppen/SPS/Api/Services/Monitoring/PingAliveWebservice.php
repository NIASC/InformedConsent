<?php

namespace Signaturgruppen\SPS\Api\Services\Monitoring {

    use Signaturgruppen\SPS\Api\Webservice;
    use Signaturgruppen\SPS\Transport\WebserviceClient;

    abstract class PingAliveWebservice implements Webservice
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
            return "PingAlive";
        }

        /**
         * @param PingAliveRequest $request
         * @return PingAliveResponse
         */
        public abstract function pingAlive(PingAliveRequest $request);

    }
}

