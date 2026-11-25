<?php

declare(strict_types=1);

namespace GoCardlessSDK\Collections\Error;

final class ErrorsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \GoCardlessSDK\DTOs\Error\ErrorsDTO::class;
}
