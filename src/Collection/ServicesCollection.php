<?php
/**
 * Created by PhpStorm.
 * User: mbrzuchalski
 * Date: 08.09.15
 * Time: 22:57
 */
namespace PHAProxy\Core\Collection;

use PHAProxy\Core\Service;

class ServicesCollection extends NamedCollection
{
    public function getHash(Service $named)
    {
        return parent::getHash($named);
    }

    public function attach(Service $object, $data = null)
    {
        parent::attach($object, $data);
    }

    public function detach(Service $object)
    {
        parent::detach($object);
    }

    public function contains(Service $object)
    {
        return parent::contains($object);
    }
}