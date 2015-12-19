<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The range of spatial applicability of a dataset, e.g. for a dataset of New York weather, the state of New York.
 */
class SpatialProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/spatial';
    const PROPERTY_NAME = 'spatial';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Dataset',
    ];
}