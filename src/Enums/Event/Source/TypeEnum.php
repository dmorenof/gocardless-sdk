<?php

declare(strict_types=1);

namespace GoCardlessSDK\Enums\Event\Source;

enum TypeEnum: string
{
    case AccessToken = 'access_token';
    case App = 'app';
    case BillingRequest = 'billing_request';
    case BillingRequestFlow = 'billing_request_flow';
    case Dropin = 'dropin';
    case GcTeam = 'gc_team';
    case HostedPaymentPage = 'hosted_payment_page';
    case User = 'user';
}
