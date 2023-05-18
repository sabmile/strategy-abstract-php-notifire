<?php

require_once 'MailNotifier.php';
require_once 'TextNotifier.php';

abstract class Notifier
{
    public static function getNotifier(): Notifier
    {
        // acquire concrete class according to configuration or other logic

        if (rand(1, 2) === 1) {
            return new MailNotifier();
        }

        return new TextNotifier();
    }

    abstract public function inform(string $message): void;
}