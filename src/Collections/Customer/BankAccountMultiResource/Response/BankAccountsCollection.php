<?php

declare(strict_types=1);

namespace GoCardlessSDK\Collections\Customer\BankAccountMultiResource\Response;

final class BankAccountsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \GoCardlessSDK\DTOs\Customer\BankAccount::class;
}
