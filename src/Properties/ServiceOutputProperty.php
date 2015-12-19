<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The tangible thing generated by the service, e.g. a passport, permit, etc.
 */
class ServiceOutputProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/serviceOutput';
    const PROPERTY_NAME = 'serviceOutput';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Service',
    ];
}