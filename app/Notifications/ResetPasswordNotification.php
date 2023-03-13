<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Lang;

class ResetPasswordNotification extends Notification
{
    use Queueable;

    public $token;
    public $email;
    public $name;

    /**
     * Create a new notification instance.
     */
    public function __construct($token, $email, $name)
    {
        $this->token = $token;
        $this->email = $email;
        $this->name = $name;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        $url = "http://127.0.0.1:8000/reset-password/$this->token?email=$this->email";
        return (new MailMessage)
        ->greeting(Lang::get('Olá, '.$this->name."!"))
        ->subject(Lang::get('Redefinir Senha'))
        ->line(Lang::get('Esse e-mail servirá para a redefinição de senha. Clique no botão a baixo que contém o link para a redefinição de senha.'))
        ->action(Lang::get('Redefinir Senha'), $url)
        ->line(Lang::get('O link irá expirar em :count minutos.', ['count' => config('auth.passwords.'.config('auth.defaults.passwords').'.expire')]))
        ->line(Lang::get('Se não foi você quem requiriu a redefinição de senha, nenhuma ação deve ser tomada'))
        ->salutation(Lang::get("Até breve,"))
        ->line(Lang::get('Cetdabar'));
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
