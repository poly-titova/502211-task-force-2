<?php

class Task
{
    const STATUS_NEW = 'new';
    const STATUS_CANCELED = 'canceled';
    const STATUS_IN_WORK = 'in_work';
    const STATUS_DONE = 'done';
    const STATUS_FAILED = 'failed';

    const ACTION_CANCEL = 'cancel';
    const ACTION_RESPOND = 'respond';
    const ACTION_DONE = 'done';
    const ACTION_REFUSE = 'refuse';

    private $status;
    private $currentId;
    private $customerId;
    private $executorId;

    public function __construct($status, $customer = null, $executor, $current)
    {
        $this->status = $status;
        $this->customerId = $customer;
        $this->executorId = $executor;
        $this->currentId = $current;
    }
}
