<?php

declare(strict_types=1);

namespace GoCardlessSDK\Resources\Webhooks\ByWebhookId\Actions;

final class Retry extends \GoCardlessSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/webhooks/{webhook_id}/actions/retry',
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
        'responseType' => '\\GoCardlessSDK\\DTOs\\Webhook\\SingleResource\\Response',
    ];

    /**
     * Retry a webhook
     *
     * Requests for a previous webhook to be sent again
     */
    public function post(string $webhook_id, \GoCardlessSDK\PostParams\Webhooks\ByWebhookId\Actions\Retry $params): \GoCardlessSDK\DTOs\Webhook\SingleResource\Response
    {
        /** @var \GoCardlessSDK\DTOs\Webhook\SingleResource\Response $result */
        $result = $this->executeArguments(self::operation(self::POST), path: ['webhook_id' => $webhook_id], parameters: $params);
        return $result;
    }

}
