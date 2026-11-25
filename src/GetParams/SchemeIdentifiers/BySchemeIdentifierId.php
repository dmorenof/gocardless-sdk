<?php

declare(strict_types=1);

namespace GoCardlessSDK\GetParams\SchemeIdentifiers;

final class BySchemeIdentifierId extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'GoCardlessVersion',
    ];
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [],
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
}
