<?php

declare(strict_types=1);

namespace GoCardlessSDK\Responses\FundsAvailability\ByMandateId;

final class Get extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Indicates if the amount is available
     */
    public bool $available;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'available' => is_bool($value) ? $this->available = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
