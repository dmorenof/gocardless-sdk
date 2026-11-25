<?php

declare(strict_types=1);

namespace GoCardlessSDK\Collections\OutboundPayment\ImportEntryMultiResource\Response;

final class ImportEntriesCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \GoCardlessSDK\DTOs\OutboundPayment\ImportEntry::class;
}
