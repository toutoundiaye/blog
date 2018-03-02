<?php
/**
 * Request factory
 *
 * @license MIT
 */

namespace Poei\blog\http;

use Psr\Http\Message\RequestInterface;
use Symfony\Bridge\PsrHttpMessage\Factory\DiactorosFactory;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class RequestFactory
 *
 * $request = RequestFactory::createFromGlobals();
 * $request->getUri();
 * $request->getHeaders();
 *
 * @package Dawan\Http
 */
class RequestFactory
{
    /**
     * Return Request Interface
     *
     * @return RequestInterface
     */
    public static function createFromGlobals(): RequestInterface
    {
        return (new DiactorosFactory())->createRequest(Request::createFromGlobals());
    }
}