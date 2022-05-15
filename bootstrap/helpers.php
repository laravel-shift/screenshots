<?php

use Illuminate\Support\Str;

function markdown($content, $inline = true)
{
    $html = Str::markdown($content);

    if (!$inline) {
        return $html;
    }

    return preg_replace('/<p>(.+)<\/p>/', '$1', $html);
}

function commit_sha()
{
    return substr(str_shuffle('abcdef0123456789'), 0, 7);
}
