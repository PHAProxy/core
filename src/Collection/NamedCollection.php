<?php
namespace PHAProxy\Core\Collection;

use JsonSerializable;
use PHAProxy\Core\Named;
use SplObjectStorage;

class NamedCollection extends SplObjectStorage implements JsonSerializable
{
    /**
     * @param Named $named
     * @return string
     */
    public function getHash(Named $named)
    {
        return (string)$named->getName();
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $result = [];
        foreach ($this as $item) {
            $result[] = $item;
        }

        return $result;
    }
}
