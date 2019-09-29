<?php

declare(strict_types=1);

use Symfony\Component\HttpClient\HttpClient;

require __DIR__.'/vendor/autoload.php';

$client = HttpClient::create();

$response = $client->request('GET', 'https://api.github.com/repos/symfony/symfony-docs');

$statusCode = $response->getStatusCode();
// $statusCode = 200
$contentType = $response->getHeaders()['content-type'][0];
// $contentType = 'application/json'
$content = $response->getContent();
// $content = '{"id":521583, "name":"symfony-docs", ...}'
$content = $response->toArray();

echo $content;
