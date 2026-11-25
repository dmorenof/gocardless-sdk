<?php

declare(strict_types=1);

namespace GoCardlessSDK\Resources;

final class Payments extends \GoCardlessSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/payments',
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
        'responseType' => '\\GoCardlessSDK\\DTOs\\Payment\\MultiResource\\Response',
        'querySerialization' => [
            'charge_date' => 'deepObject',
            'created_at' => 'deepObject',
        ],
    ];

    /**
     * List payments
     *
     * Returns a [cursor-paginated](https://docs.gocardless.com/docs/api-reference/data-conventions#cursor-pagination) list of your payments.
     */
    public function get(\GoCardlessSDK\GetParams\Payments $params): \GoCardlessSDK\DTOs\Payment\MultiResource\Response
    {
        /** @var \GoCardlessSDK\DTOs\Payment\MultiResource\Response $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/payments',
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
        'responseType' => '\\GoCardlessSDK\\DTOs\\Payment\\SingleResource\\Response',
        'requestBody' => [
            'type' => '\\GoCardlessSDK\\Requests\\Payments\\Post',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Create a payment
     *
     * <a name="mandate_is_inactive"></a>Creates a new payment object.
     *
     * This fails with a `mandate_is_inactive` error if the linked [mandate](https://docs.gocardless.com/docs/api-reference/mandate) is cancelled or has failed. Payments can be created against mandates with status of: `pending_customer_approval`, `pending_submission`, `submitted`, and `active`.
     *
     * <p class="notice--warning"><strong>Warning</strong>: in Bacs, you have the option to provide a payment reference up to 10 characters in length. However, if you are providing custom mandate references (which can only be enabled by contacting support), the combined length of the two references separated by a dash character must not exceed 18 characters. Payment references may be up to 140 characters for SEPA, 11 for Autogiro and 30 for Betalingsservice, irrespective of the mandate reference.</p>
     */
    public function post(\GoCardlessSDK\PostParams\Payments $params): \GoCardlessSDK\DTOs\Payment\SingleResource\Response
    {
        /** @var \GoCardlessSDK\DTOs\Payment\SingleResource\Response $result */
        $result = $this->executeArguments(self::operation(self::POST), parameters: $params);
        return $result;
    }

    private const array GET_BY_PAYMENT_ID = [
        'method' => 'GET',
        'path' => '/payments/{payment_id}',
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
        'responseType' => '\\GoCardlessSDK\\DTOs\\Payment\\SingleResource\\Response',
    ];

    /**
     * Get a single payment
     *
     * Retrieves the details of a single existing payment.
     */
    public function getByPaymentId(string $payment_id, \GoCardlessSDK\GetParams\Payments\ByPaymentId $params): \GoCardlessSDK\DTOs\Payment\SingleResource\Response
    {
        /** @var \GoCardlessSDK\DTOs\Payment\SingleResource\Response $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_PAYMENT_ID), path: ['payment_id' => $payment_id], parameters: $params);
        return $result;
    }

    private const array PUT_BY_PAYMENT_ID = [
        'method' => 'PUT',
        'path' => '/payments/{payment_id}',
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
        'responseType' => '\\GoCardlessSDK\\DTOs\\Payment\\SingleResource\\Response',
        'requestBody' => [
            'type' => '\\GoCardlessSDK\\Requests\\Payments\\ByPaymentId\\Put',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Update a payment
     *
     * Updates a payment object. This accepts only the metadata parameter.
     */
    public function putByPaymentId(string $payment_id, \GoCardlessSDK\PutParams\Payments\ByPaymentId $params): \GoCardlessSDK\DTOs\Payment\SingleResource\Response
    {
        /** @var \GoCardlessSDK\DTOs\Payment\SingleResource\Response $result */
        $result = $this->executeArguments(self::operation(self::PUT_BY_PAYMENT_ID), path: ['payment_id' => $payment_id], parameters: $params);
        return $result;
    }
}
