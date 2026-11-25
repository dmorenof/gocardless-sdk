<?php

declare(strict_types=1);

namespace GoCardlessSDK\Collections\Block\MultiResource\Response;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\GoCardlessSDK\DTOs\Block> */
final class BlocksCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \GoCardlessSDK\DTOs\Block::class;
}
