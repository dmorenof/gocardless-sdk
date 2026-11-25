<?php

declare(strict_types=1);

namespace GoCardlessSDK\Requests\Branding\Logos\Post\Logos;

final class LogosLinksRequest extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * ID of the creditor the logo belongs to
     * Example: "CR1234"
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
