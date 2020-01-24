<?php 

use Kcdev\Alert\Alert;
use Kcdev\Alert\Message;

function alert(string $message = null): Alert
{
    $alert = app(Alert::class);

    if (is_null($message)) {
        return $alert;
    }

    return $alert->message(new Message($message));
}
