<?php

declare(strict_types=1);

namespace GoCardlessSDK\Resources;

final class PayerAuthorisations extends \GoCardlessSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/payer_authorisations',
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
        'responseType' => '\\GoCardlessSDK\\DTOs\\PayerAuthorisation\\SingleResource\\Response',
        'requestBody' => [
            'type' => '\\GoCardlessSDK\\Requests\\PayerAuthorisations\\Post',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Create a Payer Authorisation
     *
     * Creates a Payer Authorisation. The resource is saved to the database even if incomplete. An empty array of incomplete_fields means that the resource is valid. The ID of the resource is used for the other actions. This endpoint has been designed this way so you do not need to save any payer data on your servers or the browser while still being able to implement a progressive solution, such as a multi-step form.
     *
     * **Deprecated:** Payer Authorisation is legacy API and cannot be used by new integrators.
     * The [Billing Request](https://docs.gocardless.com/docs/api-reference/billing-request) API should be used for any new integrations.
     *
     * @deprecated
     */
    public function post(\GoCardlessSDK\PostParams\PayerAuthorisations $params): \GoCardlessSDK\DTOs\PayerAuthorisation\SingleResource\Response
    {
        /** @var \GoCardlessSDK\DTOs\PayerAuthorisation\SingleResource\Response $result */
        $result = $this->executeArguments(self::operation(self::POST), parameters: $params);
        return $result;
    }

    private const array GET_BY_PAYER_AUTHORISATION_ID = [
        'method' => 'GET',
        'path' => '/payer_authorisations/{payer_authorisation_id}',
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
        'responseType' => '\\GoCardlessSDK\\DTOs\\PayerAuthorisation\\SingleResource\\Response',
    ];

    /**
     * Get a single Payer Authorisation
     *
     * Retrieves the details of a single existing Payer Authorisation. It can be used for polling the status of a Payer Authorisation.
     *
     * **Deprecated:** Payer Authorisation is legacy API and cannot be used by new integrators.
     * The [Billing Request](https://docs.gocardless.com/docs/api-reference/billing-request) API should be used for any new integrations.
     *
     * @deprecated
     */
    public function getByPayerAuthorisationId(string $payer_authorisation_id, \GoCardlessSDK\GetParams\PayerAuthorisations\ByPayerAuthorisationId $params): \GoCardlessSDK\DTOs\PayerAuthorisation\SingleResource\Response
    {
        /** @var \GoCardlessSDK\DTOs\PayerAuthorisation\SingleResource\Response $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_PAYER_AUTHORISATION_ID), path: ['payer_authorisation_id' => $payer_authorisation_id], parameters: $params);
        return $result;
    }

    private const array PUT_BY_PAYER_AUTHORISATION_ID = [
        'method' => 'PUT',
        'path' => '/payer_authorisations/{payer_authorisation_id}',
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
        'responseType' => '\\GoCardlessSDK\\DTOs\\PayerAuthorisation\\SingleResource\\Response',
        'requestBody' => [
            'type' => '\\GoCardlessSDK\\Requests\\PayerAuthorisations\\ByPayerAuthorisationId\\Put',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Update a Payer Authorisation
     *
     * Updates a Payer Authorisation. Updates the Payer Authorisation with the request data. Can be invoked as many times as needed. Only fields present in the request will be modified. An empty array of incomplete_fields means that the resource is valid. This endpoint has been designed this way so you do not need to save any payer data on your servers or the browser while still being able to implement a progressive solution, such a multi-step form. <p class="notice"> Note that in order to update the `metadata` attribute values it must be sent completely as it overrides the previously existing values. </p>
     *
     * **Deprecated:** Payer Authorisation is legacy API and cannot be used by new integrators.
     * The [Billing Request](https://docs.gocardless.com/docs/api-reference/billing-request) API should be used for any new integrations.
     *
     * @deprecated
     */
    public function putByPayerAuthorisationId(string $payer_authorisation_id, \GoCardlessSDK\PutParams\PayerAuthorisations\ByPayerAuthorisationId $params): \GoCardlessSDK\DTOs\PayerAuthorisation\SingleResource\Response
    {
        /** @var \GoCardlessSDK\DTOs\PayerAuthorisation\SingleResource\Response $result */
        $result = $this->executeArguments(self::operation(self::PUT_BY_PAYER_AUTHORISATION_ID), path: ['payer_authorisation_id' => $payer_authorisation_id], parameters: $params);
        return $result;
    }
}
