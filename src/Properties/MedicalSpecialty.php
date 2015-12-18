<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\InvalidSchemaPropertyException;
use NilPortugues\SchemaOrg\MappedProperty;
use NilPortugues\SchemaOrg\Mapping;

class MedicalSpecialty
{
    const SCHEMA_URL = "http://schema.org/medicalSpecialty";
    const PROPERTY_NAME = "medicalSpecialty";

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    private static $allowedSchemas = [
		'http://schema.org/Hospital',
		'http://schema.org/MedicalClinic',
		'http://schema.org/Physician'
    ];

   /**
    * A medical specialty of the provider.
    *
    * @param string $class
    *
    * @return Mapping
    */
    public static function create($class)
    {
        self::guardAllowedSchemaClasses($class);

        return MappedProperty::create($class, self::PROPERTY_NAME, self::SCHEMA_URL);
    }

   /**
    * @param string $class
    *
    * @throws InvalidSchemaPropertyException
    */
    private static function guardAllowedSchemaClasses($class) {

        if (false === empty(self::$allowedSchemas) && false === in_array($class, self::$allowedSchemas, true)) {
            throw new InvalidSchemaPropertyException(self::PROPERTY_NAME, $class);
        }
    }
}