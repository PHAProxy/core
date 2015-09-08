<?php

namespace spec\PHAProxy\Core\Collection;

use PHAProxy\Core\Named;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class NamedCollectionSpec extends ObjectBehavior
{
    function let(Named $named)
    {
        $named->getName()->willReturn('name');
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('PHAProxy\Core\Collection\NamedCollection');
    }

    function it_should_extends_SplObjectStorage()
    {
        $this->shouldHaveType('\SplObjectStorage');
    }

    function it_should_getHash_from_Named_object(Named $named)
    {
        $this->getHash($named)->shouldReturn('name');
    }

    function it_should_implement_JsonSerializable()
    {
        $this->jsonSerialize();
    }
}
