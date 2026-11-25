<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs\BillingRequest\Resources;

/**
 * Embedded mandate, only once the mandate request has been fulfilled
 */
final class MandateDTO extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Unique identifier, beginning with "MD". Note that this prefix may not apply to mandates created before 2016.
     */
    public string $id;
    /**
     * Unique reference. Different schemes have different length and [character set](https://docs.gocardless.com/docs/api-reference/character-sets) requirements. GoCardless will generate a unique reference satisfying the different scheme requirements if this field is left blank.
     */
    public ?string $reference;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'reference' => $value === null || is_string($value) ? $this->reference = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
