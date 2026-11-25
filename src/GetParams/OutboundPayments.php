<?php

declare(strict_types=1);

namespace GoCardlessSDK\GetParams;

final class OutboundPayments extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'GoCardlessVersion',
];
    public const array OPERATION_FIELDS = [
    'path' => [],
    'query' => [
        'after' => 'after',
        'before' => 'before',
        'created_from' => 'created_from',
        'created_to' => 'created_to',
        'limit' => 'limit',
        'status' => 'status',
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
    public ?string $created_from;
    public ?string $created_to;
    public int|string|null $limit;
    public ?\GoCardlessSDK\Enums\OutboundPayment\Status $status;
}
