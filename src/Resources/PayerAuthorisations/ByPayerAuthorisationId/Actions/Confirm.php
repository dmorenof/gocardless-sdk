<?php

declare(strict_types=1);

namespace GoCardlessSDK\Resources\PayerAuthorisations\ByPayerAuthorisationId\Actions;

final class Confirm extends \GoCardlessSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/payer_authorisations/{payer_authorisation_id}/actions/confirm',
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
     * Confirm a Payer Authorisation
     *
     * Confirms the Payer Authorisation, indicating that the resources are ready to be created.
     * A Payer Authorisation cannot be confirmed if it hasn't been submitted yet.
     *
     * <p class="notice">
     *   The main use of the confirm endpoint is to enable integrators to acknowledge the end of the setup process.
     *   They might want to make the payers go through some other steps after they go through our flow or make them go through the necessary verification mechanism (upcoming feature).
     * </p>
     *
     * **Deprecated:** Payer Authorisation is legacy API and cannot be used by new integrators.
     * The [Billing Request](https://docs.gocardless.com/docs/api-reference/billing-request) API should be used for any new integrations.
     *
     * @deprecated
     */
    public function post(string $payer_authorisation_id, \GoCardlessSDK\PostParams\PayerAuthorisations\ByPayerAuthorisationId\Actions\Confirm $params): \GoCardlessSDK\DTOs\PayerAuthorisation\SingleResource\Response
    {
        /** @var \GoCardlessSDK\DTOs\PayerAuthorisation\SingleResource\Response $result */
        $result = $this->executeArguments(self::operation(self::POST), path: ['payer_authorisation_id' => $payer_authorisation_id], parameters: $params);
        return $result;
    }
}
