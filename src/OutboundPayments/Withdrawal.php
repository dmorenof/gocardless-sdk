<?php

declare(strict_types=1);

namespace GoCardlessSDK\OutboundPayments;

final class Withdrawal extends \GoCardlessSDK\GoCardlessAPISDK
{
    /** POST /outbound_payments/withdrawal [operationId: withdrawal_outbound_payments] */
    /**
     * Create a withdrawal outbound payment
     *
     * Creates an outbound payment to your verified business bank account as the recipient.
     */
    public static function post(\GoCardlessSDK\PostParams\OutboundPayments\Withdrawal $params): \GoCardlessSDK\DTOs\OutboundPayment\SingleResource\Response
    {
        return self::client()->resource(\GoCardlessSDK\Resources\OutboundPayments\Withdrawal::class)->post($params);
    }

}
