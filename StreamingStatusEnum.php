<?php

namespace App\Enums;

enum StreamingStatusEnum: string
{
    case PROCESSING = 'processing';
    case COMPLETED = 'completed';
    case CANCELED = 'canceled';
}
