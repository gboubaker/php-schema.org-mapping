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
 * Specifies browser requirements in human-readable text. For example,"requires HTML5 support".
 */
class BrowserRequirementsProperty extends SchemaProperty
{
    const SCHEMA_URL = 'http://schema.org/browserRequirements';
    const PROPERTY_NAME = 'browserRequirements';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/WebApplication',
    ];
}
