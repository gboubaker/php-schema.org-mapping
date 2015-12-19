<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Any precaution, guidance, contraindication, etc. related to this drug's use by breastfeeding mothers.
 */
class BreastfeedingWarningProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/breastfeedingWarning';
    const PROPERTY_NAME = 'breastfeedingWarning';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Drug',
    ];
}