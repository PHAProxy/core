<?php

namespace PHAProxy\Core;

class Service implements Named
{
    /** @var string */
    protected $name;
    /** @var int */
    protected $bindPort;
    /** @var string */
    protected $endPoint;
    /** @var string */
    protected $mode;

    public function __construct($name, $bindPort, $endPoint, $mode = 'http')
    {
        $this->name = $name;
        $this->bindPort = $bindPort;
        $this->endPoint = $endPoint;
        $this->mode = $mode;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param int $bindPort
     */
    public function setBindPort($bindPort)
    {
        $this->bindPort = $bindPort;
    }

    /**
     * @return int
     */
    public function getBindPort()
    {
        return $this->bindPort;
    }

    /**
     * @param $endPoint
     */
    public function setEndPoint($endPoint)
    {
        $this->endPoint = $endPoint;
    }

    /**
     * @return string
     */
    public function getEndPoint()
    {
        return $this->endPoint;
    }
}
