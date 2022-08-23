<?php

namespace Horizom\HttpServer\Socket;

use React\Stream\ReadableStreamInterface;
use React\Stream\WritableStreamInterface;

interface ConnectionInterface extends ReadableStreamInterface, WritableStreamInterface
{
    public function getRemoteAddress();
}
