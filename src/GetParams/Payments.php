<?php

declare(strict_types=1);

namespace GoCardlessSDK\GetParams;

final class Payments extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'GoCardlessVersion',
];
    public const array OPERATION_FIELDS = [
    'path' => [],
    'query' => [
        'after' => 'after',
        'before' => 'before',
        'charge_date' => 'charge_date',
        'created_at' => 'created_at',
        'creditor' => 'creditor',
        'currency' => 'currency',
        'customer' => 'customer',
        'include' => 'include_',
        'limit' => 'limit',
        'mandate' => 'mandate',
        'scheme' => 'scheme',
        'sort_direction' => 'sort_direction',
        'sort_field' => 'sort_field',
        'status' => 'status',
        'subscription' => 'subscription',
    ],
    'header' => [
        'GoCardless-Version' => 'GoCardlessVersion',
    ],
];

    protected const array PROPERTY_MAP = [
    'GoCardless-Version' => 'GoCardlessVersion',
    'include' => 'include_',
];
    protected const array WIRE_PROPERTY_MAP = [
    'GoCardlessVersion' => 'GoCardless-Version',
    'include_' => 'include',
];

    public string $GoCardlessVersion;
    public ?string $after;
    public ?string $before;
    public ?\GoCardlessSDK\DTOs\Payments\Get\Query\ChargeDateDTO $charge_date;
    public ?\GoCardlessSDK\DTOs\Payments\Get\Query\CreatedAtDTO $created_at;
    public ?string $creditor;
    public ?\GoCardlessSDK\Enums\Payment\Currency $currency;
    public ?string $customer;
    public ?string $include_;
    public int|string|null $limit;
    public ?string $mandate;
    public ?string $scheme;
    public ?\GoCardlessSDK\Enums\Payment\SortDirection $sort_direction;
    public ?\GoCardlessSDK\Enums\Payment\SortField $sort_field;
    public ?\GoCardlessSDK\Enums\Payment\Status $status;
    public ?string $subscription;
}
