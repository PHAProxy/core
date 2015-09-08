<?php

namespace spec\PHAProxy\Core;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ServiceSpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedWith('serviceName', 80, 'end-point');
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('PHAProxy\Core\Service');
    }

    function it_can_set_bindPort()
    {
        $this->setBindPort(80);
        $this->getBindPort()->shouldBe(80);
    }

    function it_can_set_endPoint()
    {
        $this->setEndPoint('end-point');
        $this->getEndPoint()->shouldBe('end-point');
    }
}
