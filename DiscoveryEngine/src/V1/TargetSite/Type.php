<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/discoveryengine/v1/site_search_engine.proto

namespace Google\Cloud\DiscoveryEngine\V1\TargetSite;

use UnexpectedValueException;

/**
 * Possible target site types.
 *
 * Protobuf type <code>google.cloud.discoveryengine.v1.TargetSite.Type</code>
 */
class Type
{
    /**
     * This value is unused. In this case, server behavior defaults to
     * [Type.INCLUDE][google.cloud.discoveryengine.v1.TargetSite.Type.INCLUDE].
     *
     * Generated from protobuf enum <code>TYPE_UNSPECIFIED = 0;</code>
     */
    const TYPE_UNSPECIFIED = 0;
    /**
     * Include the target site.
     *
     * Generated from protobuf enum <code>INCLUDE = 1;</code>
     */
    const PBINCLUDE = 1;
    /**
     * Exclude the target site.
     *
     * Generated from protobuf enum <code>EXCLUDE = 2;</code>
     */
    const EXCLUDE = 2;

    private static $valueToName = [
        self::TYPE_UNSPECIFIED => 'TYPE_UNSPECIFIED',
        self::PBINCLUDE => 'INCLUDE',
        self::EXCLUDE => 'EXCLUDE',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            $pbconst =  __CLASS__. '::PB' . strtoupper($name);
            if (!defined($pbconst)) {
                throw new UnexpectedValueException(sprintf(
                        'Enum %s has no value defined for name %s', __CLASS__, $name));
            }
            return constant($pbconst);
        }
        return constant($const);
    }
}


