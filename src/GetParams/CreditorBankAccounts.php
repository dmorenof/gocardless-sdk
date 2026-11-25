<?php

declare(strict_types=1);

namespace GoCardlessSDK\GetParams;

final class CreditorBankAccounts extends \Dmorenof\SdkRuntime\DTO
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
        'enabled' => 'enabled',
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
    public ?\GoCardlessSDK\DTOs\CreditorBankAccounts\Get\Query\CreatedAtDTO $created_at;
    public ?string $creditor;
    public string|bool|null $enabled;
    public int|string|null $limit;
}
