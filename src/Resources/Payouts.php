<?php

declare(strict_types=1);

namespace GoCardlessSDK\Resources;

final class Payouts extends \GoCardlessSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/payouts',
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
        'responseType' => '\\GoCardlessSDK\\DTOs\\Payout\\MultiResource\\Response',
        'querySerialization' => [
            'created_at' => 'deepObject',
            'metadata' => 'deepObject',
        ],
    ];

    /**
     * List payouts
     *
     * Returns a [cursor-paginated](https://docs.gocardless.com/docs/api-reference/data-conventions#cursor-pagination) list of your payouts.
     */
    public function get(\GoCardlessSDK\GetParams\Payouts $params): \GoCardlessSDK\DTOs\Payout\MultiResource\Response
    {
        /** @var \GoCardlessSDK\DTOs\Payout\MultiResource\Response $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array GET_BY_PAYOUT_ID = [
        'method' => 'GET',
        'path' => '/payouts/{payout_id}',
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
        'responseType' => '\\GoCardlessSDK\\DTOs\\Payout\\SingleResource\\Response',
    ];

    /**
     * Get a single payout
     *
     * Retrieves the details of a single payout. For an example of how to reconcile the transactions in a payout, see [this guide](https://docs.gocardless.com/docs/collect-payments/managing-payments/reconciling-payouts).
     */
    public function getByPayoutId(string $payout_id, \GoCardlessSDK\GetParams\Payouts\ByPayoutId $params): \GoCardlessSDK\DTOs\Payout\SingleResource\Response
    {
        /** @var \GoCardlessSDK\DTOs\Payout\SingleResource\Response $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_PAYOUT_ID), path: ['payout_id' => $payout_id], parameters: $params);
        return $result;
    }

    private const array PUT_BY_PAYOUT_ID = [
        'method' => 'PUT',
        'path' => '/payouts/{payout_id}',
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
        'responseType' => '\\GoCardlessSDK\\DTOs\\Payout\\SingleResource\\Response',
        'requestBody' => [
            'type' => '\\GoCardlessSDK\\Requests\\Payouts\\ByPayoutId\\Put',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Update a payout
     *
     * Updates a payout object. This accepts only the metadata parameter.
     */
    public function putByPayoutId(string $payout_id, \GoCardlessSDK\PutParams\Payouts\ByPayoutId $params): \GoCardlessSDK\DTOs\Payout\SingleResource\Response
    {
        /** @var \GoCardlessSDK\DTOs\Payout\SingleResource\Response $result */
        $result = $this->executeArguments(self::operation(self::PUT_BY_PAYOUT_ID), path: ['payout_id' => $payout_id], parameters: $params);
        return $result;
    }
}
