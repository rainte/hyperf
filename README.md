# hyperf

## 1. 分页处理.

config/autoload/dependencies.php

```
use Hyperf\Contract\LengthAwarePaginatorInterface;
use Rainte\Hyperf\Model\LengthAwarePaginator;

return [
    LengthAwarePaginatorInterface::class => LengthAwarePaginator::class,
];
```

## 2. 异常处理.

config/autoload/exceptions.php

```
'handler' => [
    'http' => [
        ...
        \Rainte\Hyperf\Exception\Handler::class,
    ],
],
```

## 3. 中间件处理.

config/autoload/middlewares.php

```
'http' => [
    ...
    \Rainte\Hyperf\Middleware\CorsMiddleware::class,
    \Rainte\Hyperf\Middleware\ResponseMiddleware::class,
],
```
