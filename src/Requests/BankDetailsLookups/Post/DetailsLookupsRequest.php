<?php

declare(strict_types=1);

namespace GoCardlessSDK\Requests\BankDetailsLookups\Post;

final class DetailsLookupsRequest extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The account holder name associated with the account number (if available). If provided and the country code is GB, a payer name verification will be performed.
     */
    public ?string $account_holder_name;
    /**
     * Bank account number - see [local details](https://docs.gocardless.com/docs/api-reference/local-bank-details) for more information. Alternatively you can provide an `iban`.
     */
    public ?string $account_number;
    /**
     * Bank code - see [local details](https://docs.gocardless.com/docs/api-reference/local-bank-details) for more information. Alternatively you can provide an `iban`.
     */
    public ?string $bank_code;
    /**
     * Branch code - see [local details](https://docs.gocardless.com/docs/api-reference/local-bank-details) for more information. Alternatively you can provide an `iban`.
     */
    public ?string $branch_code;
    /**
     * [ISO 3166-1](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2#Officially_assigned_code_elements) alpha-2 code. Must be provided if specifying local details.
     */
    public ?string $country_code;
    /**
     * International Bank Account Number. Alternatively you can provide [local details](https://docs.gocardless.com/docs/api-reference/local-bank-details).
     */
    public ?string $iban;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'account_holder_name' => $value === null || is_string($value) ? $this->account_holder_name = $value : parent::assignMember($name, $value),
            'account_number' => $value === null || is_string($value) ? $this->account_number = $value : parent::assignMember($name, $value),
            'bank_code' => $value === null || is_string($value) ? $this->bank_code = $value : parent::assignMember($name, $value),
            'branch_code' => $value === null || is_string($value) ? $this->branch_code = $value : parent::assignMember($name, $value),
            'country_code' => $value === null || is_string($value) ? $this->country_code = $value : parent::assignMember($name, $value),
            'iban' => $value === null || is_string($value) ? $this->iban = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
