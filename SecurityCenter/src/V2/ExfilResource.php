<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/securitycenter/v2/exfiltration.proto

namespace Google\Cloud\SecurityCenter\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Resource where data was exfiltrated from or exfiltrated to.
 *
 * Generated from protobuf message <code>google.cloud.securitycenter.v2.ExfilResource</code>
 */
class ExfilResource extends \Google\Protobuf\Internal\Message
{
    /**
     * The resource's [full resource
     * name](https://cloud.google.com/apis/design/resource_names#full_resource_name).
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * Subcomponents of the asset that was exfiltrated, like URIs used during
     * exfiltration, table names, databases, and filenames. For example, multiple
     * tables might have been exfiltrated from the same Cloud SQL instance, or
     * multiple files might have been exfiltrated from the same Cloud Storage
     * bucket.
     *
     * Generated from protobuf field <code>repeated string components = 2;</code>
     */
    private $components;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           The resource's [full resource
     *           name](https://cloud.google.com/apis/design/resource_names#full_resource_name).
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $components
     *           Subcomponents of the asset that was exfiltrated, like URIs used during
     *           exfiltration, table names, databases, and filenames. For example, multiple
     *           tables might have been exfiltrated from the same Cloud SQL instance, or
     *           multiple files might have been exfiltrated from the same Cloud Storage
     *           bucket.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Securitycenter\V2\Exfiltration::initOnce();
        parent::__construct($data);
    }

    /**
     * The resource's [full resource
     * name](https://cloud.google.com/apis/design/resource_names#full_resource_name).
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The resource's [full resource
     * name](https://cloud.google.com/apis/design/resource_names#full_resource_name).
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Subcomponents of the asset that was exfiltrated, like URIs used during
     * exfiltration, table names, databases, and filenames. For example, multiple
     * tables might have been exfiltrated from the same Cloud SQL instance, or
     * multiple files might have been exfiltrated from the same Cloud Storage
     * bucket.
     *
     * Generated from protobuf field <code>repeated string components = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getComponents()
    {
        return $this->components;
    }

    /**
     * Subcomponents of the asset that was exfiltrated, like URIs used during
     * exfiltration, table names, databases, and filenames. For example, multiple
     * tables might have been exfiltrated from the same Cloud SQL instance, or
     * multiple files might have been exfiltrated from the same Cloud Storage
     * bucket.
     *
     * Generated from protobuf field <code>repeated string components = 2;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setComponents($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->components = $arr;

        return $this;
    }

}

