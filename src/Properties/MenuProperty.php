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
 * Either the actual menu or a URL of the menu.
 */
class MenuProperty extends SchemaProperty
{
    const SCHEMA_URL = 'http://schema.org/menu';
    const PROPERTY_NAME = 'menu';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/FoodEstablishment',
    ];
}
