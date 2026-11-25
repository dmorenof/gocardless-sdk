<?php

declare(strict_types=1);

namespace GoCardlessSDK\Collections\OutboundPayment\ImportMultiResource\Response;

final class PaymentImportsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \GoCardlessSDK\DTOs\OutboundPayment\Import::class;
}
