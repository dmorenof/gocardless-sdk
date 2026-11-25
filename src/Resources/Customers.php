<?php

declare(strict_types=1);

namespace GoCardlessSDK\Resources;

final class Customers extends \GoCardlessSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/customers',
        'security' => [
            [
                'bearerAuth' => [],
            ],
        ],
        'errors' => [
            400 => '\\GoCardlessSDK\\Responses\\Errors\\Status400Response',
            401 => '\\GoCardlessSDK\\Responses\\Errors\\Status401Response',
            404 => '\\GoCardlessSDK\\Responses\\Errors\\Status404Response',
            422 => '\\GoCardlessSDK\\Responses\\Errors\\Status422Response',
            500 => '\\GoCardlessSDK\\Responses\\Errors\\Status500Response',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\GoCardlessSDK\\Responses\\Errors\\Status400Response',
                'schemaNullable' => false,
            ],
            401 => [
                'type' => '\\GoCardlessSDK\\Responses\\Errors\\Status401Response',
                'schemaNullable' => false,
            ],
            404 => [
                'type' => '\\GoCardlessSDK\\Responses\\Errors\\Status404Response',
                'schemaNullable' => false,
            ],
            422 => [
                'type' => '\\GoCardlessSDK\\Responses\\Errors\\Status422Response',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\GoCardlessSDK\\Responses\\Errors\\Status500Response',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\GoCardlessSDK\\DTOs\\Customer\\MultiResource\\Response',
        'querySerialization' => [
            'created_at' => 'deepObject',
        ],
    ];

    /**
     * List customers
     *
     * Returns a [cursor-paginated](https://docs.gocardless.com/docs/api-reference/data-conventions#cursor-pagination) list of your customers.
     */
    public function get(\GoCardlessSDK\GetParams\Customers $params): \GoCardlessSDK\DTOs\Customer\MultiResource\Response
    {
        /** @var \GoCardlessSDK\DTOs\Customer\MultiResource\Response $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/customers',
        'security' => [
            [
                'bearerAuth' => [],
            ],
        ],
        'success' => [
            201,
        ],
        'errors' => [
            400 => '\\GoCardlessSDK\\Responses\\Errors\\Status400Response',
            401 => '\\GoCardlessSDK\\Responses\\Errors\\Status401Response',
            404 => '\\GoCardlessSDK\\Responses\\Errors\\Status404Response',
            422 => '\\GoCardlessSDK\\Responses\\Errors\\Status422Response',
            500 => '\\GoCardlessSDK\\Responses\\Errors\\Status500Response',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\GoCardlessSDK\\Responses\\Errors\\Status400Response',
                'schemaNullable' => false,
            ],
            401 => [
                'type' => '\\GoCardlessSDK\\Responses\\Errors\\Status401Response',
                'schemaNullable' => false,
            ],
            404 => [
                'type' => '\\GoCardlessSDK\\Responses\\Errors\\Status404Response',
                'schemaNullable' => false,
            ],
            422 => [
                'type' => '\\GoCardlessSDK\\Responses\\Errors\\Status422Response',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\GoCardlessSDK\\Responses\\Errors\\Status500Response',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\GoCardlessSDK\\DTOs\\Customer\\SingleResource\\Response',
        'requestBody' => [
            'type' => '\\GoCardlessSDK\\Requests\\Customers\\Post',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Create a customer
     *
     * Creates a new customer object.
     *
     * <p class="restricted-notice"><strong>Restricted</strong>: this endpoint is [restricted](https://docs.gocardless.com/docs/api-reference/restrictions) to [GoCardless Pro](https://gocardless.com/pricing) and [GoCardless Enterprise](https://gocardless.com/pricing) accounts with approved payment pages.</p>
     *
     * <p class="notice--warning"><strong>Warning</strong>: this endpoint is a legacy API endpoint and does not support GoCardless' newest features. We recommend using the [Billing Requests API](https://docs.gocardless.com/docs/collect-payments/setting-up-mandates) instead.</p>
     */
    public function post(\GoCardlessSDK\PostParams\Customers $params): \GoCardlessSDK\DTOs\Customer\SingleResource\Response
    {
        /** @var \GoCardlessSDK\DTOs\Customer\SingleResource\Response $result */
        $result = $this->executeArguments(self::operation(self::POST), parameters: $params);
        return $result;
    }

    private const array DELETE_BY_CUSTOMER_ID = [
        'method' => 'DELETE',
        'path' => '/customers/{customer_id}',
        'security' => [
            [
                'bearerAuth' => [],
            ],
        ],
        'success' => [
            204,
        ],
        'errors' => [
            400 => '\\GoCardlessSDK\\Responses\\Errors\\Status400Response',
            401 => '\\GoCardlessSDK\\Responses\\Errors\\Status401Response',
            404 => '\\GoCardlessSDK\\Responses\\Errors\\Status404Response',
            422 => '\\GoCardlessSDK\\Responses\\Errors\\Status422Response',
            500 => '\\GoCardlessSDK\\Responses\\Errors\\Status500Response',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\GoCardlessSDK\\Responses\\Errors\\Status400Response',
                'schemaNullable' => false,
            ],
            401 => [
                'type' => '\\GoCardlessSDK\\Responses\\Errors\\Status401Response',
                'schemaNullable' => false,
            ],
            404 => [
                'type' => '\\GoCardlessSDK\\Responses\\Errors\\Status404Response',
                'schemaNullable' => false,
            ],
            422 => [
                'type' => '\\GoCardlessSDK\\Responses\\Errors\\Status422Response',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\GoCardlessSDK\\Responses\\Errors\\Status500Response',
                'schemaNullable' => false,
            ],
        ],
        'requestBody' => [
            'type' => '\\GoCardlessSDK\\Requests\\Customers\\ByCustomerId\\Delete',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Remove a customer
     *
     * Removed customers will not appear in search results or lists of customers (in our API
     * or exports), and it will not be possible to load an individually removed customer by
     * ID.
     *
     * <p class="restricted-notice"><strong>The action of removing a customer cannot be reversed, so please use with care.</strong></p>
     */
    public function deleteByCustomerId(string $customer_id, \GoCardlessSDK\DeleteParams\Customers\ByCustomerId $params): void
    {
        $this->executeArguments(self::operation(self::DELETE_BY_CUSTOMER_ID), path: ['customer_id' => $customer_id], parameters: $params);
        return;
    }

    private const array GET_BY_CUSTOMER_ID = [
        'method' => 'GET',
        'path' => '/customers/{customer_id}',
        'security' => [
            [
                'bearerAuth' => [],
            ],
        ],
        'errors' => [
            400 => '\\GoCardlessSDK\\Responses\\Errors\\Status400Response',
            401 => '\\GoCardlessSDK\\Responses\\Errors\\Status401Response',
            404 => '\\GoCardlessSDK\\Responses\\Errors\\Status404Response',
            422 => '\\GoCardlessSDK\\Responses\\Errors\\Status422Response',
            500 => '\\GoCardlessSDK\\Responses\\Errors\\Status500Response',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\GoCardlessSDK\\Responses\\Errors\\Status400Response',
                'schemaNullable' => false,
            ],
            401 => [
                'type' => '\\GoCardlessSDK\\Responses\\Errors\\Status401Response',
                'schemaNullable' => false,
            ],
            404 => [
                'type' => '\\GoCardlessSDK\\Responses\\Errors\\Status404Response',
                'schemaNullable' => false,
            ],
            422 => [
                'type' => '\\GoCardlessSDK\\Responses\\Errors\\Status422Response',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\GoCardlessSDK\\Responses\\Errors\\Status500Response',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\GoCardlessSDK\\DTOs\\Customer\\SingleResource\\Response',
    ];

    /**
     * Get a single customer
     *
     * Retrieves the details of an existing customer.
     */
    public function getByCustomerId(string $customer_id, \GoCardlessSDK\GetParams\Customers\ByCustomerId $params): \GoCardlessSDK\DTOs\Customer\SingleResource\Response
    {
        /** @var \GoCardlessSDK\DTOs\Customer\SingleResource\Response $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_CUSTOMER_ID), path: ['customer_id' => $customer_id], parameters: $params);
        return $result;
    }

    private const array PUT_BY_CUSTOMER_ID = [
        'method' => 'PUT',
        'path' => '/customers/{customer_id}',
        'security' => [
            [
                'bearerAuth' => [],
            ],
        ],
        'errors' => [
            400 => '\\GoCardlessSDK\\Responses\\Errors\\Status400Response',
            401 => '\\GoCardlessSDK\\Responses\\Errors\\Status401Response',
            404 => '\\GoCardlessSDK\\Responses\\Errors\\Status404Response',
            422 => '\\GoCardlessSDK\\Responses\\Errors\\Status422Response',
            500 => '\\GoCardlessSDK\\Responses\\Errors\\Status500Response',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\GoCardlessSDK\\Responses\\Errors\\Status400Response',
                'schemaNullable' => false,
            ],
            401 => [
                'type' => '\\GoCardlessSDK\\Responses\\Errors\\Status401Response',
                'schemaNullable' => false,
            ],
            404 => [
                'type' => '\\GoCardlessSDK\\Responses\\Errors\\Status404Response',
                'schemaNullable' => false,
            ],
            422 => [
                'type' => '\\GoCardlessSDK\\Responses\\Errors\\Status422Response',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\GoCardlessSDK\\Responses\\Errors\\Status500Response',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\GoCardlessSDK\\DTOs\\Customer\\SingleResource\\Response',
        'requestBody' => [
            'type' => '\\GoCardlessSDK\\Requests\\Customers\\ByCustomerId\\Put',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Update a customer
     *
     * Updates a customer object. Supports all of the fields supported when creating a customer.
     */
    public function putByCustomerId(string $customer_id, \GoCardlessSDK\PutParams\Customers\ByCustomerId $params): \GoCardlessSDK\DTOs\Customer\SingleResource\Response
    {
        /** @var \GoCardlessSDK\DTOs\Customer\SingleResource\Response $result */
        $result = $this->executeArguments(self::operation(self::PUT_BY_CUSTOMER_ID), path: ['customer_id' => $customer_id], parameters: $params);
        return $result;
    }
}
