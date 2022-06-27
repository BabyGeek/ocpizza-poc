<?php

namespace App\Enums;

use BenSampo\Enum\Enum;


/**
 * @method static static CUSTOMER()
 * @method static static SHOP_MANAGER()
 * @method static static DELIVERY_MAN()
 * @method static static PIZZAIOLO()
 * @method static static COMMERCIAL()
 */
final class UserRole extends Enum
{
    const CUSTOMER =   0;
    const COMMERCIAL =   1;
    const DELIVERY_MAN = 2;
    const PIZZAIOLO = 3;
    const SHOP_MANAGER = 4;
}
