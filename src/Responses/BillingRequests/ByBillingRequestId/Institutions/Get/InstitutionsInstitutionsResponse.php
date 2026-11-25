<?php

declare(strict_types=1);

namespace GoCardlessSDK\Responses\BillingRequests\ByBillingRequestId\Institutions\Get;

final class InstitutionsInstitutionsResponse extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Flag to show if selecting this institution in the select_institution action can auto-complete the collect_bank_account action. The bank can return the payer's bank account details to GoCardless.
     */
    public bool $autocompletes_collect_bank_account;
    /**
     * [ISO 3166-1](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2#Officially_assigned_code_elements) alpha-2 code. The country code of the institution. If nothing is provided, institutions with the country code 'GB' are returned by default.
     */
    public string $country_code;
    /**
     * A URL pointing to the icon for this institution
     */
    public string $icon_url;
    /**
     * The unique identifier for this institution
     */
    public string $id;
    /**
     * A URL pointing to the logo for this institution
     */
    public string $logo_url;
    /**
     * A human readable name for this institution
     */
    public string $name;
    public \GoCardlessSDK\Enums\Institution\Status $status;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'autocompletes_collect_bank_account' => is_bool($value) ? $this->autocompletes_collect_bank_account = $value : parent::assignMember($name, $value),
            'country_code' => is_string($value) ? $this->country_code = $value : parent::assignMember($name, $value),
            'icon_url' => is_string($value) ? $this->icon_url = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'logo_url' => is_string($value) ? $this->logo_url = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = \GoCardlessSDK\Enums\Institution\Status::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
