<?php

declare(strict_types=1);

namespace GoCardlessSDK\Collections\VerificationDetail\MultiResource\Response;

final class VerificationDetailsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \GoCardlessSDK\DTOs\VerificationDetail::class;
}
