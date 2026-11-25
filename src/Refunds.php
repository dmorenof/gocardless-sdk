<?php

declare(strict_types=1);

namespace GoCardlessSDK;

final class Refunds extends \GoCardlessSDK\GoCardlessAPISDK
{
    /** GET /refunds [operationId: list_refund] */
    /**
     * List refunds
     *
     * Returns a [cursor-paginated](https://docs.gocardless.com/docs/api-reference/data-conventions#cursor-pagination) list of your refunds.
     */
    public static function get(\GoCardlessSDK\GetParams\Refunds $params): \GoCardlessSDK\DTOs\Refund\MultiResource\Response
    {
        return self::client()->resource(\GoCardlessSDK\Resources\Refunds::class)->get($params);
    }

    /** POST /refunds [operationId: create_refund] */
    /**
     * Create a refund
     *
     * Creates a new refund object.
     *
     * This fails with:<a name="total_amount_confirmation_invalid"></a><a name="number_of_refunds_exceeded"></a><a name="available_refund_amount_insufficient"></a>
     *
     * - `total_amount_confirmation_invalid` if the confirmation amount doesn't match the total amount refunded for the payment. This safeguard is there to prevent two processes from creating refunds without awareness of each other.
     *
     * - `available_refund_amount_insufficient` if the creditor does not have sufficient balance for refunds available to cover the cost of the requested refund.
     *
     *
     * <p class="restricted-notice"><strong>Restricted</strong>: This endpoint is disabled by default. To enable it, you will need to enable refunds on your GoCardless Dashboard.</p>
     *
     * <p class="notice--warning"><strong>Warning</strong>: A payment that has been (partially) refunded can still receive a late failure or chargeback from the customer's bank.<br /><br />
     * A refund can only be created once it is outside the safer refund period (7 calendar days after the charge date) otherwise an error is returned. The safer refund period can be disabled by contacting GoCardless.</p>
     */
    public static function post(\GoCardlessSDK\PostParams\Refunds $params): \GoCardlessSDK\DTOs\Refund\SingleResource\Response
    {
        return self::client()->resource(\GoCardlessSDK\Resources\Refunds::class)->post($params);
    }

    /** GET /refunds/{refund_id} [operationId: get_refunds] */
    /**
     * Get a single refund
     *
     * Retrieves all details for a single refund
     */
    public static function getByRefundId(string $refund_id, \GoCardlessSDK\GetParams\Refunds\ByRefundId $params): \GoCardlessSDK\DTOs\Refund\SingleResource\Response
    {
        return self::client()->resource(\GoCardlessSDK\Resources\Refunds::class)->getByRefundId($refund_id, $params);
    }

    /** PUT /refunds/{refund_id} [operationId: update_refunds] */
    /**
     * Update a refund
     *
     * Updates a refund object.
     */
    public static function putByRefundId(string $refund_id, \GoCardlessSDK\PutParams\Refunds\ByRefundId $params): \GoCardlessSDK\DTOs\Refund\SingleResource\Response
    {
        return self::client()->resource(\GoCardlessSDK\Resources\Refunds::class)->putByRefundId($refund_id, $params);
    }

}
