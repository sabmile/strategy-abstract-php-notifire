<?php

require_once 'Notifier.php';

class RegistrationMgr
{
    public function register(Lesson $lesson): void
    {
        // do something with lesson

        // now tell someone
        $notifier = Notifier::getNotifier();
        $notifier->inform("new lesson({$lesson->getName()}:{$lesson->chargeType()}) cost: {$lesson->cost()}");
    }
}