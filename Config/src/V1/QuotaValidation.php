<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/config/v1/config.proto

namespace Google\Cloud\Config\V1;

use UnexpectedValueException;

/**
 * Enum values to control quota checks for resources in terraform
 * configuration files.
 *
 * Protobuf type <code>google.cloud.config.v1.QuotaValidation</code>
 */
class QuotaValidation
{
    /**
     * The default value.
     * QuotaValidation on terraform configuration files will be disabled in
     * this case.
     *
     * Generated from protobuf enum <code>QUOTA_VALIDATION_UNSPECIFIED = 0;</code>
     */
    const QUOTA_VALIDATION_UNSPECIFIED = 0;
    /**
     * Enable computing quotas for resources in terraform configuration files to
     * get visibility on resources with insufficient quotas.
     *
     * Generated from protobuf enum <code>ENABLED = 1;</code>
     */
    const ENABLED = 1;
    /**
     * Enforce quota checks so deployment fails if there isn't sufficient quotas
     * available to deploy resources in terraform configuration files.
     *
     * Generated from protobuf enum <code>ENFORCED = 2;</code>
     */
    const ENFORCED = 2;

    private static $valueToName = [
        self::QUOTA_VALIDATION_UNSPECIFIED => 'QUOTA_VALIDATION_UNSPECIFIED',
        self::ENABLED => 'ENABLED',
        self::ENFORCED => 'ENFORCED',
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

