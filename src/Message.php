<?php 

namespace Kcdev\Alert;

use Illuminate\Contracts\Support\Arrayable;

class Message implements Arrayable
{
    public bool $success = false;
    public string $message = '';

    public function __construct(string $message, bool $success = false)
    {
        $this->success = $success;
        $this->message = $message;
    }

    public function toArray()
    {
        return [
            'success' => $this->success,
            'message' => $this->message,
        ];
    }
}
