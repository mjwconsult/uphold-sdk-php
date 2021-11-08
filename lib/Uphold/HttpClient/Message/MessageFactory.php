<?php

namespace Uphold\HttpClient\Message;

use Uphold\HttpClient\Message\Response;
use GuzzleHttp\MessageFactory as BaseMessageFactory;

/**
 * HTTP request factory used to create Request and Response objects.
 */
class MessageFactory extends BaseMessageFactory
{
    /**
     * Create new response.
     *
     * @param int $statusCode Response status code.
     * @param array $headers Response headers.
     * @param mixed $body Response body.
     * @param array $options Options.
     *
     * @return Response
     */
    public function createResponse($statusCode, array $headers = array(), $body = null, array $options = array())
    {
        return new Response($statusCode, $headers, $body, $options);
    }
}
