<?php

require __DIR__ . '/vendor/autoload.php';

$client = new \Twitch\Twirp\Example\HaberdasherClient($argv[1]);

$size = new \Twitch\Twirp\Example\Size();
$size->setInches(1234);

try {
    $hat = $client->MakeHat([], $size);

    echo $hat->serializeToJsonString();
} catch (\Twirp\Error $e) {
    echo json_encode([
        'code' => $e->getErrorCode(),
        'msg' => $e->getMessage(),
        'meta' => $e->getMetaMap(),
    ]);
}
