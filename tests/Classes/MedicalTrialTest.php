<?php
namespace NilPortugues\Tests\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Classes\MedicalTrial;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes MedicalTrialTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class MedicalTrialTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(MedicalTrial::schemaUrl(), "http://schema.org/MedicalTrial");
    }

    public function testCodeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalTrial::code());
    }

    public function testGuidelineWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalTrial::guideline());
    }

    public function testMedicineSystemWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalTrial::medicineSystem());
    }

    public function testPhaseWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalTrial::phase());
    }

    public function testRecognizingAuthorityWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalTrial::recognizingAuthority());
    }

    public function testRelevantSpecialtyWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalTrial::relevantSpecialty());
    }

    public function testStudyWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalTrial::study());
    }

    public function testTrialDesignWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalTrial::trialDesign());
    }
}