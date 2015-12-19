<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The quantity produced by the recipe (for example, number of people served, number of servings, etc).
 */
class RecipeYieldProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/recipeYield';
    const PROPERTY_NAME = 'recipeYield';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Recipe',
    ];
}