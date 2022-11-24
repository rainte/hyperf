<?php

namespace Rainte\Hyperf\Exception;

use Hyperf\ExceptionHandler\ExceptionHandler;
use Hyperf\HttpMessage\Stream\SwooleStream;
use Psr\Http\Message\ResponseInterface;
use Rainte\Hyperf\Exception\Error;

class ErrorExceptionHandler extends ExceptionHandler
{
    /**
     * Handle the exception, and return the specified result.
     * 
     * @param Error $throwable
     */
    public function handle(\Throwable $throwable, ResponseInterface $response)
    {
        $this->stopPropagation();

        $res = json_decode($throwable->getMessage(), true);
        config('app_debug', false) and $res['trace'] = $throwable->getTrace();

        return $response->withStatus($throwable->getCode())
            ->withBody(new SwooleStream(json_encode($res)));
    }

    /**
     * @inheritdoc
     */
    public function isValid(\Throwable $throwable): bool
    {
        return $throwable instanceof Error;
    }
}
