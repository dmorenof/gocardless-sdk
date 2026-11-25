<?php

declare(strict_types=1);

namespace GoCardlessSDK\GetParams;

final class Webhooks extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'GoCardlessVersion',
];
    public const array OPERATION_FIELDS = [
    'path' => [],
    'query' => [
        'after' => 'after',
        'before' => 'before',
        'created_at' => 'created_at',
        'is_test' => 'is_test',
        'limit' => 'limit',
        'successful' => 'successful',
    ],
    'header' => [
        'GoCardless-Version' => 'GoCardlessVersion',
    ],
];

    protected const array PROPERTY_MAP = [
    'GoCardless-Version' => 'GoCardlessVersion',
];
    protected const array WIRE_PROPERTY_MAP = [
    'GoCardlessVersion' => 'GoCardless-Version',
];

    public string $GoCardlessVersion;
    public ?string $after;
    public ?string $before;
    public ?\GoCardlessSDK\DTOs\Webhooks\Get\Query\CreatedAtDTO $created_at;
    public string|bool|null $is_test;
    public int|string|null $limit;
    public string|bool|null $successful;
}
