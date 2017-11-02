<?php

namespace Application\Factory;

use Application\Jobs\EmailJob;
use \Zend\ServiceManager\FactoryInterface;

class EmailJobFactory implements FactoryInterface {


    public function createService(\Zend\ServiceManager\ServiceLocatorInterface $serviceLocator)
    {

        $job = new EmailJob();
        $job->setServiceManager($serviceLocator);

        return $job;
    }

}