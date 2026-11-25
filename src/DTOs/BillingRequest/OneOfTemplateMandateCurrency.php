<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs\BillingRequest;

final class OneOfTemplateMandateCurrency extends \Dmorenof\SdkRuntime\OneOf
{
    protected const array TYPES = ['string'];
    protected const array BRANCH_SCHEMAS = [
    [
        'kind' => 'reference',
        'ref' => 'billing_request_currency',
    ],
];
    protected const array SCHEMA_DEFINITIONS = [
    'billing_request_currency' => [
        'kind' => 'string',
    ],
];
}
