<?php

namespace App\Notifications;

use Carbon\Carbon;
use Closure;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\URL;

class NewRegistration extends Notification
{
    use Queueable;

    /**
     * The callback that should be used to build the mail message.
     *
     * @var \Closure|null
     */
    public static $toMailCallback;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     */
    public function via($notifiable): array
    {
        return ['mail', 'database'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     */
    public function toMail($notifiable): MailMessage
    {
        $user = $notifiable;

        if ($user->email_verified_at == '') {
            $verificationUrl = $this->verificationUrl($notifiable);

            if (static::$toMailCallback) {
                return call_user_func(static::$toMailCallback, $notifiable, $verificationUrl);
            }

            return (new MailMessage())
                ->subject('Thank you for registration!')
                ->line('Please click the button below to verify your email address.')
                ->action('Verify Email Address', $verificationUrl)
                ->line('If you did not create an account, no further action is required.');
        }

        return (new MailMessage)
            ->subject('Thank you for registration!')
            ->line('Thank you for registration at '.app_name().'.')
            ->action('Vist Application', url('/'))
            ->line('We are really happy that you started to use '.app_name().'!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     */
    public function toDatabase($notifiable): array
    {
        $user = $notifiable;

        $text = 'Registration Completed! | New registration completed for <strong>'.$user->name.'</strong>';

        $url_backend = route('backend.users.profile', $user->id);
        $url_frontend = route('frontend.users.profile', $user->id);

        return [
            'title' => 'Registration Completed!',
            'module' => 'User',
            'type' => 'created', // created, published, viewed,
            'icon' => 'fas fa-user',
            'text' => $text,
            'url_backend' => $url_backend,
            'url_frontend' => $url_frontend,
        ];
    }

    /**
     * Get the verification URL for the given notifiable.
     *
     * @param  mixed  $notifiable
     */
    protected function verificationUrl($notifiable): string
    {
        return URL::temporarySignedRoute(
            'verification.verify',
            Carbon::now()->addMinutes(Config::get('auth.verification.expire', 60)),
            [
                'id' => $notifiable->getKey(),
                'hash' => sha1($notifiable->getEmailForVerification()),
            ]
        );
    }

    /**
     * Set a callback that should be used when building the notification mail message.
     */
    public static function toMailUsing(Closure $callback): void
    {
        static::$toMailCallback = $callback;
    }
}
