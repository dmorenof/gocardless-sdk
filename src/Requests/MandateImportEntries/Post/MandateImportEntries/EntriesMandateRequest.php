<?php

declare(strict_types=1);

namespace GoCardlessSDK\Requests\MandateImportEntries\Post\MandateImportEntries;

final class EntriesMandateRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \GoCardlessSDK\Enums\Mandate\AuthorisationSource $authorisation_source;
    public \GoCardlessSDK\DTOs\Customer\Metadata $metadata;
    /**
     * Unique reference. Different schemes have different length and [character set](https://docs.gocardless.com/docs/api-reference/character-sets) requirements. GoCardless will generate a unique reference satisfying the different scheme requirements if this field is left blank.
     */
    public ?string $reference;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'authorisation_source' => is_string($value) ? $this->authorisation_source = \GoCardlessSDK\Enums\Mandate\AuthorisationSource::from($value) : parent::assignMember($name, $value),
            'reference' => $value === null || is_string($value) ? $this->reference = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
