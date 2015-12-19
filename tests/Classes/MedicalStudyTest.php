<?php
namespace NilPortugues\Tests\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Classes\MedicalStudy;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes MedicalStudyTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class MedicalStudyTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(MedicalStudy::schemaUrl(), "http://schema.org/MedicalStudy");
    }

    public function testAdditionalTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalStudy::additionalType());
    }

    public function testAlternateNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalStudy::alternateName());
    }

    public function testDescriptionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalStudy::description());
    }

    public function testImageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalStudy::image());
    }

    public function testMainEntityOfPageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalStudy::mainEntityOfPage());
    }

    public function testNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalStudy::name());
    }

    public function testOutcomeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalStudy::outcome());
    }

    public function testPopulationWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalStudy::population());
    }

    public function testPotentialActionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalStudy::potentialAction());
    }

    public function testSameAsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalStudy::sameAs());
    }

    public function testSponsorWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalStudy::sponsor());
    }

    public function testStatusWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalStudy::status());
    }

    public function testStudyLocationWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalStudy::studyLocation());
    }

    public function testStudySubjectWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalStudy::studySubject());
    }

    public function testUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalStudy::url());
    }
}