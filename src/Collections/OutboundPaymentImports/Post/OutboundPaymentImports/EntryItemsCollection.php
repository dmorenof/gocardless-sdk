<?php

declare(strict_types=1);

namespace GoCardlessSDK\Collections\OutboundPaymentImports\Post\OutboundPaymentImports;

final class EntryItemsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \GoCardlessSDK\Requests\OutboundPaymentImports\Post\OutboundPaymentImports\EntryItemsRequest::class;
}
