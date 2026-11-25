<?php

declare(strict_types=1);

namespace GoCardlessSDK\Enums\Event\Details;

enum OriginEnum: string
{
    case Api = 'api';
    case Bank = 'bank';
    case Customer = 'customer';
    case Gocardless = 'gocardless';
    case Payer = 'payer';
}
