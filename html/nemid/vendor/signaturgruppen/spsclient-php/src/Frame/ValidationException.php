<?php
namespace Signaturgruppen\SPS\Frame;

class ValidationException extends \Exception
{
    public $status;
    public $errorMessage;
    public $userMessage;
    public $flowErrorCode;

    public function __construct($status, $errorMessage, $userMessage, $flowErrorCode) {
        // make sure everything is assigned properly
        $this->errorMessage=$errorMessage;
        $this->status =$status;
        $this->userMessage=$userMessage;
        $this->flowErrorCode=$flowErrorCode;
        parent::__construct("Got error: " . $this->status . " message: " . $this->errorMessage . " FlowErrorCode: " . $this->flowErrorCode . " UserMessage: " . $this->userMessage, $code = null, $previous = null);
    }
}