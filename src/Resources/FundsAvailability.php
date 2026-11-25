<?php

declare(strict_types=1);

namespace GoCardlessSDK\Resources;

final class FundsAvailability extends \GoCardlessSDK\Client
{
    private const array GET_BY_MANDATE_ID = [
        'method' => 'GET',
        'path' => '/funds_availability/{mandate_id}',
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
        'responseType' => '\\GoCardlessSDK\\Responses\\FundsAvailability\\ByMandateId\\Get',
    ];

    /**
     * Funds availability
     *
     * Checks if the payer's current balance is sufficient to cover the amount
     * the merchant wants to charge within the consent parameters defined on the mandate.
     *
     * <p class="notice--warning"><strong>Warning</strong>: Funds availability check is available for VRP mandates only.</p>
     */
    public function getByMandateId(string $mandate_id, \GoCardlessSDK\GetParams\FundsAvailability\ByMandateId $params): \GoCardlessSDK\Responses\FundsAvailability\ByMandateId\Get
    {
        /** @var \GoCardlessSDK\Responses\FundsAvailability\ByMandateId\Get $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_MANDATE_ID), path: ['mandate_id' => $mandate_id], parameters: $params);
        return $result;
    }
}
