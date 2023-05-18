<?php

class MailNotifier extends Notifier
{
    public function inform(string $message): void
    {
        printf("mail notification: %s\n", $message);
    }
}