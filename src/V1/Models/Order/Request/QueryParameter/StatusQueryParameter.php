<?php

namespace Entegrator\TrendyolApi\V1\Models\Order\Request\QueryParameter;
class StatusQueryParameter
{
    const CREATED = 'Created';
    const PICKING = 'Picking';
    const INVOICED = 'Invoiced';
    const SHIPPED = 'Shipped';
    const CANCELED = 'Cancelled';
    const DELIVERED = 'Delivered';
    const UNDELIVERED = 'UnDelivered';
    const RETURNED = 'Returned';
    const REPACK = 'Repack';
    const UNPACKED = 'UnPacked';
    const UNSUPPLIED = 'UnSupplied';
}
