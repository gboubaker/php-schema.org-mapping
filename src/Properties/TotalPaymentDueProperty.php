<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The total amount due.
 */
class TotalPaymentDueProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/totalPaymentDue';
    const PROPERTY_NAME = 'totalPaymentDue';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Invoice',
    ];
}
