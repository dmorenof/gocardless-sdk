<?php

declare(strict_types=1);

namespace GoCardlessSDK\Collections\Bank\DetailsLookup;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\GoCardlessSDK\Enums\Bank\DetailsLookupScheme> */
final class DebitSchemesCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \GoCardlessSDK\Enums\Bank\DetailsLookupScheme::class;
}
