<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Products owned by the organization or person.
 */
class OwnsProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/owns';
    const PROPERTY_NAME = 'owns';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Organization',
        'http://schema.org/Person',
    ];
}