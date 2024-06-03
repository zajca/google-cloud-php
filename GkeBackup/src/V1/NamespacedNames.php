<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/gkebackup/v1/common.proto

namespace Google\Cloud\GkeBackup\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A list of namespaced Kubernetes resources.
 *
 * Generated from protobuf message <code>google.cloud.gkebackup.v1.NamespacedNames</code>
 */
class NamespacedNames extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. A list of namespaced Kubernetes resources.
     *
     * Generated from protobuf field <code>repeated .google.cloud.gkebackup.v1.NamespacedName namespaced_names = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $namespaced_names;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\GkeBackup\V1\NamespacedName>|\Google\Protobuf\Internal\RepeatedField $namespaced_names
     *           Optional. A list of namespaced Kubernetes resources.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Gkebackup\V1\Common::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. A list of namespaced Kubernetes resources.
     *
     * Generated from protobuf field <code>repeated .google.cloud.gkebackup.v1.NamespacedName namespaced_names = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getNamespacedNames()
    {
        return $this->namespaced_names;
    }

    /**
     * Optional. A list of namespaced Kubernetes resources.
     *
     * Generated from protobuf field <code>repeated .google.cloud.gkebackup.v1.NamespacedName namespaced_names = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<\Google\Cloud\GkeBackup\V1\NamespacedName>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setNamespacedNames($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\GkeBackup\V1\NamespacedName::class);
        $this->namespaced_names = $arr;

        return $this;
    }

}

