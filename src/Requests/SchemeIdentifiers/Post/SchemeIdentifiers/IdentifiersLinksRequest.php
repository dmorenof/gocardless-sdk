<?php

declare(strict_types=1);

namespace GoCardlessSDK\Requests\SchemeIdentifiers\Post\SchemeIdentifiers;

final class IdentifiersLinksRequest extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * <em>required</em> ID of the associated [creditor](https://docs.gocardless.com/docs/api-reference/creditor).
     *
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
