<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The target group associated with a given audience (e.g. veterans, car owners, musicians, etc.).
 */
class AudienceTypeProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/audienceType';
    const PROPERTY_NAME = 'audienceType';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Audience',
    ];
}
