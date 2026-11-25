<?php

declare(strict_types=1);

namespace GoCardlessSDK\Requests\VerificationDetails\Post\VerificationDetails;

final class DetailsLinksRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'creditor',
];

    /**
     * ID of the associated [creditor](https://docs.gocardless.com/docs/api-reference/creditor).
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
