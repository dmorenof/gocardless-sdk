<?php

declare(strict_types=1);

namespace GoCardlessSDK\Collections\Institution\MultiResource\Response;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\GoCardlessSDK\DTOs\Institution> */
final class InstitutionsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \GoCardlessSDK\DTOs\Institution::class;
}
