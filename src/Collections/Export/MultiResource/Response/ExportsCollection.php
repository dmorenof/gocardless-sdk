<?php

declare(strict_types=1);

namespace GoCardlessSDK\Collections\Export\MultiResource\Response;

final class ExportsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \GoCardlessSDK\DTOs\Export\MultiResource\Response\ExportsDTO::class;
}
