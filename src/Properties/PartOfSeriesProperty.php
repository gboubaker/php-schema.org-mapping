<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The series to which this episode or season belongs.
 */
class PartOfSeriesProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/partOfSeries';
    const PROPERTY_NAME = 'partOfSeries';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Episode',
        'http://schema.org/CreativeWorkSeason',
        'http://schema.org/Clip',
    ];
}
