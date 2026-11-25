<?php

declare(strict_types=1);

namespace GoCardlessSDK\Resources\Mandates\ByMandateId\Actions;

final class Cancel extends \GoCardlessSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/mandates/{mandate_id}/actions/cancel',
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
        'responseType' => '\\GoCardlessSDK\\DTOs\\Mandate\\SingleResource\\Response',
        'requestBody' => [
            'type' => '\\GoCardlessSDK\\Requests\\Mandates\\ByMandateId\\Actions\\Cancel\\Post',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Cancel a mandate
     *
     * Immediately cancels a mandate and all associated cancellable payments. Any metadata supplied to this endpoint will be stored on the mandate cancellation event it causes.
     *
     * This will fail with a `cancellation_failed` error if the mandate is already cancelled.
     */
    public function post(string $mandate_id, \GoCardlessSDK\PostParams\Mandates\ByMandateId\Actions\Cancel $params): \GoCardlessSDK\DTOs\Mandate\SingleResource\Response
    {
        /** @var \GoCardlessSDK\DTOs\Mandate\SingleResource\Response $result */
        $result = $this->executeArguments(self::operation(self::POST), path: ['mandate_id' => $mandate_id], parameters: $params);
        return $result;
    }
}
