<?php
namespace NilPortugues\Tests\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Classes\GeoCircle;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes GeoCircleTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class GeoCircleTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(GeoCircle::schemaUrl(), "http://schema.org/GeoCircle");
    }

    public function testAdditionalTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, GeoCircle::additionalType());
    }

    public function testAlternateNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, GeoCircle::alternateName());
    }

    public function testDescriptionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, GeoCircle::description());
    }

    public function testGeoMidpointWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, GeoCircle::geoMidpoint());
    }

    public function testGeoRadiusWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, GeoCircle::geoRadius());
    }

    public function testImageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, GeoCircle::image());
    }

    public function testMainEntityOfPageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, GeoCircle::mainEntityOfPage());
    }

    public function testNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, GeoCircle::name());
    }

    public function testPotentialActionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, GeoCircle::potentialAction());
    }

    public function testSameAsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, GeoCircle::sameAs());
    }

    public function testUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, GeoCircle::url());
    }
}