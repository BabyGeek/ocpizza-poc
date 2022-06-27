<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static BILLING()
 * @method static static DELIVERY()
 * @method static static BILLING_AND_DELIVERY()
 * @method static static LOCATION()
 */

final class AddressType extends Enum
{
    const BILLING =   0;
    const DELIVERY =   1;
    const BILLING_AND_DELIVERY = 2;
    const LOCATION = 3;
}
