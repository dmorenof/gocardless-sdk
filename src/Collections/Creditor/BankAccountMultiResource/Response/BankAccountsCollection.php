<?php

declare(strict_types=1);

namespace GoCardlessSDK\Collections\Creditor\BankAccountMultiResource\Response;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\GoCardlessSDK\DTOs\Creditor\BankAccount> */
final class BankAccountsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \GoCardlessSDK\DTOs\Creditor\BankAccount::class;
}
