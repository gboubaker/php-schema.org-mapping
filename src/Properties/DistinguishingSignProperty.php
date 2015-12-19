<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * One of a set of signs and symptoms that can be used to distinguish this diagnosis from others in the differential diagnosis.
 */
class DistinguishingSignProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/distinguishingSign';
    const PROPERTY_NAME = 'distinguishingSign';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/DDxElement',
    ];
}