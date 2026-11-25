<?php

declare(strict_types=1);

namespace GoCardlessSDK\Collections\BillingRequest;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\GoCardlessSDK\DTOs\BillingRequest\ActionsDTO> */
final class ActionsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \GoCardlessSDK\DTOs\BillingRequest\ActionsDTO::class;
}
