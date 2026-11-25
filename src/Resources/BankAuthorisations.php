<?php

declare(strict_types=1);

namespace GoCardlessSDK\Resources;

final class BankAuthorisations extends \GoCardlessSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/bank_authorisations',
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
        'responseType' => '\\GoCardlessSDK\\DTOs\\Bank\\AuthorisationSingleResource\\Response',
        'requestBody' => [
            'type' => '\\GoCardlessSDK\\Requests\\BankAuthorisations\\Post',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Create a Bank Authorisation
     *
     * Create a Bank Authorisation.
     *
     * <p class="restricted-notice"><strong>Restricted</strong>: this endpoint is restricted as the authorisation must be used within a
     * checkout flow that meets regulatory requirements for each payment
     * scheme. Integrators should use a Billing Request Flow to do this.<br /><br />
     * If you would like to enable bank authorisations, you will need to go through a separate compliance process.
     * For more details please <a href="mailto:help&#64;gocardless.com">get in touch</a>.</p>
     */
    public function post(\GoCardlessSDK\PostParams\BankAuthorisations $params): \GoCardlessSDK\DTOs\Bank\AuthorisationSingleResource\Response
    {
        /** @var \GoCardlessSDK\DTOs\Bank\AuthorisationSingleResource\Response $result */
        $result = $this->executeArguments(self::operation(self::POST), parameters: $params);
        return $result;
    }

    private const array GET_BY_BANK_AUTHORISATION_ID = [
        'method' => 'GET',
        'path' => '/bank_authorisations/{bank_authorisation_id}',
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
        'responseType' => '\\GoCardlessSDK\\DTOs\\Bank\\AuthorisationSingleResource\\Response',
    ];

    /**
     * Get a Bank Authorisation
     *
     * Get a single bank authorisation.
     */
    public function getByBankAuthorisationId(string $bank_authorisation_id, \GoCardlessSDK\GetParams\BankAuthorisations\ByBankAuthorisationId $params): \GoCardlessSDK\DTOs\Bank\AuthorisationSingleResource\Response
    {
        /** @var \GoCardlessSDK\DTOs\Bank\AuthorisationSingleResource\Response $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_BANK_AUTHORISATION_ID), path: ['bank_authorisation_id' => $bank_authorisation_id], parameters: $params);
        return $result;
    }
}
