<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/config/v1/config.proto

namespace Google\Cloud\Config\V1\Preview;

use UnexpectedValueException;

/**
 * Preview mode provides options for customizing preview operations.
 *
 * Protobuf type <code>google.cloud.config.v1.Preview.PreviewMode</code>
 */
class PreviewMode
{
    /**
     * Unspecified policy, default mode will be used.
     *
     * Generated from protobuf enum <code>PREVIEW_MODE_UNSPECIFIED = 0;</code>
     */
    const PREVIEW_MODE_UNSPECIFIED = 0;
    /**
     * DEFAULT mode generates an execution plan for reconciling current resource
     * state into expected resource state.
     *
     * Generated from protobuf enum <code>DEFAULT = 1;</code>
     */
    const PBDEFAULT = 1;
    /**
     * DELETE mode generates as execution plan for destroying current resources.
     *
     * Generated from protobuf enum <code>DELETE = 2;</code>
     */
    const DELETE = 2;

    private static $valueToName = [
        self::PREVIEW_MODE_UNSPECIFIED => 'PREVIEW_MODE_UNSPECIFIED',
        self::PBDEFAULT => 'DEFAULT',
        self::DELETE => 'DELETE',
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


