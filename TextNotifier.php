<?php

class TextNotifier extends Notifier
{
    public function inform(string $message): void
    {
        printf("text notification: %s\n", $message);
    }
}