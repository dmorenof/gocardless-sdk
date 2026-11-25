<?php

declare(strict_types=1);

namespace GoCardlessSDK\Collections\Mandate\ImportEntryMultiResource\Response;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\GoCardlessSDK\DTOs\Mandate\ImportEntry> */
final class ImportEntriesCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \GoCardlessSDK\DTOs\Mandate\ImportEntry::class;
}
