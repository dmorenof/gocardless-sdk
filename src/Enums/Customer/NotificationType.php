<?php

declare(strict_types=1);

namespace GoCardlessSDK\Enums\Customer;

enum NotificationType: string
{
    case InstalmentScheduleCancelled = 'instalment_schedule_cancelled';
    case InstalmentScheduleCreated = 'instalment_schedule_created';
    case MandateBlocked = 'mandate_blocked';
    case MandateCreated = 'mandate_created';
    case PaymentCancelled = 'payment_cancelled';
    case PaymentCreated = 'payment_created';
    case SubscriptionCancelled = 'subscription_cancelled';
    case SubscriptionCreated = 'subscription_created';
}
