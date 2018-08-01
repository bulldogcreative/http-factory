<?php

namespace Bulldog\HttpFactory\Factories\Zend;

use Zend\Diactoros\Response;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ResponseFactoryInterface;

class ResponseFactory implements ResponseFactoryInterface
{
    /**
     * Create a new response.
     *
     * @param int $code HTTP status code; defaults to 200
     * @param string $reasonPhrase Reason phrase to associate with status code
     *     in generated response; if none is provided implementations MAY use
     *     the defaults as suggested in the HTTP specification.
     *
     * @return ResponseInterface
     */
    public function createResponse(int $code = 200, string $reasonPhrase = ''): ResponseInterface
    {
        $response = new Response('php://memory', $code, []);

        if ($reasonPhrase) {
            $response = $response->withStatus($code, $reasonPhrase);
        }

        return $response;
    }
}
