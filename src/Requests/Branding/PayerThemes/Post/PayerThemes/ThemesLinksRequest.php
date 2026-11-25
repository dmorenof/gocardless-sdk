<?php

declare(strict_types=1);

namespace GoCardlessSDK\Requests\Branding\PayerThemes\Post\PayerThemes;

final class ThemesLinksRequest extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * ID of the creditor the payer theme belongs to
     * Example: "CR1234"
     */
    public ?string $creditor;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'creditor' => $value === null || is_string($value) ? $this->creditor = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
