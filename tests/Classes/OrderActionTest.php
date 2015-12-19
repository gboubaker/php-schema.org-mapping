<?php
namespace NilPortugues\Tests\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Classes\OrderAction;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes OrderActionTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class OrderActionTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(OrderAction::schemaUrl(), "http://schema.org/OrderAction");
    }

    public function testActionStatusWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, OrderAction::actionStatus());
    }

    public function testAgentWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, OrderAction::agent());
    }

    public function testDeliveryMethodWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, OrderAction::deliveryMethod());
    }

    public function testEndTimeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, OrderAction::endTime());
    }

    public function testErrorWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, OrderAction::error());
    }

    public function testInstrumentWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, OrderAction::instrument());
    }

    public function testLocationWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, OrderAction::location());
    }

    public function testObjectTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, OrderAction::objectType());
    }

    public function testParticipantWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, OrderAction::participant());
    }

    public function testResultWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, OrderAction::result());
    }

    public function testStartTimeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, OrderAction::startTime());
    }

    public function testTargetWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, OrderAction::target());
    }
}