<?php
/**
 * Created by PhpStorm.
 * User: mbrzuchalski
 * Date: 08.09.15
 * Time: 22:33
 */
namespace PHAProxy\Core\Collection;

use PHAProxy\Core\Backend;

class BackendsCollection extends NamedCollection
{
    public function getHash(Backend $named)
    {
        return parent::getHash($named);
    }

    public function attach(Backend $object, $data = null)
    {
        parent::attach($object, $data);
    }

    public function detach(Backend $object)
    {
        parent::detach($object);
    }

    public function contains(Backend $object)
    {
        return parent::contains($object);
    }
}