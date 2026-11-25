<?php

declare(strict_types=1);

namespace GoCardlessSDK\Collections\CurrencyExchangeRate\MultiResource\Response;

final class ExchangeRatesCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \GoCardlessSDK\DTOs\CurrencyExchangeRate::class;
}
