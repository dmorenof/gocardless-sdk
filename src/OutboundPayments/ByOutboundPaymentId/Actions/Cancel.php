<?php

declare(strict_types=1);

namespace GoCardlessSDK\OutboundPayments\ByOutboundPaymentId\Actions;

final class Cancel extends \GoCardlessSDK\GoCardlessAPISDK
{
    /** POST /outbound_payments/{outbound_payment_id}/actions/cancel [operationId: cancel_outbound_payment] */
    /**
     * Cancel an outbound payment
     *
     * Cancels an outbound payment. Only outbound payments with either `verifying`, `pending_approval`, or `scheduled` status can be cancelled.
     * Once an outbound payment is `executing`, the money moving process has begun and cannot be reversed.
     */
    public static function post(string $outbound_payment_id, \GoCardlessSDK\PostParams\OutboundPayments\ByOutboundPaymentId\Actions\Cancel $params): \GoCardlessSDK\DTOs\OutboundPayment\SingleResource\Response
    {
        return self::client()->resource(\GoCardlessSDK\Resources\OutboundPayments\ByOutboundPaymentId\Actions\Cancel::class)->post($outbound_payment_id, $params);
    }

}
