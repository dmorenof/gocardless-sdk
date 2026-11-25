<?php

declare(strict_types=1);

namespace GoCardlessSDK\Collections\BillingRequest\AccountInformation\Request;

final class ScopesCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \GoCardlessSDK\Enums\BillingRequest\AccountInformation\Request\ScopesEnum::class;
}
