<?php

declare(strict_types=1);

namespace GoCardlessSDK\PostParams\Payments\ByPaymentId\Actions;

final class Cancel extends \Dmorenof\SdkRuntime\DTO
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

    public const bool OPERATION_BODY = true;

    public string $GoCardlessVersion;
    public ?\GoCardlessSDK\Requests\Payments\ByPaymentId\Actions\Cancel\Post $body;
}
