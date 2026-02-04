<?php

use App\Models\Shift;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;

function markdown($content, $inline = true): string
{
    $html = Str::markdown($content);

    if (! $inline) {
        return $html;
    }

    return preg_replace('/<p>(.+)<\/p>/', '$1', $html);
}

function commit_sha(): string
{
    return substr(str_shuffle('abcdef0123456789'), 0, 7);
}

function files_changed($shift): int
{
    if ($shift->sku === 'SP') {
        return 2;
    }

    if ($shift->isTailwind()) {
        return Arr::random([23, 39, 42, 56, 63]);
    }

    if ($shift->sku === '10') {
        return 307;
    }

    if (in_array($shift->sku, ['11', '12', 'LS'])) {
        return Arr::random(range(30, 63));
    }

    return Arr::random([63, 76, 82, 91, 103, 111, 123, 142, 256]);
}

function plus_changes(Shift $shift): int
{
    if ($shift->sku === 'CR') {
        return 3;
    }

    if ($shift->sku === '10') {
        return 1107;
    }

    return rand(80, 200);
}

function minus_changes(Shift $shift): int
{
    if (in_array($shift->sku, ['CR', 'FL'])) {
        return 0;
    }

    if ($shift->sku === '10') {
        return 1403;
    }

    if (in_array($shift->sku, ['10', '11', 'LS'])) {
        return rand(1000, 2000);
    }

    return rand(80, 200);
}
