<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The count of total number of reviews.
 */
class ReviewCountProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/reviewCount';
    const PROPERTY_NAME = 'reviewCount';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/AggregateRating',
    ];
}