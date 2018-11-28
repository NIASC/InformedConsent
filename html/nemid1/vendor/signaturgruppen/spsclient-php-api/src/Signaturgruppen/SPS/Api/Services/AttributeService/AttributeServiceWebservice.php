<?php

namespace Signaturgruppen\SPS\Api\Services\AttributeService {

    use Signaturgruppen\SPS\Api\Webservice;
    use Signaturgruppen\SPS\Transport\WebserviceClient;

    abstract class AttributeServiceWebservice implements Webservice
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
            return "AttributeService";
        }

        /**
         * @param QueryRequest $request
         * @return QueryResponse
         */
        public abstract function getAttribute(QueryRequest $request);

        /**
         * @param QueryRequests $request
         * @return QueryResponses
         */
        public abstract function getAttributes(QueryRequests $requests);

        /**
         * @param VerifyRequest $request
         * @return StatusResponse
         */
        public abstract function verifyAttributeValue(VerifyRequest $request);

        /**
         * @param StatusRequest $request
         * @return StatusResponse
         */
        public abstract function publishAttribute(StatusRequest $request);

        /**
         * @param StatusRequest $request
         * @return StatusResponse
         */
        public abstract function endPublishAttribute(StatusRequest $request);

    }
}

