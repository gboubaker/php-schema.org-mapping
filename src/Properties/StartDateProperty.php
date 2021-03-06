<?php
/**
 * Author: Nil Portugués Calderó <contact@nilportugues.com>
 * Date: 12/18/15
 * Time: 11:36 PM.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\SchemaProperty;

/**
 * The start date and time of the item (in ISO 8601 date format).
 */
class StartDateProperty extends SchemaProperty
{
    const SCHEMA_URL = 'http://schema.org/startDate';
    const PROPERTY_NAME = 'startDate';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Role',
        'http://schema.org/Event',
        'http://schema.org/CreativeWorkSeason',
        'http://schema.org/CreativeWorkSeries',
    ];
}
