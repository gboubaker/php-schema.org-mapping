<?php
/**
 * Author: Nil Portugués Calderó <contact@nilportugues.com>
 * Date: 12/18/15
 * Time: 11:36 PM.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace NilPortugues\Tests\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Classes\EducationalAudience;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes EducationalAudienceTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class EducationalAudienceTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(EducationalAudience::schemaUrl(), "http://schema.org/EducationalAudience");
    }

    public function testAdditionalTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, EducationalAudience::additionalType());
    }

    public function testAlternateNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, EducationalAudience::alternateName());
    }

    public function testAudienceTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, EducationalAudience::audienceType());
    }

    public function testDescriptionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, EducationalAudience::description());
    }

    public function testEducationalRoleWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, EducationalAudience::educationalRole());
    }

    public function testGeographicAreaWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, EducationalAudience::geographicArea());
    }

    public function testImageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, EducationalAudience::image());
    }

    public function testMainEntityOfPageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, EducationalAudience::mainEntityOfPage());
    }

    public function testNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, EducationalAudience::name());
    }

    public function testPotentialActionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, EducationalAudience::potentialAction());
    }

    public function testSameAsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, EducationalAudience::sameAs());
    }

    public function testUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, EducationalAudience::url());
    }
}