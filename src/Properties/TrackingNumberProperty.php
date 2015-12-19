<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Shipper tracking number.
 */
class TrackingNumberProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/trackingNumber';
    const PROPERTY_NAME = 'trackingNumber';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/ParcelDelivery',
    ];
}
