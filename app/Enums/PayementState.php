<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static AWAITING()
 * @method static static PAYED()
 * @method static static CANCELED()
 * @method static static ERROR()
 */
final class PayementState extends Enum
{
    const AWAITING =   0;
    const PAYED =   1;
    const CANCELED = 2;
    const ERROR = 3;
}
