<?php

declare(strict_types=1);

namespace GoCardlessSDK\Resources\Branding;

final class Logos extends \GoCardlessSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/branding/logos',
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
        'responseType' => '\\GoCardlessSDK\\DTOs\\LogoSingleResourceResponse',
        'requestBody' => [
            'type' => '\\GoCardlessSDK\\Requests\\Branding\\Logos\\Post',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Create a logo associated with a creditor
     *
     * Creates a new logo associated with a creditor. If a creditor already has a logo, this will update the existing logo linked to the creditor.
     *
     * We support JPG and PNG formats. Your logo will be scaled to a maximum of 300px by 40px. For more guidance on how to upload logos that will look
     * great across your customer payment page and notification emails see [here](https://docs.gocardless.com/docs/gc-embed/setting-up-branding#tips-for-uploading-your-logo).
     *
     * <p class="restricted-notice"><strong>Restricted</strong>: This endpoint is restricted to GoCardless Embed customers. Please email [embed-commercial-team&#64;gocardless.com](mailto:embed-commercial-team&#64;gocardless.com) if you are interested in using this product.</p>
     */
    public function post(\GoCardlessSDK\PostParams\Branding\Logos $params): \GoCardlessSDK\DTOs\LogoSingleResourceResponse
    {
        /** @var \GoCardlessSDK\DTOs\LogoSingleResourceResponse $result */
        $result = $this->executeArguments(self::operation(self::POST), parameters: $params);
        return $result;
    }
}
