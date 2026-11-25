<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs\BillingRequest;

final class OneOfTemplateMandateRequestVerify extends \Dmorenof\SdkRuntime\OneOf
{
    protected const array TYPES = [\GoCardlessSDK\Enums\BillingRequest\MandateRequestVerify::class];
    protected const array BRANCH_SCHEMAS = [
        [
            'kind' => 'reference',
            'ref' => 'billing_request_mandate_request_verify',
        ],
    ];
    protected const array SCHEMA_DEFINITIONS = [
        'billing_request_mandate_request_verify' => [
            'kind' => 'string',
            'enum' => [
                'always',
                'minimum',
                'recommended',
                'when_available',
            ],
        ],
    ];
}
