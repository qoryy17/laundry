<?php

namespace App\Enum;

enum HistoryTypeEnum: string
{
    case POINTUP = 'Point Up';
    case POINTDOWN = 'Point Down';
    case POINTEXP = 'Point Expired';
}
