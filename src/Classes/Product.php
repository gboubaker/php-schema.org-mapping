<?php

namespace NilPortugues\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Mapping;
use NilPortugues\SchemaOrg\Properties\AdditionalPropertyProperty;
use NilPortugues\SchemaOrg\Properties\AggregateRatingProperty;
use NilPortugues\SchemaOrg\Properties\AudienceProperty;
use NilPortugues\SchemaOrg\Properties\AwardProperty;
use NilPortugues\SchemaOrg\Properties\AwardsProperty;
use NilPortugues\SchemaOrg\Properties\BrandProperty;
use NilPortugues\SchemaOrg\Properties\CategoryProperty;
use NilPortugues\SchemaOrg\Properties\ColorProperty;
use NilPortugues\SchemaOrg\Properties\DepthProperty;
use NilPortugues\SchemaOrg\Properties\Gtin12Property;
use NilPortugues\SchemaOrg\Properties\Gtin13Property;
use NilPortugues\SchemaOrg\Properties\Gtin14Property;
use NilPortugues\SchemaOrg\Properties\Gtin8Property;
use NilPortugues\SchemaOrg\Properties\HeightProperty;
use NilPortugues\SchemaOrg\Properties\IsAccessoryOrSparePartForProperty;
use NilPortugues\SchemaOrg\Properties\IsConsumableForProperty;
use NilPortugues\SchemaOrg\Properties\IsRelatedToProperty;
use NilPortugues\SchemaOrg\Properties\IsSimilarToProperty;
use NilPortugues\SchemaOrg\Properties\ItemConditionProperty;
use NilPortugues\SchemaOrg\Properties\LogoProperty;
use NilPortugues\SchemaOrg\Properties\ManufacturerProperty;
use NilPortugues\SchemaOrg\Properties\ModelProperty;
use NilPortugues\SchemaOrg\Properties\MpnProperty;
use NilPortugues\SchemaOrg\Properties\OffersProperty;
use NilPortugues\SchemaOrg\Properties\ProductIDProperty;
use NilPortugues\SchemaOrg\Properties\ProductionDateProperty;
use NilPortugues\SchemaOrg\Properties\PurchaseDateProperty;
use NilPortugues\SchemaOrg\Properties\ReleaseDateProperty;
use NilPortugues\SchemaOrg\Properties\ReviewProperty;
use NilPortugues\SchemaOrg\Properties\ReviewsProperty;
use NilPortugues\SchemaOrg\Properties\SkuProperty;
use NilPortugues\SchemaOrg\Properties\WeightProperty;
use NilPortugues\SchemaOrg\Properties\WidthProperty;

/**
 * Classes Product.
 */
class Product
{
    /**
     * @var string
     */
    private static $schemaUrl = 'http://schema.org/Product';

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
    public static function additionalProperty()
    {
        return AdditionalPropertyProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function aggregateRating()
    {
        return AggregateRatingProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function audience()
    {
        return AudienceProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function award()
    {
        return AwardProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function awards()
    {
        return AwardsProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function brand()
    {
        return BrandProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function category()
    {
        return CategoryProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function color()
    {
        return ColorProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function depth()
    {
        return DepthProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function gtin12()
    {
        return Gtin12Property::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function gtin13()
    {
        return Gtin13Property::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function gtin14()
    {
        return Gtin14Property::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function gtin8()
    {
        return Gtin8Property::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function height()
    {
        return HeightProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function isAccessoryOrSparePartFor()
    {
        return IsAccessoryOrSparePartForProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function isConsumableFor()
    {
        return IsConsumableForProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function isRelatedTo()
    {
        return IsRelatedToProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function isSimilarTo()
    {
        return IsSimilarToProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function itemCondition()
    {
        return ItemConditionProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function logo()
    {
        return LogoProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function manufacturer()
    {
        return ManufacturerProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function model()
    {
        return ModelProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function mpn()
    {
        return MpnProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function offers()
    {
        return OffersProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function productID()
    {
        return ProductIDProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function productionDate()
    {
        return ProductionDateProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function purchaseDate()
    {
        return PurchaseDateProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function releaseDate()
    {
        return ReleaseDateProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function review()
    {
        return ReviewProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function reviews()
    {
        return ReviewsProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function sku()
    {
        return SkuProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function weight()
    {
        return WeightProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function width()
    {
        return WidthProperty::create(self::schemaUrl());
    }
}
