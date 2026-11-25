<?php

declare(strict_types=1);

namespace GoCardlessSDK\Requests\RedirectFlows\Post\RedirectFlows;

final class FlowsLinksRequest extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The [creditor](https://docs.gocardless.com/docs/api-reference/creditor) for whom the mandate will be created. The `name` of the creditor will be displayed on the payment page. Required if your account manages multiple creditors.
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
