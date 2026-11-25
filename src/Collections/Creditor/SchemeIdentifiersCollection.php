<?php

declare(strict_types=1);

namespace GoCardlessSDK\Collections\Creditor;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\GoCardlessSDK\DTOs\Creditor\SchemeIdentifiersDTO> */
final class SchemeIdentifiersCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \GoCardlessSDK\DTOs\Creditor\SchemeIdentifiersDTO::class;
}
