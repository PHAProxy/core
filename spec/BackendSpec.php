<?php

namespace spec\PHAProxy\Core;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class BackendSpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedWith('backendName', 'http');
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('PHAProxy\Core\Backend');
    }

    function it_can_set_mode()
    {
        $this->setMode('http');
        $this->getMode()->shouldBe('http');
    }
}
