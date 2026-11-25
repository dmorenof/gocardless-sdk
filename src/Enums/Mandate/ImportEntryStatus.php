<?php

declare(strict_types=1);

namespace GoCardlessSDK\Enums\Mandate;

enum ImportEntryStatus: string
{
    case SuccessfullyProcessed = 'successfully_processed';
    case UnsuccessfullyProcessed = 'unsuccessfully_processed';
}
