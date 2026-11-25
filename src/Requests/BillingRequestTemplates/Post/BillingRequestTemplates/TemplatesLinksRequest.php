<?php

declare(strict_types=1);

namespace GoCardlessSDK\Requests\BillingRequestTemplates\Post\BillingRequestTemplates;

final class TemplatesLinksRequest extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * ID of the associated [creditor](https://docs.gocardless.com/docs/api-reference/creditor). Only required if your account manages multiple creditors.
     * Example: "CR123"
     */
    public string $creditor;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'creditor' => is_string($value) ? $this->creditor = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
