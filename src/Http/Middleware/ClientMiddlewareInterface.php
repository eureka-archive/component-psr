<?php

/**
 * Copyright (c) 2010-2017 Romain Cottard
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Eureka\Component\Psr\Http\Middleware;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

interface ClientMiddlewareInterface extends MiddlewareInterface
{
    /**
     * Process a client request and return a response.
     *
     * Takes the incoming request and optionally modifies it before delegating
     * to the next frame to get a response.
     *
     * @param RequestInterface  $request
     * @param DelegateInterface $next
     *
     * @return ResponseInterface
     */
    public function process(RequestInterface $request, DelegateInterface $next);
}
