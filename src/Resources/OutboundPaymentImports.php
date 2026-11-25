<?php

declare(strict_types=1);

namespace GoCardlessSDK\Resources;

final class OutboundPaymentImports extends \GoCardlessSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/outbound_payment_imports',
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
        'responseType' => '\\GoCardlessSDK\\DTOs\\OutboundPayment\\ImportMultiResource\\Response',
        'querySerialization' => [
            'created_at' => 'deepObject',
        ],
    ];

    /**
     * List outbound payment imports
     *
     * Returns a [cursor-paginated](https://docs.gocardless.com/docs/api-reference/data-conventions#cursor-pagination) list of your outbound payment imports.
     */
    public function get(\GoCardlessSDK\GetParams\OutboundPaymentImports $params): \GoCardlessSDK\DTOs\OutboundPayment\ImportMultiResource\Response
    {
        /** @var \GoCardlessSDK\DTOs\OutboundPayment\ImportMultiResource\Response $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/outbound_payment_imports',
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
        'responseType' => '\\GoCardlessSDK\\DTOs\\OutboundPayment\\ImportSingleResource\\Response',
        'requestBody' => [
            'type' => '\\GoCardlessSDK\\Requests\\OutboundPaymentImports\\Post',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Create an outbound payment import
     */
    public function post(\GoCardlessSDK\PostParams\OutboundPaymentImports $params): \GoCardlessSDK\DTOs\OutboundPayment\ImportSingleResource\Response
    {
        /** @var \GoCardlessSDK\DTOs\OutboundPayment\ImportSingleResource\Response $result */
        $result = $this->executeArguments(self::operation(self::POST), parameters: $params);
        return $result;
    }

    private const array GET_BY_OUTBOUND_PAYMENT_IMPORT_ID = [
        'method' => 'GET',
        'path' => '/outbound_payment_imports/{outbound_payment_import_id}',
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
        'responseType' => '\\GoCardlessSDK\\DTOs\\OutboundPayment\\ImportSingleResource\\Response',
    ];

    /**
     * Get an outbound payment import
     *
     * Returns a single outbound payment import.
     */
    public function getByOutboundPaymentImportId(string $outbound_payment_import_id, \GoCardlessSDK\GetParams\OutboundPaymentImports\ByOutboundPaymentImportId $params): \GoCardlessSDK\DTOs\OutboundPayment\ImportSingleResource\Response
    {
        /** @var \GoCardlessSDK\DTOs\OutboundPayment\ImportSingleResource\Response $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_OUTBOUND_PAYMENT_IMPORT_ID), path: ['outbound_payment_import_id' => $outbound_payment_import_id], parameters: $params);
        return $result;
    }
}
