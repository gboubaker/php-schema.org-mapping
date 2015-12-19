<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The Stock Keeping Unit (SKU), i.e. a merchant-specific identifier for a product or service, or the product to which the offer refers.
 */
class SkuProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/sku';
    const PROPERTY_NAME = 'sku';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Offer',
        'http://schema.org/Product',
        'http://schema.org/Demand',
    ];
}
