<?php

declare(strict_types=1);

namespace GoCardlessSDK\Requests\Blocks\BlockByRef\Post;

final class BlockByRefBlocksRequest extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Shows if the block is active or disabled. Only active blocks will be used when deciding
     * if a mandate should be blocked.
     */
    public ?bool $active;
    /**
     * This field is required if the reason_type is other. It should be a description of
     * the reason for why you wish to block this payer and why it does not align with the
     * given reason_types. This is intended to help us improve our knowledge of types of
     * fraud.
     */
    public ?string $reason_description;
    public \GoCardlessSDK\Enums\Block\ReasonType $reason_type;
    public \GoCardlessSDK\Enums\Block\ReferenceType $reference_type;
    /**
     * This field is a reference to the entity you wish to block based on its emails
     * and bank accounts. This may be the ID of a customer or a mandate. This means in
     * order to block by reference the entity must have already been created as a
     * resource.
     */
    public string $reference_value;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'active' => $value === null || is_bool($value) ? $this->active = $value : parent::assignMember($name, $value),
            'reason_description' => $value === null || is_string($value) ? $this->reason_description = $value : parent::assignMember($name, $value),
            'reason_type' => is_string($value) ? $this->reason_type = \GoCardlessSDK\Enums\Block\ReasonType::from($value) : parent::assignMember($name, $value),
            'reference_type' => is_string($value) ? $this->reference_type = \GoCardlessSDK\Enums\Block\ReferenceType::from($value) : parent::assignMember($name, $value),
            'reference_value' => is_string($value) ? $this->reference_value = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
