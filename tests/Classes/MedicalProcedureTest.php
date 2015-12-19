<?php
namespace NilPortugues\Tests\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Classes\MedicalProcedure;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes MedicalProcedureTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class MedicalProcedureTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(MedicalProcedure::schemaUrl(), "http://schema.org/MedicalProcedure");
    }

    public function testAdditionalTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalProcedure::additionalType());
    }

    public function testAlternateNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalProcedure::alternateName());
    }

    public function testDescriptionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalProcedure::description());
    }

    public function testFollowupWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalProcedure::followup());
    }

    public function testHowPerformedWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalProcedure::howPerformed());
    }

    public function testImageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalProcedure::image());
    }

    public function testMainEntityOfPageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalProcedure::mainEntityOfPage());
    }

    public function testNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalProcedure::name());
    }

    public function testPotentialActionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalProcedure::potentialAction());
    }

    public function testPreparationWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalProcedure::preparation());
    }

    public function testProcedureTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalProcedure::procedureType());
    }

    public function testSameAsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalProcedure::sameAs());
    }

    public function testUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalProcedure::url());
    }
}