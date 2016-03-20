<?php

namespace App\Listeners;

use App\Events\UserHasRegisteredEvent;

class SendWelcomingEmail
{
    public function handle(UserHasRegisteredEvent $event)
    {
        echo 'Sending welcome email to: ' . $event->getUsername();
    }
}
