<?php
namespace NilPortugues\Tests\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Classes\GeoCoordinates;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes GeoCoordinatesTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class GeoCoordinatesTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(GeoCoordinates::schemaUrl(), "http://schema.org/GeoCoordinates");
    }

    public function testAddressWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, GeoCoordinates::address());
    }

    public function testAddressCountryWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, GeoCoordinates::addressCountry());
    }

    public function testElevationWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, GeoCoordinates::elevation());
    }

    public function testLatitudeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, GeoCoordinates::latitude());
    }

    public function testLongitudeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, GeoCoordinates::longitude());
    }

    public function testPostalCodeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, GeoCoordinates::postalCode());
    }
}