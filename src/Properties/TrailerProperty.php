<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The trailer of a movie or tv/radio series, season, episode, etc.
 */
class TrailerProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/trailer';
    const PROPERTY_NAME = 'trailer';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Movie',
        'http://schema.org/Episode',
        'http://schema.org/CreativeWorkSeason',
        'http://schema.org/VideoGame',
        'http://schema.org/VideoGameSeries',
        'http://schema.org/MovieSeries',
        'http://schema.org/RadioSeries',
        'http://schema.org/TVSeries',
    ];
}
