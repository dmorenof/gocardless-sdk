<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs\BillingRequest;

final class AnyOfAmountStringable extends \Dmorenof\SdkRuntime\AnyOf
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
