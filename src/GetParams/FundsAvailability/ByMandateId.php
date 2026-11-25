<?php

declare(strict_types=1);

namespace GoCardlessSDK\GetParams\FundsAvailability;

final class ByMandateId extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'GoCardlessVersion',
];
    public const array OPERATION_FIELDS = [
    'path' => [],
    'query' => [
        'amount' => 'amount',
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
    public ?string $amount;
}
