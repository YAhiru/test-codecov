<?php
declare(strict_types=1);
namespace App;

final class Hello
{
    public function say(string $name = '') : string
    {
        $message = 'Hello!';
        if ($name !== '') {
            $message .= " $name";
        }

        return $message;
    }
}
