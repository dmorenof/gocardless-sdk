<?php

declare(strict_types=1);

namespace GoCardlessSDK\Requests\MandateImports\Post;

final class MandateImportsRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'scheme',
];

    /**
     * Related resources
     */
    public \GoCardlessSDK\Requests\MandateImports\Post\MandateImports\ImportsLinksRequest $links;
    /**
     * A bank payment scheme. Currently "ach", "autogiro", "bacs", "becs", "becs_nz", "betalingsservice", "faster_payments", "pad", "pay_to" and "sepa_core" are supported.
     * Example: "bacs"
     */
    public \GoCardlessSDK\Enums\MandateImports\Post\MandateImports\ImportsSchemeEnum $scheme;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'scheme' => is_string($value) ? $this->scheme = \GoCardlessSDK\Enums\MandateImports\Post\MandateImports\ImportsSchemeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
