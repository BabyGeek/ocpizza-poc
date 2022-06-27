<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static PENDING()
 * @method static static PREPARING()
 * @method static static PREPARED()
 * @method static static IN_DELIVERY()
 * @method static static CANCELED()
 * @method static static DELIVERED()
 * @method static static DONE()
 */
final class OrderState extends Enum
{
    const PENDING =   0;
    const PREPARING =   1;
    const PREPARED = 2;
    const IN_DELIVERY = 3;
    const CANCELED = 4;
    const DELIVERED = 5;
    const DONE = 6;
}
