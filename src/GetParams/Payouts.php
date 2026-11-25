<?php

declare(strict_types=1);

namespace GoCardlessSDK\GetParams;

final class Payouts extends \Dmorenof\SdkRuntime\DTO
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
        'creditor_bank_account' => 'creditor_bank_account',
        'currency' => 'currency',
        'limit' => 'limit',
        'metadata' => 'metadata',
        'payout_type' => 'payout_type',
        'reference' => 'reference',
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
    public ?\GoCardlessSDK\DTOs\Payouts\Get\Query\CreatedAtDTO $created_at;
    public ?string $creditor;
    public ?string $creditor_bank_account;
    public ?\GoCardlessSDK\Enums\Payout\Currency $currency;
    public int|string|null $limit;
    public ?\GoCardlessSDK\DTOs\Payouts\Get\Query\QueryMetadataMap $metadata;
    public ?\GoCardlessSDK\Enums\Payout\PayoutType $payout_type;
    public ?string $reference;
    public ?\GoCardlessSDK\Enums\Payout\Status $status;
}
