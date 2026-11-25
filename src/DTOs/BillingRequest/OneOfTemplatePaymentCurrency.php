<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs\BillingRequest;

final class OneOfTemplatePaymentCurrency extends \Dmorenof\SdkRuntime\OneOf
{
    protected const array TYPES = ['string'];
    protected const array BRANCH_SCHEMAS = [
        [
            'kind' => 'reference',
            'ref' => 'billing_request_payment_currency',
        ],
    ];
    protected const array SCHEMA_DEFINITIONS = [
        'billing_request_payment_currency' => [
            'kind' => 'string',
        ],
    ];
}
