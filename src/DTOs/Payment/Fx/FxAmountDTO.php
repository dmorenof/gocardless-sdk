<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs\Payment\Fx;

final class FxAmountDTO extends \Dmorenof\SdkRuntime\OneOf
{
    protected const array TYPES = ['string', 'int'];
    protected const array BRANCH_SCHEMAS = [
        [
            'kind' => 'string',
            'nullable' => true,
        ],
        [
            'kind' => 'integer',
        ],
    ];
    protected const array SCHEMA_DEFINITIONS = [];
}
