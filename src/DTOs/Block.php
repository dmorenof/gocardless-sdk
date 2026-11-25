<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs;

/**
 * Blocks
 *
 * Blocks are created to prevent certain customer details from being used when creating
 * mandates.
 *
 * The details used to create blocks can be exact matches, like a bank account or an email,
 * or a more generic match such as an email domain or bank name. Please be careful when creating
 * blocks for more generic matches as this may block legitimate payers from using your service.
 *
 * New block types may be added over time.
 *
 * A block is in essence a simple rule that is used to match against details in a newly
 * created mandate. If there is a successful match then the mandate is transitioned to a
 * "blocked" state.
 *
 * Please note:
 *
 *   - Payments and subscriptions cannot be created against a mandate in blocked state.
 *   - A mandate can never be transitioned out of the blocked state.
 *
 * The one exception to this is when blocking a 'bank_name'. This block will prevent bank
 * accounts from being created for banks that match the given name. To ensure we match
 * bank names correctly an existing bank account must be used when creating this block. Please
 * be aware that we cannot always match a bank account to a given bank name.
 *
 * <p class="notice">
 *   This API is currently only available for GoCardless Protect+ integrators - please <a href="mailto:help&#64;gocardless.com">get in touch</a> if you would like to use this API.
 * </p>
 */
final class Block extends \Dmorenof\SdkRuntime\DTO
{
    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * Shows if the block is active or disabled. Only active blocks will be used when deciding
     * if a mandate should be blocked.
     */
    public ?bool $active;
    public \GoCardlessSDK\Enums\Block\BlockType $block_type;
    /**
     * Fixed [timestamp](https://docs.gocardless.com/docs/api-reference/data-conventions#dates-and-times), recording when this
     * resource was created.
     * Format: date-time
     */
    public string $created_at;
    /**
     * Unique identifier, beginning with "BLC".
     */
    public string $id;
    /**
     * This field is required if the reason_type is other. It should be a description of
     * the reason for why you wish to block this payer and why it does not align with the
     * given reason_types. This is intended to help us improve our knowledge of types of
     * fraud.
     */
    public ?string $reason_description;
    public \GoCardlessSDK\Enums\Block\ReasonType $reason_type;
    /**
     * This field is a reference to the value you wish to block. This may be the raw value
     * (in the case of emails or email domains) or the ID of the resource (in the case of
     * bank accounts and bank names). This means in order to block a specific bank account
     * (even if you wish to block generically by name) it must already have been created as
     * a resource.
     */
    public string $resource_reference;
    /**
     * Fixed [timestamp](https://docs.gocardless.com/docs/api-reference/data-conventions#dates-and-times), recording when this
     * resource was updated.
     * Format: date-time
     */
    public string $updated_at;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'active' => $value === null || is_bool($value) ? $this->active = $value : parent::assignMember($name, $value),
            'block_type' => is_string($value) ? $this->block_type = \GoCardlessSDK\Enums\Block\BlockType::from($value) : parent::assignMember($name, $value),
            'created_at' => is_string($value) ? $this->created_at = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'reason_description' => $value === null || is_string($value) ? $this->reason_description = $value : parent::assignMember($name, $value),
            'reason_type' => is_string($value) ? $this->reason_type = \GoCardlessSDK\Enums\Block\ReasonType::from($value) : parent::assignMember($name, $value),
            'resource_reference' => is_string($value) ? $this->resource_reference = $value : parent::assignMember($name, $value),
            'updated_at' => is_string($value) ? $this->updated_at = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
