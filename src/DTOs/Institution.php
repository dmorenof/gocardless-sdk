<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs;

/**
 * Institutions
 *
 * Institutions that are supported when creating [Bank Authorisations](https://docs.gocardless.com/docs/api-reference/bank-authorisation) for a particular country or purpose.
 *
 * Not all institutions support both Payment Initiation (PIS) and Account Information (AIS) services.
 */
final class Institution extends \Dmorenof\SdkRuntime\DTO
{
    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

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
    public \GoCardlessSDK\DTOs\Institution\Limits $limits;
    /**
     * A URL pointing to the logo for this institution
     */
    public string $logo_url;
    /**
     * A human readable name for this institution
     */
    public string $name;
    /**
     * The roles assigned to this institution, representing the open banking features it supports.
     */
    public \GoCardlessSDK\Collections\StringCollection $roles;
    public \GoCardlessSDK\Enums\Institution\Status $status;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'country_code' => is_string($value) ? $this->country_code = $value : parent::assignMember($name, $value),
            'icon_url' => is_string($value) ? $this->icon_url = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'limits' => $value instanceof \stdClass ? $this->limits = new \GoCardlessSDK\DTOs\Institution\Limits($value) : parent::assignMember($name, $value),
            'logo_url' => is_string($value) ? $this->logo_url = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'roles' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->roles = new \GoCardlessSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = \GoCardlessSDK\Enums\Institution\Status::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
