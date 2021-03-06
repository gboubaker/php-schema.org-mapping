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

use NilPortugues\SchemaOrg\Classes\UserPlays;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes UserPlaysTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class UserPlaysTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(UserPlays::schemaUrl(), "http://schema.org/UserPlays");
    }

    public function testAdditionalTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, UserPlays::additionalType());
    }

    public function testAggregateRatingWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, UserPlays::aggregateRating());
    }

    public function testAlternateNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, UserPlays::alternateName());
    }

    public function testAttendeeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, UserPlays::attendee());
    }

    public function testAttendeesWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, UserPlays::attendees());
    }

    public function testDescriptionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, UserPlays::description());
    }

    public function testDoorTimeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, UserPlays::doorTime());
    }

    public function testDurationWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, UserPlays::duration());
    }

    public function testEndDateWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, UserPlays::endDate());
    }

    public function testEventStatusWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, UserPlays::eventStatus());
    }

    public function testImageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, UserPlays::image());
    }

    public function testInLanguageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, UserPlays::inLanguage());
    }

    public function testLocationWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, UserPlays::location());
    }

    public function testMainEntityOfPageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, UserPlays::mainEntityOfPage());
    }

    public function testNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, UserPlays::name());
    }

    public function testOffersWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, UserPlays::offers());
    }

    public function testOrganizerWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, UserPlays::organizer());
    }

    public function testPerformerWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, UserPlays::performer());
    }

    public function testPerformersWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, UserPlays::performers());
    }

    public function testPotentialActionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, UserPlays::potentialAction());
    }

    public function testPreviousStartDateWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, UserPlays::previousStartDate());
    }

    public function testRecordedInWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, UserPlays::recordedIn());
    }

    public function testReviewWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, UserPlays::review());
    }

    public function testSameAsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, UserPlays::sameAs());
    }

    public function testStartDateWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, UserPlays::startDate());
    }

    public function testSubEventWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, UserPlays::subEvent());
    }

    public function testSubEventsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, UserPlays::subEvents());
    }

    public function testSuperEventWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, UserPlays::superEvent());
    }

    public function testTypicalAgeRangeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, UserPlays::typicalAgeRange());
    }

    public function testUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, UserPlays::url());
    }

    public function testWorkFeaturedWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, UserPlays::workFeatured());
    }

    public function testWorkPerformedWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, UserPlays::workPerformed());
    }
}