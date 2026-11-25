<?php

declare(strict_types=1);

namespace GoCardlessSDK\Resources;

final class BillingRequestTemplates extends \GoCardlessSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/billing_request_templates',
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
        'responseType' => '\\GoCardlessSDK\\DTOs\\BillingRequest\\TemplateMultiResource\\Response',
    ];

    /**
     * List Billing Request Templates
     *
     * Returns a [cursor-paginated](https://docs.gocardless.com/docs/api-reference/data-conventions#cursor-pagination) list of your Billing Request Templates.
     */
    public function get(\GoCardlessSDK\GetParams\BillingRequestTemplates $params): \GoCardlessSDK\DTOs\BillingRequest\TemplateMultiResource\Response
    {
        /** @var \GoCardlessSDK\DTOs\BillingRequest\TemplateMultiResource\Response $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/billing_request_templates',
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
        'responseType' => '\\GoCardlessSDK\\DTOs\\BillingRequest\\TemplateSingleResource\\Response',
        'requestBody' => [
            'type' => '\\GoCardlessSDK\\Requests\\BillingRequestTemplates\\Post',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Create a Billing Request Template
     */
    public function post(\GoCardlessSDK\PostParams\BillingRequestTemplates $params): \GoCardlessSDK\DTOs\BillingRequest\TemplateSingleResource\Response
    {
        /** @var \GoCardlessSDK\DTOs\BillingRequest\TemplateSingleResource\Response $result */
        $result = $this->executeArguments(self::operation(self::POST), parameters: $params);
        return $result;
    }

    private const array GET_BY_BILLING_REQUEST_TEMPLATE_ID = [
        'method' => 'GET',
        'path' => '/billing_request_templates/{billing_request_template_id}',
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
        'responseType' => '\\GoCardlessSDK\\DTOs\\BillingRequest\\TemplateSingleResource\\Response',
    ];

    /**
     * Get a single Billing Request Template
     *
     * Fetches a Billing Request Template
     */
    public function getByBillingRequestTemplateId(string $billing_request_template_id, \GoCardlessSDK\GetParams\BillingRequestTemplates\ByBillingRequestTemplateId $params): \GoCardlessSDK\DTOs\BillingRequest\TemplateSingleResource\Response
    {
        /** @var \GoCardlessSDK\DTOs\BillingRequest\TemplateSingleResource\Response $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_BILLING_REQUEST_TEMPLATE_ID), path: ['billing_request_template_id' => $billing_request_template_id], parameters: $params);
        return $result;
    }

    private const array PUT_BY_BILLING_REQUEST_TEMPLATE_ID = [
        'method' => 'PUT',
        'path' => '/billing_request_templates/{billing_request_template_id}',
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
        'responseType' => '\\GoCardlessSDK\\DTOs\\BillingRequest\\TemplateSingleResource\\Response',
        'requestBody' => [
            'type' => '\\GoCardlessSDK\\Requests\\BillingRequestTemplates\\ByBillingRequestTemplateId\\Put',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Update a Billing Request Template
     *
     * Updates a Billing Request Template, which will affect all future Billing Requests created by this template.
     */
    public function putByBillingRequestTemplateId(string $billing_request_template_id, \GoCardlessSDK\PutParams\BillingRequestTemplates\ByBillingRequestTemplateId $params): \GoCardlessSDK\DTOs\BillingRequest\TemplateSingleResource\Response
    {
        /** @var \GoCardlessSDK\DTOs\BillingRequest\TemplateSingleResource\Response $result */
        $result = $this->executeArguments(self::operation(self::PUT_BY_BILLING_REQUEST_TEMPLATE_ID), path: ['billing_request_template_id' => $billing_request_template_id], parameters: $params);
        return $result;
    }
}
