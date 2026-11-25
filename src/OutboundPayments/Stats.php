<?php

declare(strict_types=1);

namespace GoCardlessSDK\OutboundPayments;

final class Stats extends \GoCardlessSDK\GoCardlessAPISDK
{
    /** GET /outbound_payments/stats [operationId: list_outbound_payments_stats] */
    /**
     * Outbound payment statistics
     *
     * Retrieve aggregate statistics on outbound payments.
     */
    public static function get(\GoCardlessSDK\GetParams\OutboundPayments\Stats $params): \GoCardlessSDK\DTOs\OutboundPayment\Stats\Response
    {
        return self::client()->resource(\GoCardlessSDK\Resources\OutboundPayments\Stats::class)->get($params);
    }
}
