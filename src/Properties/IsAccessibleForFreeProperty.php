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
 * A flag to signal that the publication is accessible for free.
 */
class IsAccessibleForFreeProperty extends SchemaProperty
{
    const SCHEMA_URL = 'http://schema.org/isAccessibleForFree';
    const PROPERTY_NAME = 'isAccessibleForFree';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/PublicationEvent',
    ];
}
