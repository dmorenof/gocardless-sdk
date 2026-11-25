<?php

declare(strict_types=1);

namespace GoCardlessSDK\Collections\CurrencyExchangeRate\MultiResource\Response;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\GoCardlessSDK\DTOs\CurrencyExchangeRate> */
final class ExchangeRatesCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \GoCardlessSDK\DTOs\CurrencyExchangeRate::class;
}
