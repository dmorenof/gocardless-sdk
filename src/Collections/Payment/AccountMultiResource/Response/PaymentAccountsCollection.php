<?php

declare(strict_types=1);

namespace GoCardlessSDK\Collections\Payment\AccountMultiResource\Response;

final class PaymentAccountsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \GoCardlessSDK\DTOs\Payment\Account::class;
}
