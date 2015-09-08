<?php
/**
 * Created by PhpStorm.
 * User: mbrzuchalski
 * Date: 08.09.15
 * Time: 22:04
 */
namespace PHAProxy\Core\Collection;

use PHAProxy\Core\Frontend;

class FrontendsCollection extends NamedCollection
{
    public function getHash(Frontend $named)
    {
        return parent::getHash($named);
    }

    public function attach(Frontend $object, $data = null)
    {
        parent::attach($object, $data);
    }

    public function detach(Frontend $object)
    {
        parent::detach($object);
    }

    public function contains(Frontend $object)
    {
        return parent::contains($object);
    }
}