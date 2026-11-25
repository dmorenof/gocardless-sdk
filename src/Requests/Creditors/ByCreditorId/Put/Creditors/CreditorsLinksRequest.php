<?php

declare(strict_types=1);

namespace GoCardlessSDK\Requests\Creditors\ByCreditorId\Put\Creditors;

final class CreditorsLinksRequest extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * ID of the [bank account](https://docs.gocardless.com/docs/api-reference/creditor-bank-account) which is set up to receive payouts in AUD.
     * Example: "BA234"
     */
    public ?string $default_aud_payout_account;
    /**
     * ID of the [bank account](https://docs.gocardless.com/docs/api-reference/creditor-bank-account) which is set up to receive payouts in CAD.
     * Example: "BA792"
     */
    public ?string $default_cad_payout_account;
    /**
     * ID of the [bank account](https://docs.gocardless.com/docs/api-reference/creditor-bank-account) which is set up to receive payouts in DKK.
     * Example: "BA790"
     */
    public ?string $default_dkk_payout_account;
    /**
     * ID of the [bank account](https://docs.gocardless.com/docs/api-reference/creditor-bank-account) which is set up to receive payouts in EUR.
     * Example: "BA456"
     */
    public ?string $default_eur_payout_account;
    /**
     * ID of the [bank account](https://docs.gocardless.com/docs/api-reference/creditor-bank-account) which is set up to receive payouts in GBP.
     * Example: "BA123"
     */
    public ?string $default_gbp_payout_account;
    /**
     * ID of the [bank account](https://docs.gocardless.com/docs/api-reference/creditor-bank-account) which is set up to receive payouts in NZD.
     * Example: "BA791"
     */
    public ?string $default_nzd_payout_account;
    /**
     * ID of the [bank account](https://docs.gocardless.com/docs/api-reference/creditor-bank-account) which is set up to receive payouts in SEK.
     * Example: "BA789"
     */
    public ?string $default_sek_payout_account;
    /**
     * ID of the [bank account](https://docs.gocardless.com/docs/api-reference/creditor-bank-account) which is set up to receive payouts in USD.
     * Example: "BA792"
     */
    public ?string $default_usd_payout_account;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'default_aud_payout_account' => $value === null || is_string($value) ? $this->default_aud_payout_account = $value : parent::assignMember($name, $value),
            'default_cad_payout_account' => $value === null || is_string($value) ? $this->default_cad_payout_account = $value : parent::assignMember($name, $value),
            'default_dkk_payout_account' => $value === null || is_string($value) ? $this->default_dkk_payout_account = $value : parent::assignMember($name, $value),
            'default_eur_payout_account' => $value === null || is_string($value) ? $this->default_eur_payout_account = $value : parent::assignMember($name, $value),
            'default_gbp_payout_account' => $value === null || is_string($value) ? $this->default_gbp_payout_account = $value : parent::assignMember($name, $value),
            'default_nzd_payout_account' => $value === null || is_string($value) ? $this->default_nzd_payout_account = $value : parent::assignMember($name, $value),
            'default_sek_payout_account' => $value === null || is_string($value) ? $this->default_sek_payout_account = $value : parent::assignMember($name, $value),
            'default_usd_payout_account' => $value === null || is_string($value) ? $this->default_usd_payout_account = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
