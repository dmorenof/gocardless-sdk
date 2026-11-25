<?php

declare(strict_types=1);

namespace GoCardlessSDK\Collections\Creditor\MultiResource\Response;

final class CreditorsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \GoCardlessSDK\DTOs\Creditor::class;
}
