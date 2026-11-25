<?php

declare(strict_types=1);

namespace GoCardlessSDK\Requests\OutboundPaymentImports\Post;

final class PaymentImportsRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'entry_items',
];

    public \GoCardlessSDK\Collections\OutboundPaymentImports\Post\OutboundPaymentImports\EntryItemsCollection $entry_items;
    public \GoCardlessSDK\Requests\OutboundPaymentImports\Post\OutboundPaymentImports\ImportsLinksRequest $links;

}
