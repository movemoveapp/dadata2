<?php

namespace MoveMoveApp\DaData2\Enums\Phone;

use MoveMoveApp\DaData2\Enums\Enum;

enum PhoneType: string
{
    use Enum;

    case Mobile         = 'Мобильный';
    case Stationary     = 'Стационарный';
    case DirectMobile   = 'Прямой мобильный';
    case CallCenter     = 'Колл-центр';
    case Unknown        = 'Неизвестный';
}
