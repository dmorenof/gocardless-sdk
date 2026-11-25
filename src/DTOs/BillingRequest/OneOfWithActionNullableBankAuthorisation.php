<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs\BillingRequest;

final class OneOfWithActionNullableBankAuthorisation extends \Dmorenof\SdkRuntime\OneOf
{
    protected const array TYPES = [\GoCardlessSDK\DTOs\Bank\Authorisation::class];
    protected const array BRANCH_SCHEMAS = [
        [
            'kind' => 'reference',
            'ref' => 'bank_authorisation',
        ],
    ];
    protected const array SCHEMA_DEFINITIONS = [
        'bank_authorisation' => [
            'kind' => 'object',
            'properties' => [
                'authorisation_type' => [
                    'kind' => 'reference',
                    'ref' => 'bank_authorisation_authorisation_type',
                ],
                'authorised_at' => [
                    'kind' => 'reference',
                    'ref' => 'bank_authorisation_authorised_at',
                ],
                'created_at' => [
                    'kind' => 'reference',
                    'ref' => 'bank_authorisation_created_at',
                ],
                'expires_at' => [
                    'kind' => 'reference',
                    'ref' => 'bank_authorisation_expires_at',
                ],
                'id' => [
                    'kind' => 'reference',
                    'ref' => 'bank_authorisation_id',
                ],
                'last_visited_at' => [
                    'kind' => 'reference',
                    'ref' => 'bank_authorisation_last_visited_at',
                ],
                'links' => [
                    'kind' => 'reference',
                    'ref' => 'bank_authorisation_links',
                ],
                'qr_code_url' => [
                    'kind' => 'reference',
                    'ref' => 'bank_authorisation_qr_code_url',
                ],
                'redirect_uri' => [
                    'kind' => 'reference',
                    'ref' => 'bank_authorisation_redirect_uri',
                ],
                'url' => [
                    'kind' => 'reference',
                    'ref' => 'bank_authorisation_url',
                ],
            ],
            'required' => [
                'id',
            ],
            'additional' => true,
        ],
        'bank_authorisation_authorisation_type' => [
            'kind' => 'string',
            'enum' => [
                'mandate',
                'payment',
            ],
        ],
        'bank_authorisation_authorised_at' => [
            'kind' => 'string',
            'nullable' => true,
        ],
        'bank_authorisation_created_at' => [
            'kind' => 'string',
        ],
        'bank_authorisation_expires_at' => [
            'kind' => 'string',
        ],
        'bank_authorisation_id' => [
            'kind' => 'string',
        ],
        'bank_authorisation_last_visited_at' => [
            'kind' => 'string',
            'nullable' => true,
        ],
        'bank_authorisation_links' => [
            'kind' => 'object',
            'properties' => [
                'billing_request' => [
                    'kind' => 'string',
                ],
                'institution' => [
                    'kind' => 'string',
                ],
            ],
        ],
        'bank_authorisation_qr_code_url' => [
            'kind' => 'string',
            'nullable' => true,
        ],
        'bank_authorisation_redirect_uri' => [
            'kind' => 'string',
        ],
        'bank_authorisation_url' => [
            'kind' => 'string',
            'nullable' => true,
        ],
    ];
}
