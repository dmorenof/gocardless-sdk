<?php

declare(strict_types=1);

namespace GoCardlessSDK\GetParams;

final class VerificationDetails extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'GoCardlessVersion',
    'creditor',
];
    public const array OPERATION_FIELDS = [
    'path' => [],
    'query' => [
        'after' => 'after',
        'before' => 'before',
        'creditor' => 'creditor',
        'limit' => 'limit',
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
    public string $creditor;
    public int|string|null $limit;
}
