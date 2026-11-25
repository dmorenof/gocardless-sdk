<?php

declare(strict_types=1);

namespace GoCardlessSDK\Collections\PayerAuthorisation;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\GoCardlessSDK\DTOs\PayerAuthorisation\IncompleteField> */
final class IncompleteFieldsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \GoCardlessSDK\DTOs\PayerAuthorisation\IncompleteField::class;
}
