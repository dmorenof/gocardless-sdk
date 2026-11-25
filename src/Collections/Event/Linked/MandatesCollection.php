<?php

declare(strict_types=1);

namespace GoCardlessSDK\Collections\Event\Linked;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\GoCardlessSDK\DTOs\Mandate> */
final class MandatesCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \GoCardlessSDK\DTOs\Mandate::class;
}
