<?php

declare(strict_types=1);

namespace GoCardlessSDK\Payments\ByPaymentId\Actions;

final class Retry extends \GoCardlessSDK\GoCardlessAPISDK
{
    /** POST /payments/{payment_id}/actions/retry [operationId: retry_payment] */
    /**
     * Retry a payment
     *
     * <a name="retry_failed"></a>Retries a failed payment if the underlying mandate is active. You will receive a `resubmission_requested` webhook, but after that retrying the payment follows the same process as its initial creation, so you will receive a `submitted` webhook, followed by a `confirmed` or `failed` event. Any metadata supplied to this endpoint will be stored against the payment submission event it causes.
     *
     * This will return a `retry_failed` error if the payment has not failed.
     *
     * Payments can be retried up to 3 times.
     */
    public static function post(string $payment_id, \GoCardlessSDK\PostParams\Payments\ByPaymentId\Actions\Retry $params): \GoCardlessSDK\DTOs\Payment\SingleResource\Response
    {
        return self::client()->resource(\GoCardlessSDK\Resources\Payments\ByPaymentId\Actions\Retry::class)->post($payment_id, $params);
    }

}
