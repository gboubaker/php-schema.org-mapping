<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Relates a property to a class that is (one of) the type(s) the property is expected to be used on.
 */
class DomainIncludesProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/domainIncludes';
    const PROPERTY_NAME = 'domainIncludes';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Property',
    ];
}
