<?php

declare(strict_types=1);

namespace GoCardlessSDK\Requests\OutboundPayments\ByOutboundPaymentId\Actions\Cancel\Post;

final class OutboundPaymentsRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \GoCardlessSDK\DTOs\OutboundPayment\Metadata $metadata;
}
