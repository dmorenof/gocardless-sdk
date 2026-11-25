<?php

declare(strict_types=1);

namespace GoCardlessSDK\OutboundPayments\ByOutboundPaymentId\Actions;

final class Approve extends \GoCardlessSDK\GoCardlessAPISDK
{
    /** POST /outbound_payments/{outbound_payment_id}/actions/approve [operationId: approve_outbound_payment] */
    /**
     * Approve an outbound payment
     *
     * Approves an outbound payment. Only outbound payments with the "pending_approval" status can be approved.
     */
    public static function post(string $outbound_payment_id, \GoCardlessSDK\PostParams\OutboundPayments\ByOutboundPaymentId\Actions\Approve $params): \GoCardlessSDK\DTOs\OutboundPayment\SingleResource\Response
    {
        return self::client()->resource(\GoCardlessSDK\Resources\OutboundPayments\ByOutboundPaymentId\Actions\Approve::class)->post($outbound_payment_id, $params);
    }
}
