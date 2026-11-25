<?php

declare(strict_types=1);

namespace GoCardlessSDK\Collections\Error;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\GoCardlessSDK\DTOs\Error\ErrorsDTO> */
final class ErrorsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \GoCardlessSDK\DTOs\Error\ErrorsDTO::class;
}
