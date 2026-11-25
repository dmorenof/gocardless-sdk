<?php

declare(strict_types=1);

namespace GoCardlessSDK\Requests\MandatePdfs\Post\MandatePdfs;

final class PdfsLinksRequest extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * ID of an existing [creditor](https://docs.gocardless.com/docs/api-reference/creditor). Only required if your account manages multiple creditors.
     */
    public string $creditor;
    /**
     * ID of an existing [mandate](https://docs.gocardless.com/docs/api-reference/mandate) to build the PDF from. The customer's bank details will be censored in the generated PDF. No other parameters may be provided alongside this.
     */
    public string $mandate;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'creditor' => is_string($value) ? $this->creditor = $value : parent::assignMember($name, $value),
            'mandate' => is_string($value) ? $this->mandate = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
