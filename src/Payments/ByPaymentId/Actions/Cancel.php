<?php

declare(strict_types=1);

namespace GoCardlessSDK\Payments\ByPaymentId\Actions;

final class Cancel extends \GoCardlessSDK\GoCardlessAPISDK
{
    /** POST /payments/{payment_id}/actions/cancel [operationId: cancel_payment] */
    /**
     * Cancel a payment
     *
     * Cancels the payment if it has not already been submitted to the banks. Any metadata supplied to this endpoint will be stored on the payment cancellation event it causes.
     *
     * This will fail with a `cancellation_failed` error unless the payment's status is `pending_submission`.
     */
    public static function post(string $payment_id, \GoCardlessSDK\PostParams\Payments\ByPaymentId\Actions\Cancel $params): \GoCardlessSDK\DTOs\Payment\SingleResource\Response
    {
        return self::client()->resource(\GoCardlessSDK\Resources\Payments\ByPaymentId\Actions\Cancel::class)->post($payment_id, $params);
    }

}
