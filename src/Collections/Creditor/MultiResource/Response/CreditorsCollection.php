<?php

declare(strict_types=1);

namespace GoCardlessSDK\Collections\Creditor\MultiResource\Response;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\GoCardlessSDK\DTOs\Creditor> */
final class CreditorsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \GoCardlessSDK\DTOs\Creditor::class;
}
