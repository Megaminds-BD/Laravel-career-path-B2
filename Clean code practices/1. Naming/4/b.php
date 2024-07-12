<?php

// Class name should be 'noun' and method name should be 'verb'

class Course
{
    private $available;

    public function addFee()
    {
        //
    }

    public function isAvailable()
    {
        return $this->available === true;
    }

    public function canModify()
    {
        //
    }

    public function hasStudents()
    {
        //
    }
}


// Exception: Action class
class CreateStudent
{
    public function __invoke()
    {
        // TODO: Implement __invoke() method.
    }
}