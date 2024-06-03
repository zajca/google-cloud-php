<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/deploy/v1/cloud_deploy.proto

namespace Google\Cloud\Deploy\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Contains the information of an automated advance-rollout operation.
 *
 * Generated from protobuf message <code>google.cloud.deploy.v1.AdvanceRolloutOperation</code>
 */
class AdvanceRolloutOperation extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The phase of a deployment that initiated the operation.
     *
     * Generated from protobuf field <code>string source_phase = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $source_phase = '';
    /**
     * Output only. How long the operation will be paused.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration wait = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $wait = null;
    /**
     * Output only. The name of the rollout that initiates the `AutomationRun`.
     *
     * Generated from protobuf field <code>string rollout = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $rollout = '';
    /**
     * Output only. The phase the rollout will be advanced to.
     *
     * Generated from protobuf field <code>string destination_phase = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $destination_phase = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $source_phase
     *           Output only. The phase of a deployment that initiated the operation.
     *     @type \Google\Protobuf\Duration $wait
     *           Output only. How long the operation will be paused.
     *     @type string $rollout
     *           Output only. The name of the rollout that initiates the `AutomationRun`.
     *     @type string $destination_phase
     *           Output only. The phase the rollout will be advanced to.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Deploy\V1\CloudDeploy::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The phase of a deployment that initiated the operation.
     *
     * Generated from protobuf field <code>string source_phase = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getSourcePhase()
    {
        return $this->source_phase;
    }

    /**
     * Output only. The phase of a deployment that initiated the operation.
     *
     * Generated from protobuf field <code>string source_phase = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setSourcePhase($var)
    {
        GPBUtil::checkString($var, True);
        $this->source_phase = $var;

        return $this;
    }

    /**
     * Output only. How long the operation will be paused.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration wait = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getWait()
    {
        return $this->wait;
    }

    public function hasWait()
    {
        return isset($this->wait);
    }

    public function clearWait()
    {
        unset($this->wait);
    }

    /**
     * Output only. How long the operation will be paused.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration wait = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setWait($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->wait = $var;

        return $this;
    }

    /**
     * Output only. The name of the rollout that initiates the `AutomationRun`.
     *
     * Generated from protobuf field <code>string rollout = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getRollout()
    {
        return $this->rollout;
    }

    /**
     * Output only. The name of the rollout that initiates the `AutomationRun`.
     *
     * Generated from protobuf field <code>string rollout = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setRollout($var)
    {
        GPBUtil::checkString($var, True);
        $this->rollout = $var;

        return $this;
    }

    /**
     * Output only. The phase the rollout will be advanced to.
     *
     * Generated from protobuf field <code>string destination_phase = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getDestinationPhase()
    {
        return $this->destination_phase;
    }

    /**
     * Output only. The phase the rollout will be advanced to.
     *
     * Generated from protobuf field <code>string destination_phase = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setDestinationPhase($var)
    {
        GPBUtil::checkString($var, True);
        $this->destination_phase = $var;

        return $this;
    }

}

