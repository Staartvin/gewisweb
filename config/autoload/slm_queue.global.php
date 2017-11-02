<?php

return array(
    'slm_queue' => array(
        'queue_manager' => array(
            'factories' => array(
                'defaultQueue' => 'SlmQueueDoctrine\Factory\DoctrineQueueFactory'
            )
        ),
        'job_manager' => array(
            'factories' => array(
                'Application\Jobs\EmailJob' => 'Application\Factory\EmailJobFactory'
            )
        )
    )
);
