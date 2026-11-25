<?php

declare(strict_types=1);

namespace GoCardlessSDK\GetParams;

final class Mandates extends \Dmorenof\SdkRuntime\DTO
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
        'creditor' => 'creditor',
        'customer' => 'customer',
        'customer_bank_account' => 'customer_bank_account',
        'include' => 'include_',
        'limit' => 'limit',
        'mandate_type' => 'mandate_type',
        'reference' => 'reference',
        'scheme' => 'scheme',
        'status' => 'status',
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
    public ?\GoCardlessSDK\DTOs\Mandates\Get\Query\CreatedAtDTO $created_at;
    public ?string $creditor;
    public ?string $customer;
    public ?string $customer_bank_account;
    public ?string $include_;
    public int|string|null $limit;
    public ?\GoCardlessSDK\Enums\Mandates\Get\Query\MandateTypeEnum $mandate_type;
    public ?string $reference;
    public ?string $scheme;
    public ?string $status;
}
