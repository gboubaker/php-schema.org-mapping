<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * An offer to provide this item&#x2014;for example, an offer to sell a product, rent the DVD of a movie, perform a service, or give away tickets to an event.
 */
class OffersProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/offers';
    const PROPERTY_NAME = 'offers';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/CreativeWork',
        'http://schema.org/Event',
        'http://schema.org/Product',
        'http://schema.org/Service',
        'http://schema.org/AggregateOffer',
    ];
}
