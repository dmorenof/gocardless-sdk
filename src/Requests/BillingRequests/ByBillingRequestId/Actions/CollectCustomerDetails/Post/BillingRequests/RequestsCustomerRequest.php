<?php

declare(strict_types=1);

namespace GoCardlessSDK\Requests\BillingRequests\ByBillingRequestId\Actions\CollectCustomerDetails\Post\BillingRequests;

final class RequestsCustomerRequest extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'company_name' => [
            'maxLength' => 255,
        ],
        'email' => [
            'maxLength' => 255,
        ],
        'family_name' => [
            'maxLength' => 255,
        ],
        'given_name' => [
            'maxLength' => 255,
        ],
        'phone_number' => [
            'maxLength' => 30,
        ],
    ];

    /**
     * Customer's company name. Required unless a `given_name` and `family_name` are provided. For Canadian customers, the use of a `company_name` value will mean that any mandate created from this customer will be considered to be a "Business PAD" (otherwise, any mandate will be considered to be a "Personal PAD").
     */
    public ?string $company_name {
        set {
            $this->assigning('company_name', $value);
            $this->company_name = $value;
        }
    }
    /**
     * Customer's email address. Required in most cases, as this allows GoCardless to send notifications to this customer.
     */
    public ?string $email {
        set {
            $this->assigning('email', $value);
            $this->email = $value;
        }
    }
    /**
     * Customer's surname. Required unless a `company_name` is provided.
     */
    public ?string $family_name {
        set {
            $this->assigning('family_name', $value);
            $this->family_name = $value;
        }
    }
    /**
     * Customer's first name. Required unless a `company_name` is provided.
     */
    public ?string $given_name {
        set {
            $this->assigning('given_name', $value);
            $this->given_name = $value;
        }
    }
    /**
     *  [ISO 639-1](https://en.wikipedia.org/wiki/List_of_ISO_639-1_codes) code. Used as the language for notification emails sent by GoCardless if your organisation does not send its own (see [compliance requirements](https://docs.gocardless.com/docs/api-reference/compliance-requirements)). Currently only "en", "fr", "de", "pt", "es", "it", "nl", "da", "nb", "sl", "sv" are supported. If this is not provided and a customer was linked during billing request creation, the linked customer language will be used. Otherwise, the language is default to "en".
     * Example: "en"
     */
    public ?string $language;
    public \GoCardlessSDK\DTOs\Customer\Metadata $metadata;
    /**
     * [ITU E.123](https://en.wikipedia.org/wiki/E.123) formatted phone number, including country code.
     */
    public ?string $phone_number {
        set {
            $this->assigning('phone_number', $value);
            $this->phone_number = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'company_name' => $value === null || is_string($value) ? $this->company_name = $value : parent::assignMember($name, $value),
            'email' => $value === null || is_string($value) ? $this->email = $value : parent::assignMember($name, $value),
            'family_name' => $value === null || is_string($value) ? $this->family_name = $value : parent::assignMember($name, $value),
            'given_name' => $value === null || is_string($value) ? $this->given_name = $value : parent::assignMember($name, $value),
            'language' => $value === null || is_string($value) ? $this->language = $value : parent::assignMember($name, $value),
            'phone_number' => $value === null || is_string($value) ? $this->phone_number = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
