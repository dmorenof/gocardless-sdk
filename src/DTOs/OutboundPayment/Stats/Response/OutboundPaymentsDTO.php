<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs\OutboundPayment\Stats\Response;

final class OutboundPaymentsDTO extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The amount sum of outbound payments with status `executing`.
     */
    public int $executing_amount;
    /**
     * The number of outbound payments with status `executing`.
     */
    public int $executing_count;
    /**
     * The amount sum of outbound payments with status `pending_approval`.
     */
    public int $pending_approval_amount;
    /**
     * The number of outbound payments with status `pending_approval`.
     */
    public int $pending_approval_count;
    /**
     * The amount sum of outbound payments with status `scheduled`.
     */
    public int $scheduled_amount;
    /**
     * The number of outbound payments with status `scheduled`.
     */
    public int $scheduled_count;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'executing_amount' => is_int($value) ? $this->executing_amount = $value : parent::assignMember($name, $value),
            'executing_count' => is_int($value) ? $this->executing_count = $value : parent::assignMember($name, $value),
            'pending_approval_amount' => is_int($value) ? $this->pending_approval_amount = $value : parent::assignMember($name, $value),
            'pending_approval_count' => is_int($value) ? $this->pending_approval_count = $value : parent::assignMember($name, $value),
            'scheduled_amount' => is_int($value) ? $this->scheduled_amount = $value : parent::assignMember($name, $value),
            'scheduled_count' => is_int($value) ? $this->scheduled_count = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
