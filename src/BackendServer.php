<?php

namespace PHAProxy\Core;

class BackendServer implements Named
{
    /** @var string */
    protected $name;
    /** @var string */
    protected $host;
    /** @var int */
    protected $port;
    /** @var string */
    protected $unixSocket;
    /** @var int */
    protected $weight;
    /** @var int */
    protected $maxConnections;
    /** @var bool */
    protected $check;

    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $host
     */
    public function setHost($host)
    {
        $this->host = $host;
    }

    /**
     * @return string
     */
    public function getHost()
    {
        return $this->host;
    }

    /**
     * @param int $port
     */
    public function setPort($port)
    {
        $this->port = $port;
    }

    /**
     * @return int
     */
    public function getPort()
    {
        return $this->port;
    }

    /**
     * @param string $unixSocket
     */
    public function setUnixSocket($unixSocket)
    {
        $this->unixSocket = $unixSocket;
    }

    /**
     * @return string
     */
    public function getUnixSocket()
    {
        return $this->unixSocket;
    }

    /**
     * @return int
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * @param int $weight
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;
    }

    /**
     * @return int
     */
    public function getMaxConnections()
    {
        return $this->maxConnections;
    }

    /**
     * @param int $maxConnections
     */
    public function setMaxConnections($maxConnections)
    {
        $this->maxConnections = $maxConnections;
    }

    /**
     * @return boolean
     */
    public function isCheck()
    {
        return $this->check;
    }

    /**
     * @param boolean $check
     */
    public function setCheck($check)
    {
        $this->check = $check;
    }
}
