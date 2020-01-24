<?php 

namespace Kcdev\Alert;

use Illuminate\Contracts\Support\Responsable;
use Illuminate\Http\Response;
use Illuminate\Session\Store;

class Alert implements Responsable
{
    const SESSION_ALERT = 'laravel_alert';
    
    protected Store $session;

    public function __construct(Store $session)
    {
        $this->session = $session;
    }

    public function __get(string $name)
    {
        return $this->getMessage()->$name ?? null;
    }

    public function success(string $message): Alert
    {
        $this->message(new Message($message, $success = true));

        return $this;
    }

    public function failed(string $message): Alert
    {
        $this->message(new Message($message, $success = false));
        
        return $this;
    }

    public function message(Message $message): Alert
    {
        $this->session->flash(static::SESSION_ALERT, $message->toArray());

        return $this;
    }

    public function getMessage(): ?Message
    {
        $alert = $this->session->get(static::SESSION_ALERT);

        if (! $alert) {
            return null;
        }

        return new Message($alert['message'], $alert['success']);
    }

    public function check(): bool
    {
        return (bool) $this->getMessage()->message;
    }

    public function toResponse($request): Response
    {
        return response($this->getMessage()->toArray());
    }
}
