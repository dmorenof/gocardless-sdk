<?php

declare(strict_types=1);

namespace GoCardlessSDK\GetParams;

final class MandateImportEntries extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'GoCardlessVersion',
        'mandate_import',
    ];
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'after' => 'after',
            'before' => 'before',
            'limit' => 'limit',
            'mandate_import' => 'mandate_import',
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
    public int|string|null $limit;
    public string $mandate_import;
    public ?\GoCardlessSDK\Enums\Mandate\ImportEntryStatus $status;
}
