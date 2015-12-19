<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * An event that this event is a part of. For example, a collection of individual music performances might each have a music festival as their superEvent.
 */
class SuperEventProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/superEvent';
    const PROPERTY_NAME = 'superEvent';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Event',
    ];
}
