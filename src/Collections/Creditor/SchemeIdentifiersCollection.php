<?php

declare(strict_types=1);

namespace GoCardlessSDK\Collections\Creditor;

final class SchemeIdentifiersCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \GoCardlessSDK\DTOs\Creditor\SchemeIdentifiersDTO::class;
}
