<?php

//Include autoloader
require_once __DIR__ . '/../vendor/autoload.php';

use Cherry\Request;

$request = new Request();

$singleHeader = $request->getHeaders('Host');

$manyHeaders = $request->getHeaders([
    'Accept',
    'Accept-Encoding'
]);

$allHeaders = $request->getHeaders();

echo "Single Header(Host): ";
var_dump($singleHeader);

echo "Many Headers: ";
var_dump($manyHeaders);

echo "All Headers: ";
var_dump($allHeaders);

echo "Check if request has a \"Accept\" header: ";
var_dump($request->hasHeader('Accept'));

echo "Get request HTTP method: ";
var_dump($request->getMethod());

echo "Get request path: ";
var_dump($request->getPath());

echo "Get request scheme(http or https): ";
var_dump($request->getScheme());

echo "Get request query parameters: ";
var_dump($request->getQueryParams());

echo "Get request query parameter by key: ";
var_dump($request->getQuery('username'));

echo "Get request data by method: ";
var_dump($request->getData());