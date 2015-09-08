<?php

namespace PHAProxy\Core;

use JsonSerializable;
use PHAProxy\Core\Collection\BackendsCollection;
use PHAProxy\Core\Collection\FrontendsCollection;
use PHAProxy\Core\Collection\ServicesCollection;

class Config implements JsonSerializable
{
    const DEFAULT_PIDFILE = '/var/run/haproxy.pid';
    /** @var FrontendsCollection */
    protected $frontends;
    /** @var BackendsCollection */
    protected $backends;
    /** @var ServicesCollection */
    protected $services;
    /** @var string */
    protected $pidFile = self::DEFAULT_PIDFILE;
    /** @var bool */
    protected $daemon = false;
    /** @var int */
    protected $maxConnections;

    public function __construct()
    {
        $this->frontends = new FrontendsCollection();
        $this->backends = new BackendsCollection();
        $this->services = new ServicesCollection();
    }

    /**
     * @param Frontend $frontend
     */
    public function addFrontend(Frontend $frontend)
    {
        $this->frontends->attach($frontend);
    }

    /**
     * @return FrontendsCollection
     */
    public function getFrontends()
    {
        return $this->frontends;
    }

    /**
     * @param Frontend $frontend
     */
    public function removeFrontend(Frontend $frontend)
    {
        if ($this->frontends->contains($frontend)) {
            $this->frontends->detach($frontend);
        }
    }

    /**
     * @param Backend $backend
     */
    public function addBackend(Backend $backend)
    {
        $this->backends->attach($backend);
    }

    /**
     * @return BackendsCollection
     */
    public function getBackends()
    {
        return $this->backends;
    }

    /**
     * @param Backend $backend
     */
    public function removeBackend(Backend $backend)
    {
        if ($this->backends->contains($backend)) {
            $this->backends->detach($backend);
        }
    }

    /**
     * @param Service $service
     */
    public function addService(Service $service)
    {
        $this->services->attach($service);
    }

    /**
     * @return ServicesCollection
     */
    public function getServices()
    {
        return $this->services;
    }

    /**
     * @param Service $service
     */
    public function removeService(Service $service)
    {
        if ($this->services->contains($service)) {
            $this->services->detach($service);
        }
    }

    /**
     * (PHP 5 &gt;= 5.4.0)<br/>
     * Specify data which should be serialized to JSON
     * @link http://php.net/manual/en/jsonserializable.jsonserialize.php
     * @return mixed data which can be serialized by <b>json_encode</b>,
     * which is a value of any type other than a resource.
     */
    function jsonSerialize()
    {
        return [
            'frontends' => $this->frontends,
            'backends' => $this->backends,
            'services' => $this->services,
            'pidfile' => $this->pidFile,
            'maxconn' => $this->maxConnections,
        ];
    }

    /**
     * @return string
     */
    public function getPidFile()
    {
        return $this->pidFile;
    }

    /**
     * @param string $pidFile
     */
    public function setPidFile($pidFile)
    {
        $this->pidFile = $pidFile;
    }

    /**
     * @return bool
     */
    public function isDaemon()
    {
        return true === $this->daemon;
    }

    public function runAsDaemon()
    {
        $this->daemon = true;
    }

    public function runNoDaemon()
    {
        $this->daemon = false;
    }

    /**
     * @param int $maxConnections
     */
    public function setMaxConnections($maxConnections)
    {
        $this->maxConnections = $maxConnections;
    }

    /**
     * @return int
     */
    public function getMaxConnections()
    {
        return $this->maxConnections;
    }
}
