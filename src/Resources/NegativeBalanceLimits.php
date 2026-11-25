<?php

declare(strict_types=1);

namespace GoCardlessSDK\Resources;

final class NegativeBalanceLimits extends \GoCardlessSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/negative_balance_limits',
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
        'responseType' => '\\GoCardlessSDK\\DTOs\\NegativeBalanceLimit\\MultiResource\\Response',
    ];

    /**
     * List negative balance limits
     *
     * Returns a [cursor-paginated](https://docs.gocardless.com/docs/api-reference/data-conventions#cursor-pagination) list of negative balance limits.
     *
     * <p class="restricted-notice"><strong>Restricted</strong>: This endpoint is restricted to GoCardless Embed customers. Please email [embed-commercial-team&#64;gocardless.com](mailto:embed-commercial-team&#64;gocardless.com) if you are interested in using this product.</p>
     */
    public function get(\GoCardlessSDK\GetParams\NegativeBalanceLimits $params): \GoCardlessSDK\DTOs\NegativeBalanceLimit\MultiResource\Response
    {
        /** @var \GoCardlessSDK\DTOs\NegativeBalanceLimit\MultiResource\Response $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }
}
