<?php

declare(strict_types=1);

namespace GoCardlessSDK\GetParams;

final class BillingRequestTemplates extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'GoCardlessVersion',
];
    public const array OPERATION_FIELDS = [
    'path' => [],
    'query' => [
        'after' => 'after',
        'before' => 'before',
        'limit' => 'limit',
        'payment_request_scheme' => 'payment_request_scheme',
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
    public int|string|null $limit;
    public ?string $payment_request_scheme;
}
