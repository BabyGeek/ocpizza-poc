<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static PAYEMENT()
 * @method static static CREDIT()
 * @method static static REPAYEMENT()
 */
final class PayementType extends Enum
{
    const PAYEMENT =   0;
    const CREDIT =   1;
    const REPAYEMENT = 2;
}
