<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * An entity which offers (sells / leases / lends / loans) the services / goods.  A seller may also be a provider.
 */
class SellerProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/seller';
    const PROPERTY_NAME = 'seller';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Order',
        'http://schema.org/BuyAction',
        'http://schema.org/Offer',
        'http://schema.org/Demand',
        'http://schema.org/Flight',
    ];
}
