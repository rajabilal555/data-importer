<?php

namespace App\Http\Middleware;

use Illuminate\Config\Repository;
use Illuminate\Http\Middleware\TrustProxies as Middleware;
use Illuminate\Http\Request;

class TrustProxies extends Middleware
{
    /**
     * The trusted proxies for this application.
     *
     * @var array|string|null
     */
    protected $proxies;

    /**
     * The headers that should be used to detect proxies.
     *
     * @var int
     */
    protected $headers =
        Request::HEADER_X_FORWARDED_FOR |
        Request::HEADER_X_FORWARDED_HOST |
        Request::HEADER_X_FORWARDED_PORT |
        Request::HEADER_X_FORWARDED_PROTO |
        Request::HEADER_X_FORWARDED_AWS_ELB;

    /**
     * TrustProxies constructor.
     *
     * @param Repository $config
     */
    public function __construct(Repository $config)
    {
        $trustedProxies = (string) config('trustedproxy.proxies');
        $this->proxies  = explode(',', $trustedProxies);
        if ('**' === $trustedProxies) {
            $this->proxies = '**';
        }
        if ('*' === $trustedProxies) {
            $this->proxies = '*';
        }
    }
}
