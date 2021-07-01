<?php


namespace Finbricks\Sdk\Client;

use Closure;
use Finbricks\Sdk\Encryptor\AEncryptor;
use GuzzleHttp\Client;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\MessageFormatter;
use GuzzleHttp\Middleware;
use Monolog\Logger;
use Psr\Http\Message\RequestInterface;

class FinbricksClient
{
    /**
     * @var string encryptor ofr signature
     */
    private $encryptor;

    /**
     * @var array Guzzle Client config
     */
    private $config;

    /**
     * @var HandlerStack
     */
    private $stack;

    public function __construct(AEncryptor $encryptor = null)
    {
        $this->encryptor = $encryptor;
        $this->stack = HandlerStack::create();
    }


    public function getStack(): HandlerStack
    {
        return $this->stack;
    }

    public function setStack(HandlerStack $stack)
    {
        $this->stack = $stack;
    }

    /**
     * Finbricks signature
     * @return Client
     */
    public function getClient($useLogger = true): Client
    {
        if ($this->encryptor != null) {
            $this->stack->push(Middleware::mapRequest($this->addSignature()));
        }

        if ($useLogger) {
            $log = new Logger('finbricks-logger');
            $this->stack->push(
                Middleware::log(
                    $log,
                    new MessageFormatter('{req_body} - {res_body}'),
                    'info'
                )
            );
        }


        return new Client(['handler' => $this->stack]);
    }

    public function addSignature(): Closure
    {
        return function (RequestInterface $request) {
            switch ($request->getMethod()) {
                case "POST":
                {
                    $json = json_decode($request->getBody()->getContents(), true);
                    $request = $request->withHeader("signature", $this->encryptor->encryptQuery($json));
                    break;
                }
                default:
                {
                    $url = $request->getUri();
                    $parts = parse_url($url);
                    $query = [];
                    parse_str($parts['query'], $query);
                    $request = $request->withHeader("signature", $this->encryptor->encryptQuery($query));
                    break;
                }
            }
            return $request;
        };
    }
}
