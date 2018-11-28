<?php
/*
 * Copyright (c) 2016, Signaturgruppen  <info@signaturgruppen.dk>.
 * All rights reserved.
 * @license    See separate agreement regarding license information
 */
use Signaturgruppen\SPS\Demo\Configuration;

require_once __DIR__ . '/vendor/autoload.php';
header('Content-Type: text/html; charset=utf-8');
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

Configuration::loadConfig();

$model = [];
$model['title'] = 'NemID PDF sign';
$model['width'] = 800;
$model['height'] = 600;

$nemid = new \Signaturgruppen\SPS\Frame\NemIDSignFrameBuilder();
$model['script'] = $nemid->signPdf(file_get_contents("sample.pdf"))->buildScript("receive.php");
$model['src'] = $nemid->getFrameUrl();

require_once 'resources/template.php';