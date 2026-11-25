<?php

declare(strict_types=1);

namespace GoCardlessSDK\Enums\Customer;

enum SortField: string
{
    case CompanyName = 'company_name';
    case CreatedAt = 'created_at';
    case Name = 'name';
}
