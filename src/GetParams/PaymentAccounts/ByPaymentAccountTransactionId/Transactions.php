<?php

declare(strict_types=1);

namespace GoCardlessSDK\GetParams\PaymentAccounts\ByPaymentAccountTransactionId;

final class Transactions extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'GoCardlessVersion',
        'value_date_from',
        'value_date_to',
    ];
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'after' => 'after',
            'before' => 'before',
            'direction' => 'direction',
            'limit' => 'limit',
            'value_date_from' => 'value_date_from',
            'value_date_to' => 'value_date_to',
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
    public ?\GoCardlessSDK\Enums\Payment\AccountTransactionDirection $direction;
    public int|string|null $limit;
    public string $value_date_from;
    public string $value_date_to;
}
