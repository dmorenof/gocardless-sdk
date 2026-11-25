<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs\OutboundPayment\Stats;

/**
 * OutboundPaymentStatsResponse
 *
 * Statistics on outbound payments
 */
final class Response extends \Dmorenof\SdkRuntime\DTO
{
    public \GoCardlessSDK\DTOs\OutboundPayment\Stats\Response\OutboundPaymentsDTO $outbound_payments;
}
