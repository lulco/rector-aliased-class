<?php

namespace AliasedClass;

use GuzzleHttp\Client as GuzzleClient;

class AliasedClassTest
{
    public function test()
    {
        $guzzleClient = new GuzzleClient();
        return $guzzleClient->get('url');
    }
}
