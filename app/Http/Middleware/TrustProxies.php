<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;
use Fideloper\Proxy\TrustProxies as Middleware;

// amended for Heroku

class TrustProxies extends Middleware
{
    protected $proxies = '*';
    protected $headers = Request:: HEADER_X_FORWARDED_AWS_ELB;
}
