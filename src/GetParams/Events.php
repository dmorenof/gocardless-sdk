<?php

declare(strict_types=1);

namespace GoCardlessSDK\GetParams;

final class Events extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'GoCardlessVersion',
];
    public const array OPERATION_FIELDS = [
    'path' => [],
    'query' => [
        'action' => 'action',
        'after' => 'after',
        'before' => 'before',
        'billing_request' => 'billing_request',
        'created_at' => 'created_at',
        'creditor' => 'creditor',
        'export' => 'export',
        'include' => 'include_',
        'instalment_schedule' => 'instalment_schedule',
        'limit' => 'limit',
        'mandate' => 'mandate',
        'outbound_payment' => 'outbound_payment',
        'parent_event' => 'parent_event',
        'payer_authorisation' => 'payer_authorisation',
        'payment' => 'payment',
        'payment_account_transaction' => 'payment_account_transaction',
        'payout' => 'payout',
        'refund' => 'refund',
        'resource_type' => 'resource_type',
        'scheme_identifier' => 'scheme_identifier',
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
    public ?string $action;
    public ?string $after;
    public ?string $before;
    public ?string $billing_request;
    public ?\GoCardlessSDK\DTOs\Events\Get\Query\CreatedAtDTO $created_at;
    public ?string $creditor;
    public ?string $export;
    public ?\GoCardlessSDK\Enums\Event\IncludeResourceType $include_;
    public ?string $instalment_schedule;
    public int|string|null $limit;
    public ?string $mandate;
    public ?string $outbound_payment;
    public ?string $parent_event;
    public ?string $payer_authorisation;
    public ?string $payment;
    public ?string $payment_account_transaction;
    public ?string $payout;
    public ?string $refund;
    public ?\GoCardlessSDK\Enums\Event\ResourceType $resource_type;
    public ?string $scheme_identifier;
    public ?string $subscription;
}
