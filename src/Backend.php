<?php

namespace PHAProxy\Core;

class Backend implements Named
{
    /** @var string */
    protected $name;
    /** @var string */
    protected $mode;

    public function __construct($name, $mode = 'http')
    {
        $this->name = $name;
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
     * @param string $mode
     */
    public function setMode($mode)
    {
        $this->mode = $mode;
    }

    /**
     * @return string
     */
    public function getMode()
    {
        return $this->mode;
    }
}
