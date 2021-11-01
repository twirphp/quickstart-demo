<?php

require __DIR__.'/vendor/autoload.php';

$client = new \Twirp\QuickstartDemo\HelloWorldClient($argv[1]);

$req = new \Twirp\QuickstartDemo\HelloReq();
$req->setSubject("World");

try {
    $resp = $client->Hello([], $req);

    echo $resp->getText();
} catch (\Twirp\Error $e) {
    echo json_encode([
        'code' => $e->getErrorCode(),
        'msg' => $e->getMessage(),
        'meta' => $e->getMetaMap(),
    ]);
}
