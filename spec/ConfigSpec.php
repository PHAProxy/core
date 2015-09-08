<?php

namespace spec\PHAProxy\Core;

use PHAProxy\Core\Backend;
use PHAProxy\Core\Collection\ServicesCollection;
use PHAProxy\Core\Frontend;
use PHAProxy\Core\Service;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ConfigSpec extends ObjectBehavior
{
    function let(Frontend $frontend, Backend $backend, Service $service)
    {
        $frontend->getName()->willReturn('frontendName');
        $backend->getName()->willReturn('backendName');
        $service->getName()->willreturn('serviceName');
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('PHAProxy\Core\Config');
    }

    function it_can_add_frontend(Frontend $frontend)
    {
        $this->addFrontend($frontend);
    }

    function it_returns_FrontendsCollection_on_getFrontends()
    {
        $this->getFrontends()->shouldHaveType('PHAProxy\Core\Collection\FrontendsCollection');
    }

    function it_can_add_frontend_only_once(Frontend $frontend)
    {
        $this->addFrontend($frontend);
        $this->addFrontend($frontend);
        $frontends = $this->getFrontends();
        $frontends->contains($frontend)->shouldBe(true);
        $frontends->count()->shouldBe(1);
    }

    function it_can_remove_frontend(Frontend $frontend)
    {
        $this->addFrontend($frontend);
        $this->removeFrontend($frontend);
        $frontends = $this->getFrontends();
        $frontends->contains($frontend)->shouldBe(false);
        $frontends->count()->shouldBe(0);
    }

    function it_can_add_backend(Backend $backend)
    {
        $this->addBackend($backend);
    }

    function it_returns_BackendCollection_on_getBackends()
    {
        $this->getBackends()->shouldHaveType('PHAProxy\Core\Collection\BackendsCollection');
    }

    function it_can_add_backend_only_once(Backend $backend)
    {
        $this->addBackend($backend);
        $this->addBackend($backend);
        $backends = $this->getBackends();
        $backends->contains($backend)->shouldBe(true);
        $backends->count()->shouldBe(1);
    }

    function it_can_remove_backend(Backend $backend)
    {
        $this->addBackend($backend);
        $this->removeBackend($backend);
        $backends = $this->getBackends();
        $backends->contains($backend)->shouldBe(false);
        $backends->count()->shouldBe(0);
    }

    function it_can_add_service(Service $service)
    {
        $this->addService($service);
    }

    function it_returns_ServicesCollection_on_getServices()
    {
        $this->getServices()->shouldHaveType('PHAProxy\Core\Collection\ServicesCollection');
    }

    function it_can_add_service_only_once(Service $service)
    {
        $this->addService($service);
        $this->addService($service);
        $services = $this->getServices();
        $services->contains($service)->shouldBe(true);
        $services->count()->shouldBe(1);
    }

    function it_can_remove_service(Service $service)
    {
        $this->addService($service);
        $this->removeService($service);
        $services = $this->getServices();
        $services->contains($service)->shouldBe(false);
        $services->count()->shouldBe(0);
    }

    function it_can_handle_pidFile_pathname()
    {
        $this->setPidFile('/tmp/test.pid');
        $this->getPidFile()->shouldBe('/tmp/test.pid');
    }

    function it_can_handle_runAsDaemon_flag()
    {
        $this->runAsDaemon();
        $this->isDaemon()->shouldBe(true);
        $this->runNoDaemon();
        $this->isDaemon()->shouldBe(false);
    }

    function it_can_set_maxConnections()
    {
        $this->setMaxConnections(8192);
        $this->getMaxConnections()->shouldBe(8192);
    }
}
