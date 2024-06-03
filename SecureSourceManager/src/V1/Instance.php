<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/securesourcemanager/v1/secure_source_manager.proto

namespace Google\Cloud\SecureSourceManager\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A resource that represents a Secure Source Manager instance.
 *
 * Generated from protobuf message <code>google.cloud.securesourcemanager.v1.Instance</code>
 */
class Instance extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. A unique identifier for an instance. The name should be of the
     * format:
     * `projects/{project_number}/locations/{location_id}/instances/{instance_id}`
     * `project_number`: Maps to a unique int64 id assigned to each project.
     * `location_id`: Refers to the region where the instance will be deployed.
     * Since Secure Source Manager is a regional service, it must be one of the
     * valid GCP regions.
     * `instance_id`: User provided name for the instance, must be unique for a
     * project_number and location_id combination.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $name = '';
    /**
     * Output only. Create timestamp.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $create_time = null;
    /**
     * Output only. Update timestamp.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $update_time = null;
    /**
     * Optional. Labels as key value pairs.
     *
     * Generated from protobuf field <code>map<string, string> labels = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $labels;
    /**
     * Output only. Current state of the instance.
     *
     * Generated from protobuf field <code>.google.cloud.securesourcemanager.v1.Instance.State state = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $state = 0;
    /**
     * Output only. An optional field providing information about the current
     * instance state.
     *
     * Generated from protobuf field <code>.google.cloud.securesourcemanager.v1.Instance.StateNote state_note = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $state_note = 0;
    /**
     * Optional. Immutable. Customer-managed encryption key name, in the format
     * projects/&#42;&#47;locations/&#42;&#47;keyRings/&#42;&#47;cryptoKeys/&#42;.
     *
     * Generated from protobuf field <code>string kms_key = 11 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     */
    protected $kms_key = '';
    /**
     * Output only. A list of hostnames for this instance.
     *
     * Generated from protobuf field <code>.google.cloud.securesourcemanager.v1.Instance.HostConfig host_config = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $host_config = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Optional. A unique identifier for an instance. The name should be of the
     *           format:
     *           `projects/{project_number}/locations/{location_id}/instances/{instance_id}`
     *           `project_number`: Maps to a unique int64 id assigned to each project.
     *           `location_id`: Refers to the region where the instance will be deployed.
     *           Since Secure Source Manager is a regional service, it must be one of the
     *           valid GCP regions.
     *           `instance_id`: User provided name for the instance, must be unique for a
     *           project_number and location_id combination.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. Create timestamp.
     *     @type \Google\Protobuf\Timestamp $update_time
     *           Output only. Update timestamp.
     *     @type array|\Google\Protobuf\Internal\MapField $labels
     *           Optional. Labels as key value pairs.
     *     @type int $state
     *           Output only. Current state of the instance.
     *     @type int $state_note
     *           Output only. An optional field providing information about the current
     *           instance state.
     *     @type string $kms_key
     *           Optional. Immutable. Customer-managed encryption key name, in the format
     *           projects/&#42;&#47;locations/&#42;&#47;keyRings/&#42;&#47;cryptoKeys/&#42;.
     *     @type \Google\Cloud\SecureSourceManager\V1\Instance\HostConfig $host_config
     *           Output only. A list of hostnames for this instance.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Securesourcemanager\V1\SecureSourceManager::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. A unique identifier for an instance. The name should be of the
     * format:
     * `projects/{project_number}/locations/{location_id}/instances/{instance_id}`
     * `project_number`: Maps to a unique int64 id assigned to each project.
     * `location_id`: Refers to the region where the instance will be deployed.
     * Since Secure Source Manager is a regional service, it must be one of the
     * valid GCP regions.
     * `instance_id`: User provided name for the instance, must be unique for a
     * project_number and location_id combination.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Optional. A unique identifier for an instance. The name should be of the
     * format:
     * `projects/{project_number}/locations/{location_id}/instances/{instance_id}`
     * `project_number`: Maps to a unique int64 id assigned to each project.
     * `location_id`: Refers to the region where the instance will be deployed.
     * Since Secure Source Manager is a regional service, it must be one of the
     * valid GCP regions.
     * `instance_id`: User provided name for the instance, must be unique for a
     * project_number and location_id combination.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
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
     * Output only. Create timestamp.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCreateTime()
    {
        return $this->create_time;
    }

    public function hasCreateTime()
    {
        return isset($this->create_time);
    }

    public function clearCreateTime()
    {
        unset($this->create_time);
    }

    /**
     * Output only. Create timestamp.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->create_time = $var;

        return $this;
    }

    /**
     * Output only. Update timestamp.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getUpdateTime()
    {
        return $this->update_time;
    }

    public function hasUpdateTime()
    {
        return isset($this->update_time);
    }

    public function clearUpdateTime()
    {
        unset($this->update_time);
    }

    /**
     * Output only. Update timestamp.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setUpdateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->update_time = $var;

        return $this;
    }

    /**
     * Optional. Labels as key value pairs.
     *
     * Generated from protobuf field <code>map<string, string> labels = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * Optional. Labels as key value pairs.
     *
     * Generated from protobuf field <code>map<string, string> labels = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setLabels($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->labels = $arr;

        return $this;
    }

    /**
     * Output only. Current state of the instance.
     *
     * Generated from protobuf field <code>.google.cloud.securesourcemanager.v1.Instance.State state = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Output only. Current state of the instance.
     *
     * Generated from protobuf field <code>.google.cloud.securesourcemanager.v1.Instance.State state = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\SecureSourceManager\V1\Instance\State::class);
        $this->state = $var;

        return $this;
    }

    /**
     * Output only. An optional field providing information about the current
     * instance state.
     *
     * Generated from protobuf field <code>.google.cloud.securesourcemanager.v1.Instance.StateNote state_note = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getStateNote()
    {
        return $this->state_note;
    }

    /**
     * Output only. An optional field providing information about the current
     * instance state.
     *
     * Generated from protobuf field <code>.google.cloud.securesourcemanager.v1.Instance.StateNote state_note = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setStateNote($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\SecureSourceManager\V1\Instance\StateNote::class);
        $this->state_note = $var;

        return $this;
    }

    /**
     * Optional. Immutable. Customer-managed encryption key name, in the format
     * projects/&#42;&#47;locations/&#42;&#47;keyRings/&#42;&#47;cryptoKeys/&#42;.
     *
     * Generated from protobuf field <code>string kms_key = 11 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getKmsKey()
    {
        return $this->kms_key;
    }

    /**
     * Optional. Immutable. Customer-managed encryption key name, in the format
     * projects/&#42;&#47;locations/&#42;&#47;keyRings/&#42;&#47;cryptoKeys/&#42;.
     *
     * Generated from protobuf field <code>string kms_key = 11 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setKmsKey($var)
    {
        GPBUtil::checkString($var, True);
        $this->kms_key = $var;

        return $this;
    }

    /**
     * Output only. A list of hostnames for this instance.
     *
     * Generated from protobuf field <code>.google.cloud.securesourcemanager.v1.Instance.HostConfig host_config = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\SecureSourceManager\V1\Instance\HostConfig|null
     */
    public function getHostConfig()
    {
        return $this->host_config;
    }

    public function hasHostConfig()
    {
        return isset($this->host_config);
    }

    public function clearHostConfig()
    {
        unset($this->host_config);
    }

    /**
     * Output only. A list of hostnames for this instance.
     *
     * Generated from protobuf field <code>.google.cloud.securesourcemanager.v1.Instance.HostConfig host_config = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\SecureSourceManager\V1\Instance\HostConfig $var
     * @return $this
     */
    public function setHostConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\SecureSourceManager\V1\Instance\HostConfig::class);
        $this->host_config = $var;

        return $this;
    }

}

