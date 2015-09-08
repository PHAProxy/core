<?php

namespace PHAProxy\Core;

class Frontend implements Named
{
    /** @var string */
    protected $name;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
}
