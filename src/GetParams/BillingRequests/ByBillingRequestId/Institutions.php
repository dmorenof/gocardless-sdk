<?php

declare(strict_types=1);

namespace GoCardlessSDK\GetParams\BillingRequests\ByBillingRequestId;

final class Institutions extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'GoCardlessVersion',
        'country_code',
    ];
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'country_code' => 'country_code',
            'ids' => 'ids',
            'include_disabled' => 'include_disabled',
            'search' => 'search',
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
    public string $country_code;
    public ?string $ids;
    public ?\GoCardlessSDK\Enums\Institution\IncludeDisabled $include_disabled;
    public ?string $search;
}
