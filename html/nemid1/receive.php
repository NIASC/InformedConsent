<?php
/*
* Copyright (c) 2016, Signaturgruppen  <info@signaturgruppen.dk>.
* All rights reserved.
* @license    See separate agreement regarding license information
*/
require_once __DIR__ . '/vendor/autoload.php';
header('Content-Type: text/html; charset=utf-8');

\Signaturgruppen\SPS\Demo\Configuration::loadConfig();

$model = [];
$model['title'] = "Response";

$postResult = $_POST['result'];

$validator = new \Frame\NemIDFlowValidator();
try{
    $flowResult = $validator->validate($postResult);

    //CPRSERVICE uses cURL, you need trust for SSL for tuservices.siganturgruppen.dk/tuservices-test.signaturgruppen.dk
    //$cprService = new \Signaturgruppen\SPS\Services\PidMatchService();
    //$cprMatched = $cprService->pidMatchesCpr($flowResult->AuthenticationInfo->Pid, "1402263260");
    //$flowResult->AuthenticationInfo contains the NemID authentication info
    //EXAMPLE: Get the PID: $flowResult->AuthenticationInfo->Pid;
    $model['result'] = "<pre>" . json_encode($flowResult, JSON_PRETTY_PRINT) . "</pre>";
}catch (\Signaturgruppen\SPS\Frame\ValidationException $exception){
    $model['result'] = "Error: " . $exception->errorMessage . "<br/>"
                        . "Status: " . $exception->status . "<br/>"
                        . "User message (if set in response): [" . $exception->userMessage . "]<br/>"
                        . "FlowErrorCode: " . $exception->flowErrorCode;
}

require_once 'resources/template.php';