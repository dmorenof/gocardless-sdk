<?php

declare(strict_types=1);

namespace GoCardlessSDK\Collections\VerificationDetail;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\GoCardlessSDK\DTOs\VerificationDetail\Director> */
final class DirectorsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \GoCardlessSDK\DTOs\VerificationDetail\Director::class;
}
