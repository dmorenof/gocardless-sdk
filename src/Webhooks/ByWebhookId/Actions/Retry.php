<?php

declare(strict_types=1);

namespace GoCardlessSDK\Webhooks\ByWebhookId\Actions;

final class Retry extends \GoCardlessSDK\GoCardlessAPISDK
{
    /** POST /webhooks/{webhook_id}/actions/retry [operationId: retry_webhook] */
    /**
     * Retry a webhook
     *
     * Requests for a previous webhook to be sent again
     */
    public static function post(string $webhook_id, \GoCardlessSDK\PostParams\Webhooks\ByWebhookId\Actions\Retry $params): \GoCardlessSDK\DTOs\Webhook\SingleResource\Response
    {
        return self::client()->resource(\GoCardlessSDK\Resources\Webhooks\ByWebhookId\Actions\Retry::class)->post($webhook_id, $params);
    }

}
