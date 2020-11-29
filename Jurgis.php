<?php


namespace App;


class Jurgis
{
    public function responds(string $message): string
    {
        $message = preg_replace('/\s+/', '', $message);

        if (empty($message)) {
            return 'Alio! Kuku?';
        }

        if (in_array(strtolower($message), ['sveiki', 'labas'])) {
            return 'Labas!';
        }

        if (substr($message, -1) === '!' || ctype_upper(preg_replace('/[^a-zA-Z]/', '', $message))) {
            return 'Oi oi, atvėsk!';
        }

        if (substr($message, -1) === '?') {
            return 'Okis.';
        }

        return 'Aha gerai.';

    }

}
