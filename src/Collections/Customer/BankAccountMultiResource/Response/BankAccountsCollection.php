<?php

declare(strict_types=1);

namespace GoCardlessSDK\Collections\Customer\BankAccountMultiResource\Response;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\GoCardlessSDK\DTOs\Customer\BankAccount> */
final class BankAccountsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \GoCardlessSDK\DTOs\Customer\BankAccount::class;
}
