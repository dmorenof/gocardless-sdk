<?php

declare(strict_types=1);

namespace GoCardlessSDK\Collections\Block\MultiResource\Response;

final class BlocksCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \GoCardlessSDK\DTOs\Block::class;
}
