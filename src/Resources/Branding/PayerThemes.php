<?php

declare(strict_types=1);

namespace GoCardlessSDK\Resources\Branding;

final class PayerThemes extends \GoCardlessSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/branding/payer_themes',
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
        'responseType' => '\\GoCardlessSDK\\DTOs\\PayerThemeSingleResourceResponse',
        'requestBody' => [
            'type' => '\\GoCardlessSDK\\Requests\\Branding\\PayerThemes\\Post',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Create a payer theme associated with a creditor
     *
     * Creates a new payer theme associated with a creditor. If a creditor already has payer themes, this will update the existing payer theme linked to the creditor.
     *
     * <p class="restricted-notice"><strong>Restricted</strong>: This endpoint is restricted to GoCardless Embed customers. Please email [embed-commercial-team&#64;gocardless.com](mailto:embed-commercial-team&#64;gocardless.com) if you are interested in using this product.</p>
     */
    public function post(\GoCardlessSDK\PostParams\Branding\PayerThemes $params): \GoCardlessSDK\DTOs\PayerThemeSingleResourceResponse
    {
        /** @var \GoCardlessSDK\DTOs\PayerThemeSingleResourceResponse $result */
        $result = $this->executeArguments(self::operation(self::POST), parameters: $params);
        return $result;
    }
}
