<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Responsibilities associated with this role.
 */
class ResponsibilitiesProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/responsibilities';
    const PROPERTY_NAME = 'responsibilities';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/JobPosting',
    ];
}