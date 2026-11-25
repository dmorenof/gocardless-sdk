<?php

declare(strict_types=1);

namespace GoCardlessSDK;

final class Webhooks extends \GoCardlessSDK\GoCardlessAPISDK
{
    /** GET /webhooks [operationId: list_webhook] */
    /**
     * List webhooks
     *
     * Returns a [cursor-paginated](https://docs.gocardless.com/docs/api-reference/data-conventions#cursor-pagination) list of your webhooks.
     */
    public static function get(\GoCardlessSDK\GetParams\Webhooks $params): \GoCardlessSDK\DTOs\Webhook\MultiResource\Response
    {
        return self::client()->resource(\GoCardlessSDK\Resources\Webhooks::class)->get($params);
    }

    /** GET /webhooks/{webhook_id} [operationId: get_webhooks] */
    /**
     * Get a single webhook
     *
     * Retrieves the details of an existing webhook.
     */
    public static function getByWebhookId(string $webhook_id, \GoCardlessSDK\GetParams\Webhooks\ByWebhookId $params): \GoCardlessSDK\DTOs\Webhook\SingleResource\Response
    {
        return self::client()->resource(\GoCardlessSDK\Resources\Webhooks::class)->getByWebhookId($webhook_id, $params);
    }
}
