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
 * An underlying cause. More specifically, one of the causative agent(s) that are most directly responsible for the pathophysiologic process that eventually results in the occurrence.
 */
class CauseProperty extends SchemaProperty
{
    const SCHEMA_URL = 'http://schema.org/cause';
    const PROPERTY_NAME = 'cause';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/MedicalCondition',
        'http://schema.org/MedicalSignOrSymptom',
    ];
}
