<?php

declare(strict_types=1);

namespace GoCardlessSDK\GetParams;

final class PayoutItems extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'GoCardlessVersion',
        'payout',
    ];
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'after' => 'after',
            'before' => 'before',
            'include_2020_tax_cutover' => 'include_2020_tax_cutover',
            'limit' => 'limit',
            'payout' => 'payout',
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
    public ?\GoCardlessSDK\Enums\Payout\ItemInclude2020TaxCutover $include_2020_tax_cutover;
    public int|string|null $limit;
    public string $payout;
}
