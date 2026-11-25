<?php

declare(strict_types=1);

namespace GoCardlessSDK\Resources;

final class Refunds extends \GoCardlessSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/refunds',
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
        'responseType' => '\\GoCardlessSDK\\DTOs\\Refund\\MultiResource\\Response',
        'querySerialization' => [
            'created_at' => 'deepObject',
        ],
    ];

    /**
     * List refunds
     *
     * Returns a [cursor-paginated](https://docs.gocardless.com/docs/api-reference/data-conventions#cursor-pagination) list of your refunds.
     */
    public function get(\GoCardlessSDK\GetParams\Refunds $params): \GoCardlessSDK\DTOs\Refund\MultiResource\Response
    {
        /** @var \GoCardlessSDK\DTOs\Refund\MultiResource\Response $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/refunds',
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
        'responseType' => '\\GoCardlessSDK\\DTOs\\Refund\\SingleResource\\Response',
        'requestBody' => [
            'type' => '\\GoCardlessSDK\\Requests\\Refunds\\Post',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Create a refund
     *
     * Creates a new refund object.
     *
     * This fails with:<a name="total_amount_confirmation_invalid"></a><a name="number_of_refunds_exceeded"></a><a name="available_refund_amount_insufficient"></a>
     *
     * - `total_amount_confirmation_invalid` if the confirmation amount doesn't match the total amount refunded for the payment. This safeguard is there to prevent two processes from creating refunds without awareness of each other.
     *
     * - `available_refund_amount_insufficient` if the creditor does not have sufficient balance for refunds available to cover the cost of the requested refund.
     *
     *
     * <p class="restricted-notice"><strong>Restricted</strong>: This endpoint is disabled by default. To enable it, you will need to enable refunds on your GoCardless Dashboard.</p>
     *
     * <p class="notice--warning"><strong>Warning</strong>: A payment that has been (partially) refunded can still receive a late failure or chargeback from the customer's bank.<br /><br />
     * A refund can only be created once it is outside the safer refund period (7 calendar days after the charge date) otherwise an error is returned. The safer refund period can be disabled by contacting GoCardless.</p>
     */
    public function post(\GoCardlessSDK\PostParams\Refunds $params): \GoCardlessSDK\DTOs\Refund\SingleResource\Response
    {
        /** @var \GoCardlessSDK\DTOs\Refund\SingleResource\Response $result */
        $result = $this->executeArguments(self::operation(self::POST), parameters: $params);
        return $result;
    }

    private const array GET_BY_REFUND_ID = [
        'method' => 'GET',
        'path' => '/refunds/{refund_id}',
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
        'responseType' => '\\GoCardlessSDK\\DTOs\\Refund\\SingleResource\\Response',
    ];

    /**
     * Get a single refund
     *
     * Retrieves all details for a single refund
     */
    public function getByRefundId(string $refund_id, \GoCardlessSDK\GetParams\Refunds\ByRefundId $params): \GoCardlessSDK\DTOs\Refund\SingleResource\Response
    {
        /** @var \GoCardlessSDK\DTOs\Refund\SingleResource\Response $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_REFUND_ID), path: ['refund_id' => $refund_id], parameters: $params);
        return $result;
    }

    private const array PUT_BY_REFUND_ID = [
        'method' => 'PUT',
        'path' => '/refunds/{refund_id}',
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
        'responseType' => '\\GoCardlessSDK\\DTOs\\Refund\\SingleResource\\Response',
        'requestBody' => [
            'type' => '\\GoCardlessSDK\\Requests\\Refunds\\ByRefundId\\Put',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Update a refund
     *
     * Updates a refund object.
     */
    public function putByRefundId(string $refund_id, \GoCardlessSDK\PutParams\Refunds\ByRefundId $params): \GoCardlessSDK\DTOs\Refund\SingleResource\Response
    {
        /** @var \GoCardlessSDK\DTOs\Refund\SingleResource\Response $result */
        $result = $this->executeArguments(self::operation(self::PUT_BY_REFUND_ID), path: ['refund_id' => $refund_id], parameters: $params);
        return $result;
    }
}
