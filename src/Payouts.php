<?php

declare(strict_types=1);

namespace GoCardlessSDK;

final class Payouts extends \GoCardlessSDK\GoCardlessAPISDK
{
    /** GET /payouts [operationId: list_payout] */
    /**
     * List payouts
     *
     * Returns a [cursor-paginated](https://docs.gocardless.com/docs/api-reference/data-conventions#cursor-pagination) list of your payouts.
     */
    public static function get(\GoCardlessSDK\GetParams\Payouts $params): \GoCardlessSDK\DTOs\Payout\MultiResource\Response
    {
        return self::client()->resource(\GoCardlessSDK\Resources\Payouts::class)->get($params);
    }

    /** GET /payouts/{payout_id} [operationId: get_payouts] */
    /**
     * Get a single payout
     *
     * Retrieves the details of a single payout. For an example of how to reconcile the transactions in a payout, see [this guide](https://docs.gocardless.com/docs/collect-payments/managing-payments/reconciling-payouts).
     */
    public static function getByPayoutId(string $payout_id, \GoCardlessSDK\GetParams\Payouts\ByPayoutId $params): \GoCardlessSDK\DTOs\Payout\SingleResource\Response
    {
        return self::client()->resource(\GoCardlessSDK\Resources\Payouts::class)->getByPayoutId($payout_id, $params);
    }

    /** PUT /payouts/{payout_id} [operationId: update_payouts] */
    /**
     * Update a payout
     *
     * Updates a payout object. This accepts only the metadata parameter.
     */
    public static function putByPayoutId(string $payout_id, \GoCardlessSDK\PutParams\Payouts\ByPayoutId $params): \GoCardlessSDK\DTOs\Payout\SingleResource\Response
    {
        return self::client()->resource(\GoCardlessSDK\Resources\Payouts::class)->putByPayoutId($payout_id, $params);
    }

}
