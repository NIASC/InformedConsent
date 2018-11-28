<?php
/*
* Copyright (c) 2016, Signaturgruppen A/S <info@signaturgruppen.dk>.
* All rights reserved.
* @license    See separate agreement regarding license information
*/

namespace Signaturgruppen\SPS\Services;

use Signaturgruppen\SPS\Api\Services\AttributeService\QueryRequest;
use Signaturgruppen\SPS\Api\Services\AttributeService\QueryResponse;
use Signaturgruppen\SPS\Api\Services\AttributeService\QueryRequests;
use Signaturgruppen\SPS\Api\Services\AttributeService\QueryResponses;
use Signaturgruppen\SPS\Api\Services\AttributeService\StatusRequest;
use Signaturgruppen\SPS\Api\Services\AttributeService\StatusResponse;
use Signaturgruppen\SPS\Api\Services\AttributeService\VerifyRequest;
use Signaturgruppen\SPS\Configuration\Config;
use Signaturgruppen\SPS\Transport\WebserviceClient;

class AttributeService
{
    /**
     * @param $subjectSerialNumber
     * @param $attributeId
     * @return QueryResponse
     */
    public function getAttribute($subjectSerialNumber, $attributeId)
    {
        $this->assertValidSubjectSerialNumber($subjectSerialNumber);
        $this->assertValidAttributeId($attributeId);
        $request = new QueryRequest();
        $request->SubjectSerialNumber = $subjectSerialNumber;
        $request->AttributeId = $attributeId;
        $response = $this->getStub()->getAttribute($request);
        return $response;
    }

    /**
     * @param $subjectSerialNumber
     * @param $attributeIds
     * @return QueryResponses
     */
    public function getAttributes($subjectSerialNumber, $attributeIds)
    {
        $this->assertValidSubjectSerialNumber($subjectSerialNumber);
        $this->assertValidAttributeIds($attributeIds);
        $requestArray = array();
        foreach($attributeIds as $attributeId)
        {
            $request = new QueryRequest();
            $request->SubjectSerialNumber = $subjectSerialNumber;
            $request->AttributeId = $attributeId;
            array_push($requestArray, $request);
        }
        $request = new QueryRequests();
        $request->Requests = $requestArray;
        return $this->getStub()->getAttributes($request);
    }

    /**
     * @param $subjectSerialNumber
     * @param $attributeId
     * @param $attributeValue
     * @return StatusResponse
     */
    public function verifyAttributeValue($subjectSerialNumber, $attributeId, $attributeValue)
    {
        $this->assertValidSubjectSerialNumber($subjectSerialNumber);
        $this->assertValidAttributeId($attributeId);
        $this->assertValidString("attributeValue", $attributeValue);
        $request = new VerifyRequest();
        $request->SubjectSerialNumber = $subjectSerialNumber;
        $request->AttributeId = $attributeId;
        $request->AttributeValue = $attributeValue;
        return $this->getStub()->verifyAttributeValue($request);
    }

    /**
     * @param $attributeId
     * @param $publishToCvr
     * @return StatusResponse
     */
    public function publishAttribute($attributeId, $publishToCvr)
    {
        $this->assertValidAttributeId($attributeId);
        $this->assertValidCvrNumber($publishToCvr);
        $request = new StatusRequest();
        $request->AttributeId = $attributeId;
        $request->PublishToCvr = $publishToCvr;
        return $this->getStub()->publishAttribute($request);
    }

    /**
     * @param $attributeId
     * @param $publishToCvr
     * @return StatusResponse
     */
    public function endPublishAttribute($attributeId, $publishToCvr)
    {
        $this->assertValidAttributeId($attributeId);
        $this->assertValidCvrNumber($publishToCvr);
        $request = new StatusRequest();
        $request->AttributeId = $attributeId;
        $request->PublishToCvr = $publishToCvr;
        return $this->getStub()->endPublishAttribute($request);
    }

    private function getStub()
    {
        $config = Config::getDefault();
        return new AttributeServiceWebserviceStub(WebserviceClient::fromConfig($config));
    }

    private function assertValidSubjectSerialNumber($subjectSerialNumber)
    {
        $this->assertValidString("subjectSerialNumber", $subjectSerialNumber);
        if(!(substr($subjectSerialNumber, 0, strlen("CVR:")) === "CVR:" ||
             substr($subjectSerialNumber, 0, strlen("PID:")) === "PID:")) {
            throw new \InvalidArgumentException("subjectSerialNumber doesn't start with CVR: or PID:");
        }
    }

    private function assertValidAttributeId($attributeId)
    {
        if($attributeId == null)
        {
            throw new \InvalidArgumentException("attributeId is null");
        }
        if(!is_int($attributeId))
        {
            throw new \InvalidArgumentException("attributeId must be an integer");
        }
        if($attributeId < 1)
        {
            throw new \InvalidArgumentException("attributeId is less than 1");
        }
    }

    private function assertValidAttributeIds($attributeIds)
    {
        if($attributeIds == null)
        {
            throw new \InvalidArgumentException("attributeIds is null");
        }
        if(!is_array($attributeIds))
        {
            throw new \InvalidArgumentException("attributeIds must be an array");
        }
        if(count($attributeIds) < 1)
        {
            throw new \InvalidArgumentException("attributeIds is empty");
        }
        foreach($attributeIds as $attributeId)
        {
            $this->assertValidAttributeId($attributeId);
        }
    }

    private function assertValidCvrNumber($publishToCvr)
    {
        $this->assertValidString("publishToCvr", $publishToCvr);
        if(strlen($publishToCvr) != 8)
        {
            throw new \InvalidArgumentException("publishToCvr must be exactly eight characters");
        }
        if(!preg_match("/\d{8}/", $publishToCvr))
        {
            throw new \InvalidArgumentException("publishToCvr must be eight digits");
        }
    }

    private function assertValidString($variableName, $variableValue)
    {
        if($variableValue == null)
        {
            throw new \InvalidArgumentException($variableName . " is null");
        }
    }

}