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

interface DelegateInterface
{
    /**
     * Dispatch the next available middleware and return the response.
     *
     * @param RequestInterface $request
     *
     * @return ResponseInterface
     */
    public function next(RequestInterface $request);
}
