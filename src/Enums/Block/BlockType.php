<?php

declare(strict_types=1);

namespace GoCardlessSDK\Enums\Block;

enum BlockType: string
{
    case BankAccount = 'bank_account';
    case BankName = 'bank_name';
    case Email = 'email';
    case EmailDomain = 'email_domain';
}
