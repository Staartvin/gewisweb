<?php
namespace Application\Jobs;

use SlmQueue\Job\AbstractJob;

class EmailJob extends AbstractJob
{
    /**
     * Execute the job
     *
     * @return void
     */
    public function execute()
    {
        $payload = $this->getContent();

        $type = $payload['type'];
        $view = $payload['view'];
        $subject = $payload['subject'];
        $data = $payload['data'];

        $this->sm->get('application_service_email')->sendEmail($type, $view, $subject, $data, false);
    }
}