<?php

declare(strict_types=1);

namespace GoCardlessSDK\Resources\PayerAuthorisations\ByPayerAuthorisationId\Actions;

final class Submit extends \GoCardlessSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/payer_authorisations/{payer_authorisation_id}/actions/submit',
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
     * Submit a Payer Authorisation
     *
     * Submits all the data previously pushed to this PayerAuthorisation for verification. This time, a 200 HTTP status is returned if the resource is valid and a 422 error response in case of validation errors. After it is successfully submitted, the Payer Authorisation can no longer be edited.
     *
     * **Deprecated:** Payer Authorisation is legacy API and cannot be used by new integrators.
     * The [Billing Request](https://docs.gocardless.com/docs/api-reference/billing-request) API should be used for any new integrations.
     *
     * @deprecated
     */
    public function post(string $payer_authorisation_id, \GoCardlessSDK\PostParams\PayerAuthorisations\ByPayerAuthorisationId\Actions\Submit $params): \GoCardlessSDK\DTOs\PayerAuthorisation\SingleResource\Response
    {
        /** @var \GoCardlessSDK\DTOs\PayerAuthorisation\SingleResource\Response $result */
        $result = $this->executeArguments(self::operation(self::POST), path: ['payer_authorisation_id' => $payer_authorisation_id], parameters: $params);
        return $result;
    }

}
