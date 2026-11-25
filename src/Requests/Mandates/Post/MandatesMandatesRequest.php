<?php

declare(strict_types=1);

namespace GoCardlessSDK\Requests\Mandates\Post;

final class MandatesMandatesRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'links',
    ];

    public \GoCardlessSDK\Enums\Mandate\AuthorisationSource $authorisation_source;
    public \GoCardlessSDK\Requests\Mandates\Post\Mandates\MandatesLinksRequest $links;
    public \GoCardlessSDK\DTOs\Customer\Metadata $metadata;
    /**
     * For ACH customers only. Required for ACH customers. A string containing the IP address of the payer to whom the mandate belongs (i.e. as a result of their completion of a mandate setup flow in their browser).
     *
     * Not required for creating offline mandates where `authorisation_source` is set to telephone or paper.
     *
     */
    public ?string $payer_ip_address;
    /**
     * Unique reference. Different schemes have different length and [character set](https://docs.gocardless.com/docs/api-reference/character-sets) requirements. GoCardless will generate a unique reference satisfying the different scheme requirements if this field is left blank.
     */
    public ?string $reference;
    /**
     * <a name="mandates_scheme"></a>Bank payment scheme to which this mandate and associated payments are submitted. Can be supplied or automatically detected from the customer's bank account.
     */
    public ?string $scheme;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'authorisation_source' => is_string($value) ? $this->authorisation_source = \GoCardlessSDK\Enums\Mandate\AuthorisationSource::from($value) : parent::assignMember($name, $value),
            'payer_ip_address' => $value === null || is_string($value) ? $this->payer_ip_address = $value : parent::assignMember($name, $value),
            'reference' => $value === null || is_string($value) ? $this->reference = $value : parent::assignMember($name, $value),
            'scheme' => $value === null || is_string($value) ? $this->scheme = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
