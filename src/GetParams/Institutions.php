<?php

declare(strict_types=1);

namespace GoCardlessSDK\GetParams;

final class Institutions extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'GoCardlessVersion',
];
    public const array OPERATION_FIELDS = [
    'path' => [],
    'query' => [
        'branch_code' => 'branch_code',
        'country_code' => 'country_code',
        'feature' => 'feature',
        'include_disabled' => 'include_disabled',
        'scheme' => 'scheme',
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
    public ?string $branch_code;
    public ?string $country_code;
    public ?string $feature;
    public ?\GoCardlessSDK\Enums\Institution\IncludeDisabled $include_disabled;
    public ?string $scheme;
}
