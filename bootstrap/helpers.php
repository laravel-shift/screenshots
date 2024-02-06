<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Str;

function markdown($content, $inline = true)
{
    $html = Str::markdown($content);

    if (! $inline) {
        return $html;
    }

    return preg_replace('/<p>(.+)<\/p>/', '$1', $html);
}

function commit_sha()
{
    return substr(str_shuffle('abcdef0123456789'), 0, 7);
}

function files_changed($shift)
{
    if ($shift->isTailwind()) {
        return Arr::random([23, 39, 42, 56, 63]);
    }

    if ($shift->sku === '10') {
        return 307;
    }

    if ($shift->sku === '11') {
        return Arr::random(range(30, 63));
    }

    return Arr::random([63, 76, 82, 91, 103, 111, 123, 142, 256]);
}

function plus_changes($shift)
{
    if ($shift->sku === '10') {
        return 1107;
    }

    return rand(80, 200);
}

function minus_changes($shift)
{
    if ($shift->sku === '10') {
        return 1403;
    }

    if ($shift->sku === '11') {
        return rand(1000, 2000);
    }

    return rand(80, 200);
}
