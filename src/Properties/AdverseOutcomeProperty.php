<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * A possible complication and/or side effect of this therapy. If it is known that an adverse outcome is serious (resulting in death, disability, or permanent damage; requiring hospitalization; or is otherwise life-threatening or requires immediate medical attention), tag it as a seriouseAdverseOutcome instead.
 */
class AdverseOutcomeProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/adverseOutcome';
    const PROPERTY_NAME = 'adverseOutcome';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/MedicalTherapy',
        'http://schema.org/MedicalDevice',
    ];
}
