<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The section location of the reserved seat (e.g. Orchestra).
 */
class SeatSectionProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/seatSection';
    const PROPERTY_NAME = 'seatSection';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Seat',
    ];
}