<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Source of the data used to formulate the guidance, e.g. RCT, consensus opinion, etc.
 */
class EvidenceOriginProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/evidenceOrigin';
    const PROPERTY_NAME = 'evidenceOrigin';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/MedicalGuideline',
    ];
}
