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
 * An intended audience, i.e. a group for whom something was created.
 */
class AudienceProperty extends SchemaProperty
{
    const SCHEMA_URL = 'http://schema.org/audience';
    const PROPERTY_NAME = 'audience';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/CreativeWork',
        'http://schema.org/Product',
        'http://schema.org/PlayAction',
    ];
}
