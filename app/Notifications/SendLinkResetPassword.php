<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Symfony\Component\CssSelector\Parser\Token;

class SendLinkResetPassword extends Notification
{
    use Queueable;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        $channels = ['mail'];

        // if ($notifiable->notification_preferences['order_created']['sms']) {
        // $channels[] = 'sms';
        //     }

        // if ($notifiable->notification_preferences[ 'order_created']['mail']) {
        //     $channels[] = 'mail';
        //     }

        // if ($notifiable->notification_preferences[ 'order_created']['broadcast']) {
        //     $channels[] = 'broadcast';
        //     }
         return $channels;

    }
//     Subject: Reset Your Password

// Hello,

// You are receiving this email because a password reset request was made for your account. If you did not request a password reset, please ignore this email.

// To reset your password, click on the link below:

// Reset Password

// If the link above doesn't work, you can copy and paste the following URL into your web browser:

// url-to-reset-password-page

// Please note that this link is valid for only 60 minutes from the time of this email.

// If you have any questions or need further assistance, please contact our support team at [email-address-for-support].

// Thank you,
// [Your Company Name] Team

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                ->line('Reset Your Password')
                ->line('Hello,')
                ->line(' You are receiving this email because a password reset request was made for your account. If you did not request a password reset, please ignore this email.')
                ->line('To reset your password, click on the link below:')
                ->line('')
                ->action('Reset Password', url('cms/password/reset_form/'))
                ->line('')
                ->line('If the link above doesn\'t work, you can copy and paste the following URL into your web browser:')
                ->line('url-to-reset-password-page')
                ->line('Please note that this link is valid for only 60 minutes from the time of this email.')
                ->line('Thank you')
                ->line('[Your Company Name] Team');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
