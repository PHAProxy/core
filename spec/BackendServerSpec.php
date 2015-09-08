<?php

namespace spec\PHAProxy\Core;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class BackendServerSpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedWith('backendServerName');
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('PHAProxy\Core\BackendServer');
    }

    function it_shoud_have_set_name()
    {
        $this->getName()->shouldBe('backendServerName');
    }

    function it_can_set_host()
    {
        $this->setHost('hostname');
        $this->getHost()->shouldBe('hostname');
    }

    function it_can_set_port()
    {
        $this->setPort(90);
        $this->getPort()->shouldBe(90);
    }

    function it_can_have_unix_socket()
    {
        $this->setUnixSocket('/var/run/unix.sock');
        $this->getUnixSocket()->shouldBe('/var/run/unix.sock');
    }

    function it_can_have_weight()
    {
        $this->setWeight(10);
        $this->getWeight()->shouldBe(10);
    }

    function it_can_set_max_connections()
    {
        $this->setMaxConnections(8192);
        $this->getMaxConnections()->shouldBe(8192);
    }
}
