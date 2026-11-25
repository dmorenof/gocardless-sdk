<?php

declare(strict_types=1);

namespace GoCardlessSDK\Collections\Payment\AccountMultiResource\Response;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\GoCardlessSDK\DTOs\Payment\Account> */
final class PaymentAccountsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \GoCardlessSDK\DTOs\Payment\Account::class;
}
