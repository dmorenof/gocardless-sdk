<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs\InstalmentSchedule;

/**
 * InstalmentSchedulePaymentErrors
 *
 * If the status is `creation_failed`, this property will be populated with validation
 * failures from the individual payments, arranged by the index of the payment that
 * failed.
 *
 * Example: [[{"field":"charge_date","message":"must be on or after mandate's next_possible_customer_charge_date"}]]
 */
final class PaymentErrors extends \Dmorenof\SdkRuntime\DTO
{
}
