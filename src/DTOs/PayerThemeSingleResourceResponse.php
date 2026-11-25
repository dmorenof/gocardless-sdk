<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs;

/**
 * PayerThemeSingleResourceResponse
 */
final class PayerThemeSingleResourceResponse extends \Dmorenof\SdkRuntime\DTO
{
    public \GoCardlessSDK\DTOs\PayerTheme $payer_themes;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'payer_themes' => $value instanceof \stdClass ? $this->payer_themes = new \GoCardlessSDK\DTOs\PayerTheme($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
