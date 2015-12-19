<?php

namespace NilPortugues\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Mapping;
use NilPortugues\SchemaOrg\Properties\DropoffLocationProperty;
use NilPortugues\SchemaOrg\Properties\DropoffTimeProperty;
use NilPortugues\SchemaOrg\Properties\PickupLocationProperty;
use NilPortugues\SchemaOrg\Properties\PickupTimeProperty;

/**
 * Classes RentalCarReservation.
 */
class RentalCarReservation
{
    /**
     * @var string
     */
    private static $schemaUrl = 'http://schema.org/RentalCarReservation';

    /**
     * Returns the URL of the current definition at http://schema.org.
     *
     * @return string
     */
    public static function schemaUrl()
    {
        return self::$schemaUrl;
    }

    /**
     * @return Mapping
     */
    public static function dropoffLocation()
    {
        return DropoffLocationProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function dropoffTime()
    {
        return DropoffTimeProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function pickupLocation()
    {
        return PickupLocationProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function pickupTime()
    {
        return PickupTimeProperty::create(self::schemaUrl());
    }
}
