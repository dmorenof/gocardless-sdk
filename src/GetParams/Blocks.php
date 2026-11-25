<?php

declare(strict_types=1);

namespace GoCardlessSDK\GetParams;

final class Blocks extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'GoCardlessVersion',
    ];
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'after' => 'after',
            'before' => 'before',
            'block_type' => 'block_type',
            'created_at' => 'created_at',
            'limit' => 'limit',
            'reason_type' => 'reason_type',
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
    public ?\GoCardlessSDK\Enums\Block\BlockType $block_type;
    public ?\GoCardlessSDK\DTOs\Blocks\Get\Query\CreatedAtDTO $created_at;
    public int|string|null $limit;
    public ?\GoCardlessSDK\Enums\Block\ReasonType $reason_type;
}
