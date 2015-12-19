<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * A step or instruction involved in making the recipe.
 */
class RecipeInstructionsProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/recipeInstructions';
    const PROPERTY_NAME = 'recipeInstructions';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Recipe',
    ];
}
