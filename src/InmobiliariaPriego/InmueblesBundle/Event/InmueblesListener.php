<?php
namespace InmobiliariaPriego\InmueblesBundle\Event;

use Symfony\Component\EventDispatcher\Event;
use InmobiliariaPriego\InmueblesBundle\Entity\Inmueble;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

class InmueblesListener {
    
    public function onInmuebleUpdate(Event $event)
    {
        $inmueble = $event->getInmueble();
        $this->registraLog("update");
    }
    
    public function registraLog($option)
    {
        switch($option)
        {
            case "update":
                $log = new Logger('UpdateInmueble');
                $log->pushHandler(new StreamHandler('/app/logs/customLogs.log', Logger::INFO));
                $log->addInfo('Esto es un mensaje de INFO');
                break;
        }
        
        /*
        $log->addDebug('Esto es un mensaje de DEBUG');
        $log->addWarning('Esto es un mensaje de WARNING');
        $log->addError('Esto es un mensaje de ERROR');
        $log->addCritical('Esto es un mensaje de CRITICAL');
        $log->addAlert('Esto es un mensaje de ALERT');
         * 
         */
    }
    
}
