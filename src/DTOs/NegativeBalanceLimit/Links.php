<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs\NegativeBalanceLimit;

/**
 * NegativeBalanceLimitLinks
 */
final class Links extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * ID of the creator_user who created this limit
     * Example: "US123"
     */
    public string $creator_user;
    /**
     * ID of [creditor](https://docs.gocardless.com/docs/api-reference/creditor) which this limit relates to
     * Example: "CR123"
     */
    public string $creditor;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'creator_user' => is_string($value) ? $this->creator_user = $value : parent::assignMember($name, $value),
            'creditor' => is_string($value) ? $this->creditor = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
