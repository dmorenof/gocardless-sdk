<?php

declare(strict_types=1);

namespace GoCardlessSDK\Requests\VerificationDetails\Post;

final class VerificationDetailsRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'address_line1',
        'city',
        'company_number',
        'description',
        'directors',
        'links',
        'name',
        'postal_code',
    ];

    /**
     * The first line of the company's address.
     */
    public string $address_line1;
    /**
     * The second line of the company's address.
     */
    public ?string $address_line2;
    /**
     * The third line of the company's address.
     */
    public ?string $address_line3;
    /**
     * The city of the company's address.
     */
    public string $city;
    /**
     * The company's registration number.
     */
    public string $company_number;
    /**
     * A summary describing what the company does.
     */
    public string $description;
    /**
     * The company's directors.
     */
    public \GoCardlessSDK\Collections\VerificationDetail\DirectorsCollection $directors;
    public \GoCardlessSDK\Requests\VerificationDetails\Post\VerificationDetails\DetailsLinksRequest $links;
    /**
     * The company's legal name.
     */
    public string $name;
    /**
     * The company's postal code.
     */
    public string $postal_code;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'address_line1' => is_string($value) ? $this->address_line1 = $value : parent::assignMember($name, $value),
            'address_line2' => $value === null || is_string($value) ? $this->address_line2 = $value : parent::assignMember($name, $value),
            'address_line3' => $value === null || is_string($value) ? $this->address_line3 = $value : parent::assignMember($name, $value),
            'city' => is_string($value) ? $this->city = $value : parent::assignMember($name, $value),
            'company_number' => is_string($value) ? $this->company_number = $value : parent::assignMember($name, $value),
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'directors' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->directors = new \GoCardlessSDK\Collections\VerificationDetail\DirectorsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \GoCardlessSDK\DTOs\VerificationDetail\Director::class)) : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'postal_code' => is_string($value) ? $this->postal_code = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
