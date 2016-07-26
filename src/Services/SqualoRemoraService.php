<?php

namespace Jhmilan\SqualoLaravel\Services;

use Monolog\Logger;
use Monolog\Handler\SyslogUdpHandler;
use Illuminate\Support\ServiceProvider;

class SqualoRemoraService
{
    /**
     * The monolog client
     *
     * @var Monolog\Logger
     */
    protected $log;

    /**
     * The class constructor
     */
    public function __construct()
    {
        $this->log = new Logger(config('squalo.key.public'));
        $this->log->pushHandler(new SyslogUdpHandler(config('squalo.host.ip'), config('squalo.host.port')));
    }

    /**
     * Magic method to check any action before
     *
     * @param string $method
     * @param array  $parameters
     *
     * @return method call
     */
    public function __call($method, $parameters)
    {
        return $this->prepareAndSendRemoraMessage($method, $parameters);
    }

    /**
     * Prepare message
     *
     * @param string  $method
     * @param message $message
     */
    private function prepareAndSendRemoraMessage($method, $message)
    {
        $message = $message.'-checksum-'.md5($message.config('squalo.key.private')); 
        return call_user_func_array(array($this->log, $method), $message);
    }
}
