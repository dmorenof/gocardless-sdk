<?php

declare(strict_types=1);

namespace GoCardlessSDK\GetParams;

final class Customers extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'GoCardlessVersion',
    ];
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'action_required' => 'action_required',
            'after' => 'after',
            'before' => 'before',
            'created_at' => 'created_at',
            'currency' => 'currency',
            'limit' => 'limit',
            'sort_direction' => 'sort_direction',
            'sort_field' => 'sort_field',
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
    public ?\GoCardlessSDK\Enums\Customers\Get\Query\ActionRequiredEnum $action_required;
    public ?string $after;
    public ?string $before;
    public ?\GoCardlessSDK\DTOs\Customers\Get\Query\CreatedAtDTO $created_at;
    public ?\GoCardlessSDK\Enums\Customer\Currency $currency;
    public int|string|null $limit;
    public ?\GoCardlessSDK\Enums\Customer\SortDirection $sort_direction;
    public ?\GoCardlessSDK\Enums\Customer\SortField $sort_field;
}
