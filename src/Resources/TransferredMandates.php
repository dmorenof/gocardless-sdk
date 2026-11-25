<?php

declare(strict_types=1);

namespace GoCardlessSDK\Resources;

final class TransferredMandates extends \GoCardlessSDK\Client
{
    private const array GET_BY_MANDATE_ID = [
        'method' => 'GET',
        'path' => '/transferred_mandates/{mandate_id}',
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
        'responseType' => '\\GoCardlessSDK\\DTOs\\TransferredMandate\\SingleResource\\Response',
    ];

    /**
     * Get updated customer bank details
     *
     * Returns new customer bank details for a mandate that's been recently transferred
     *
     * <p class="restricted-notice"><strong>Restricted</strong>: This endpoint is restricted to organisations with the Transfer Bank Accounts upgrade</p>
     *
     * <p class="notice"><strong>Note</strong>: See our [Security Requirements](https://docs.gocardless.com/docs/api-reference/security-requirements) before using this feature</p>
     */
    public function getByMandateId(string $mandate_id, \GoCardlessSDK\GetParams\TransferredMandates\ByMandateId $params): \GoCardlessSDK\DTOs\TransferredMandate\SingleResource\Response
    {
        /** @var \GoCardlessSDK\DTOs\TransferredMandate\SingleResource\Response $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_MANDATE_ID), path: ['mandate_id' => $mandate_id], parameters: $params);
        return $result;
    }
}
