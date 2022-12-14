<?php

namespace Horizom\DevServer\Socket;

use Evenement\EventEmitterInterface;

/** Emits the connection event */
interface ServerInterface extends EventEmitterInterface
{
    public function listen($port, $host = '127.0.0.1');
    public function getPort();
    public function shutdown();
}
