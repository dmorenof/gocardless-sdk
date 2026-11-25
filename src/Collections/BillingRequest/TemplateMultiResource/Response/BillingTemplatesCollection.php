<?php

declare(strict_types=1);

namespace GoCardlessSDK\Collections\BillingRequest\TemplateMultiResource\Response;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\GoCardlessSDK\DTOs\BillingRequest\Template> */
final class BillingTemplatesCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \GoCardlessSDK\DTOs\BillingRequest\Template::class;
}
