<?php


use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;

class SendMessageEmail extends Notification
{
    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->line('The introduction to the message.')
            ->action('Notification Action', url('/'))
            ->line('Thank you for using our application!');
    }
}

