<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Other co-agents that participated in the action indirectly. e.g. John wrote a book with *Steve*.
 */
class ParticipantProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/participant';
    const PROPERTY_NAME = 'participant';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Action',
    ];
}