<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs\Payout;

/**
 * Payout Items
 *
 * When we collect a payment on your behalf, we add the money you've collected to your
 * GoCardless balance, minus any fees paid. Periodically (usually every working day),
 * we take any positive balance in your GoCardless account, and pay it out to your
 * nominated bank account.
 *
 * Other actions in your GoCardless account can also affect your balance. For example,
 * if a customer charges back a payment, we'll deduct the payment's amount from your
 * balance, but add any fees you paid for that payment back to your balance.
 *
 * The Payout Items API allows you to view, on a per-payout basis, the credit and debit
 * items that make up that payout's amount.  Payout items can only be retrieved for payouts
 * created in the last 6 months. Requests for older payouts will return an HTTP status
 * <code>410 Gone</code>.
 *
 */
final class Item extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'amount',
        'links',
        'taxes',
        'type',
    ];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * The positive (credit) or negative (debit) value of the item, in fractional currency;
     * the lowest denomination for the currency (e.g. pence in GBP, cents in EUR), to one decimal place.
     * <p class="notice">For accuracy, we store some of our fees to greater precision than we can actually pay out (for example, a GoCardless fee we record might come to 0.5 pence, but it is not possible to send a payout via bank transfer including a half penny).<br><br>To calculate the final amount of the payout, we sum all of the items and then round to the nearest currency unit.</p>
     */
    public string $amount;
    public \GoCardlessSDK\DTOs\Payout\ItemLinks $links;
    /**
     * An array of tax items <em>beta</em>
     *
     * _Note_: VAT applies to transaction and surcharge fees for merchants operating in the UK and France.
     */
    public \GoCardlessSDK\Collections\Payout\Item\TaxesCollection $taxes;
    public \GoCardlessSDK\Enums\Payout\ItemType $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount' => is_string($value) ? $this->amount = $value : parent::assignMember($name, $value),
            'links' => $value instanceof \stdClass ? $this->links = new \GoCardlessSDK\DTOs\Payout\ItemLinks($value) : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \GoCardlessSDK\Enums\Payout\ItemType::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
