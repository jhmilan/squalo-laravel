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
        return call_user_func_array(array($this, 'prepareAndSendRemoraMessage'), $parameters);
    }

    /**
     * Prepare message
     *
     * @param array $parameters
     */
    private function prepareAndSendRemoraMessage($parameters)
    {
        dd($parameters);
        return call_user_func_array(array($this->log, $method), $parameters);
    }
}
