<?php
/*
* Copyright (c) 2016, Signaturgruppen A/S <info@signaturgruppen.dk>.
* All rights reserved.
* @license    See separate agreement regarding license information
*/

namespace Signaturgruppen\SPS\Services;

use Signaturgruppen\SPS\Api\Services\AttributeService\AttributeServiceWebservice;
use Signaturgruppen\SPS\Api\Services\AttributeService\QueryRequest;
use Signaturgruppen\SPS\Api\Services\AttributeService\QueryResponse;
use Signaturgruppen\SPS\Api\Services\AttributeService\QueryRequests;
use Signaturgruppen\SPS\Api\Services\AttributeService\QueryResponses;
use Signaturgruppen\SPS\Api\Services\AttributeService\StatusRequest;
use Signaturgruppen\SPS\Api\Services\AttributeService\StatusResponse;
use Signaturgruppen\SPS\Api\Services\AttributeService\VerifyRequest;

class AttributeServiceWebserviceStub extends AttributeServiceWebservice
{
    /**
     * @param QueryRequest $request
     * @return QueryResponse
     */
    public function getAttribute(QueryRequest $request)
    {
        return $this->client->invoke($request, $this, "GetAttribute");
    }

    /**
     * @param QueryRequests $request
     * @return QueryResponses
     */
    public function getAttributes(QueryRequests $requests)
    {
        return $this->client->invoke($requests, $this, "GetAttributes");
    }

    /**
     * @param VerifyRequest $request
     * @return StatusResponse
     */
    public function verifyAttributeValue(VerifyRequest $request)
    {
        return $this->client->invoke($request, $this, "VerifyAttributeValue");
    }

    /**
     * @param StatusRequest $request
     * @return StatusResponse
     */
    public function publishAttribute(StatusRequest $request)
    {
        return $this->client->invoke($request, $this, "PublishAttribute");
    }

    /**
     * @param StatusRequest $request
     * @return StatusResponse
     */
    public function endPublishAttribute(StatusRequest $request)
    {
        return $this->client->invoke($request, $this, "EndPublishAttribute");
    }
}