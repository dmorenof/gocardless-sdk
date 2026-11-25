<?php

declare(strict_types=1);

namespace GoCardlessSDK\Collections\TaxRate\MultiResource\Response;

final class TaxRatesCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \GoCardlessSDK\DTOs\TaxRate::class;
}
