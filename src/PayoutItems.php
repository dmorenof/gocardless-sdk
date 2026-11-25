<?php

declare(strict_types=1);

namespace GoCardlessSDK;

final class PayoutItems extends \GoCardlessSDK\GoCardlessAPISDK
{
    /** GET /payout_items [operationId: list_payout_item] */
    /**
     * Get all payout items in a single payout
     *
     * Returns a [cursor-paginated](https://docs.gocardless.com/docs/api-reference/data-conventions#cursor-pagination) list of items in the payout.
     *
     * <strong>This endpoint only serves requests for payouts created in the last 6 months. Requests for older payouts will return an HTTP status <code>410 Gone</code>.</strong>
     *
     */
    public static function get(\GoCardlessSDK\GetParams\PayoutItems $params): \GoCardlessSDK\DTOs\Payout\ItemMultiResource\Response
    {
        return self::client()->resource(\GoCardlessSDK\Resources\PayoutItems::class)->get($params);
    }
}
