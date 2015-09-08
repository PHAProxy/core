<?php

namespace spec\PHAProxy\Core;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class FrontendSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('PHAProxy\Core\Frontend');
    }
}
