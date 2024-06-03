<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/vmwareengine/v1/vmwareengine_resources.proto

namespace Google\Cloud\VmwareEngine\V1\ExternalAddress;

use UnexpectedValueException;

/**
 * Enum State defines possible states of external addresses.
 *
 * Protobuf type <code>google.cloud.vmwareengine.v1.ExternalAddress.State</code>
 */
class State
{
    /**
     * The default value. This value should never be used.
     *
     * Generated from protobuf enum <code>STATE_UNSPECIFIED = 0;</code>
     */
    const STATE_UNSPECIFIED = 0;
    /**
     * The address is ready.
     *
     * Generated from protobuf enum <code>ACTIVE = 1;</code>
     */
    const ACTIVE = 1;
    /**
     * The address is being created.
     *
     * Generated from protobuf enum <code>CREATING = 2;</code>
     */
    const CREATING = 2;
    /**
     * The address is being updated.
     *
     * Generated from protobuf enum <code>UPDATING = 3;</code>
     */
    const UPDATING = 3;
    /**
     * The address is being deleted.
     *
     * Generated from protobuf enum <code>DELETING = 4;</code>
     */
    const DELETING = 4;

    private static $valueToName = [
        self::STATE_UNSPECIFIED => 'STATE_UNSPECIFIED',
        self::ACTIVE => 'ACTIVE',
        self::CREATING => 'CREATING',
        self::UPDATING => 'UPDATING',
        self::DELETING => 'DELETING',
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
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}


