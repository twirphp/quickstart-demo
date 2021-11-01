<?php

namespace Twirp\QuickstartDemo;

final class MyHelloWorld implements HelloWorld
{
    public function Hello(array $ctx, HelloReq $req): HelloResp
    {
        $resp = new HelloResp();
        $resp->setText(sprintf("Hello %s", $req->getSubject()));

        return $resp;
    }
}
