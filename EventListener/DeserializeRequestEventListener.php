<?php
namespace JeroenFrenken\DeserializeRequest\EventListener;

use Symfony\Component\HttpKernel\Event\ControllerEvent;

class DeserializeRequestEventListener
{

    /**
     * @param ControllerEvent $event
     */
    public function onKernelController(ControllerEvent $event)
    {

        var_dump('jeroenfrenken bundle werkt'); exit;

    }

}
