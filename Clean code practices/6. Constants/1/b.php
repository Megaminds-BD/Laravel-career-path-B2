<?php

class Task
{
    public $status;
}

//class Status {
//    const PENDING = 'pending';
//    const APPROVED = 'approved';
//    const REJECTED = 'rejected';
//}

enum Status: string {
    case PENDING = 'pending';
    case APPROVED = 'approved';
    case REJECTED = 'rejected';
}

$task = new Task();

if ($task->status === Status::PENDING->value) {
    // Do something
}
