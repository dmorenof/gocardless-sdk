<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs\Refund;

final class AnyOfTotalAmountConfirmation extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = ['string', 'int'];
    protected const array BRANCH_SCHEMAS = [
        [
            'kind' => 'string',
        ],
        [
            'kind' => 'integer',
        ],
    ];
    protected const array SCHEMA_DEFINITIONS = [];
}
