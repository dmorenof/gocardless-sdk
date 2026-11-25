<?php

declare(strict_types=1);

namespace GoCardlessSDK;

final class Payments extends \GoCardlessSDK\GoCardlessAPISDK
{
    /** GET /payments [operationId: list_payment] */
    /**
     * List payments
     *
     * Returns a [cursor-paginated](https://docs.gocardless.com/docs/api-reference/data-conventions#cursor-pagination) list of your payments.
     */
    public static function get(\GoCardlessSDK\GetParams\Payments $params): \GoCardlessSDK\DTOs\Payment\MultiResource\Response
    {
        return self::client()->resource(\GoCardlessSDK\Resources\Payments::class)->get($params);
    }

    /** POST /payments [operationId: create_payment] */
    /**
     * Create a payment
     *
     * <a name="mandate_is_inactive"></a>Creates a new payment object.
     *
     * This fails with a `mandate_is_inactive` error if the linked [mandate](https://docs.gocardless.com/docs/api-reference/mandate) is cancelled or has failed. Payments can be created against mandates with status of: `pending_customer_approval`, `pending_submission`, `submitted`, and `active`.
     *
     * <p class="notice--warning"><strong>Warning</strong>: in Bacs, you have the option to provide a payment reference up to 10 characters in length. However, if you are providing custom mandate references (which can only be enabled by contacting support), the combined length of the two references separated by a dash character must not exceed 18 characters. Payment references may be up to 140 characters for SEPA, 11 for Autogiro and 30 for Betalingsservice, irrespective of the mandate reference.</p>
     */
    public static function post(\GoCardlessSDK\PostParams\Payments $params): \GoCardlessSDK\DTOs\Payment\SingleResource\Response
    {
        return self::client()->resource(\GoCardlessSDK\Resources\Payments::class)->post($params);
    }

    /** GET /payments/{payment_id} [operationId: get_payments] */
    /**
     * Get a single payment
     *
     * Retrieves the details of a single existing payment.
     */
    public static function getByPaymentId(string $payment_id, \GoCardlessSDK\GetParams\Payments\ByPaymentId $params): \GoCardlessSDK\DTOs\Payment\SingleResource\Response
    {
        return self::client()->resource(\GoCardlessSDK\Resources\Payments::class)->getByPaymentId($payment_id, $params);
    }

    /** PUT /payments/{payment_id} [operationId: update_payments] */
    /**
     * Update a payment
     *
     * Updates a payment object. This accepts only the metadata parameter.
     */
    public static function putByPaymentId(string $payment_id, \GoCardlessSDK\PutParams\Payments\ByPaymentId $params): \GoCardlessSDK\DTOs\Payment\SingleResource\Response
    {
        return self::client()->resource(\GoCardlessSDK\Resources\Payments::class)->putByPaymentId($payment_id, $params);
    }
}
