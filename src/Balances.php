<?php

declare(strict_types=1);

namespace GoCardlessSDK;

final class Balances extends \GoCardlessSDK\GoCardlessAPISDK
{
    /** GET /balances [operationId: list_balance] */
    /**
     * List balances
     *
     * Returns a [cursor-paginated](https://docs.gocardless.com/docs/api-reference/data-conventions#cursor-pagination) list of balances for a given creditor. This endpoint is rate limited to 60 requests per minute.
     */
    public static function get(\GoCardlessSDK\GetParams\Balances $params): \GoCardlessSDK\DTOs\Balance\MultiResource\Response
    {
        return self::client()->resource(\GoCardlessSDK\Resources\Balances::class)->get($params);
    }

}
