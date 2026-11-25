<?php

declare(strict_types=1);

namespace GoCardlessSDK\Requests\Blocks\Post;

final class BlocksBlocksRequest extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Shows if the block is active or disabled. Only active blocks will be used when deciding
     * if a mandate should be blocked.
     */
    public ?bool $active;
    public \GoCardlessSDK\Enums\Block\BlockType $block_type;
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

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'active' => $value === null || is_bool($value) ? $this->active = $value : parent::assignMember($name, $value),
            'block_type' => is_string($value) ? $this->block_type = \GoCardlessSDK\Enums\Block\BlockType::from($value) : parent::assignMember($name, $value),
            'reason_description' => $value === null || is_string($value) ? $this->reason_description = $value : parent::assignMember($name, $value),
            'reason_type' => is_string($value) ? $this->reason_type = \GoCardlessSDK\Enums\Block\ReasonType::from($value) : parent::assignMember($name, $value),
            'resource_reference' => is_string($value) ? $this->resource_reference = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
