<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A request message for RegionSecurityPolicies.PatchRule. See the method description for details.
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.PatchRuleRegionSecurityPolicyRequest</code>
 */
class PatchRuleRegionSecurityPolicyRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The priority of the rule to patch.
     *
     * Generated from protobuf field <code>optional int32 priority = 445151652;</code>
     */
    private $priority = null;
    /**
     * Project ID for this request.
     *
     * Generated from protobuf field <code>string project = 227560217 [(.google.api.field_behavior) = REQUIRED, (.google.cloud.operation_request_field) = "project"];</code>
     */
    private $project = '';
    /**
     * Name of the region scoping this request.
     *
     * Generated from protobuf field <code>string region = 138946292 [(.google.api.field_behavior) = REQUIRED, (.google.cloud.operation_request_field) = "region"];</code>
     */
    private $region = '';
    /**
     * Name of the security policy to update.
     *
     * Generated from protobuf field <code>string security_policy = 171082513 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $security_policy = '';
    /**
     * The body resource for this request
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.SecurityPolicyRule security_policy_rule_resource = 402693443 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $security_policy_rule_resource = null;
    /**
     * Indicates fields to be cleared as part of this request.
     *
     * Generated from protobuf field <code>optional string update_mask = 500079778;</code>
     */
    private $update_mask = null;
    /**
     * If true, the request will not be committed.
     *
     * Generated from protobuf field <code>optional bool validate_only = 242744629;</code>
     */
    private $validate_only = null;

    /**
     * @param string                                      $project                    Project ID for this request.
     * @param string                                      $region                     Name of the region scoping this request.
     * @param string                                      $securityPolicy             Name of the security policy to update.
     * @param \Google\Cloud\Compute\V1\SecurityPolicyRule $securityPolicyRuleResource The body resource for this request
     *
     * @return \Google\Cloud\Compute\V1\PatchRuleRegionSecurityPolicyRequest
     *
     * @experimental
     */
    public static function build(string $project, string $region, string $securityPolicy, \Google\Cloud\Compute\V1\SecurityPolicyRule $securityPolicyRuleResource): self
    {
        return (new self())
            ->setProject($project)
            ->setRegion($region)
            ->setSecurityPolicy($securityPolicy)
            ->setSecurityPolicyRuleResource($securityPolicyRuleResource);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $priority
     *           The priority of the rule to patch.
     *     @type string $project
     *           Project ID for this request.
     *     @type string $region
     *           Name of the region scoping this request.
     *     @type string $security_policy
     *           Name of the security policy to update.
     *     @type \Google\Cloud\Compute\V1\SecurityPolicyRule $security_policy_rule_resource
     *           The body resource for this request
     *     @type string $update_mask
     *           Indicates fields to be cleared as part of this request.
     *     @type bool $validate_only
     *           If true, the request will not be committed.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * The priority of the rule to patch.
     *
     * Generated from protobuf field <code>optional int32 priority = 445151652;</code>
     * @return int
     */
    public function getPriority()
    {
        return isset($this->priority) ? $this->priority : 0;
    }

    public function hasPriority()
    {
        return isset($this->priority);
    }

    public function clearPriority()
    {
        unset($this->priority);
    }

    /**
     * The priority of the rule to patch.
     *
     * Generated from protobuf field <code>optional int32 priority = 445151652;</code>
     * @param int $var
     * @return $this
     */
    public function setPriority($var)
    {
        GPBUtil::checkInt32($var);
        $this->priority = $var;

        return $this;
    }

    /**
     * Project ID for this request.
     *
     * Generated from protobuf field <code>string project = 227560217 [(.google.api.field_behavior) = REQUIRED, (.google.cloud.operation_request_field) = "project"];</code>
     * @return string
     */
    public function getProject()
    {
        return $this->project;
    }

    /**
     * Project ID for this request.
     *
     * Generated from protobuf field <code>string project = 227560217 [(.google.api.field_behavior) = REQUIRED, (.google.cloud.operation_request_field) = "project"];</code>
     * @param string $var
     * @return $this
     */
    public function setProject($var)
    {
        GPBUtil::checkString($var, True);
        $this->project = $var;

        return $this;
    }

    /**
     * Name of the region scoping this request.
     *
     * Generated from protobuf field <code>string region = 138946292 [(.google.api.field_behavior) = REQUIRED, (.google.cloud.operation_request_field) = "region"];</code>
     * @return string
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Name of the region scoping this request.
     *
     * Generated from protobuf field <code>string region = 138946292 [(.google.api.field_behavior) = REQUIRED, (.google.cloud.operation_request_field) = "region"];</code>
     * @param string $var
     * @return $this
     */
    public function setRegion($var)
    {
        GPBUtil::checkString($var, True);
        $this->region = $var;

        return $this;
    }

    /**
     * Name of the security policy to update.
     *
     * Generated from protobuf field <code>string security_policy = 171082513 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getSecurityPolicy()
    {
        return $this->security_policy;
    }

    /**
     * Name of the security policy to update.
     *
     * Generated from protobuf field <code>string security_policy = 171082513 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setSecurityPolicy($var)
    {
        GPBUtil::checkString($var, True);
        $this->security_policy = $var;

        return $this;
    }

    /**
     * The body resource for this request
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.SecurityPolicyRule security_policy_rule_resource = 402693443 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Compute\V1\SecurityPolicyRule|null
     */
    public function getSecurityPolicyRuleResource()
    {
        return $this->security_policy_rule_resource;
    }

    public function hasSecurityPolicyRuleResource()
    {
        return isset($this->security_policy_rule_resource);
    }

    public function clearSecurityPolicyRuleResource()
    {
        unset($this->security_policy_rule_resource);
    }

    /**
     * The body resource for this request
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.SecurityPolicyRule security_policy_rule_resource = 402693443 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Compute\V1\SecurityPolicyRule $var
     * @return $this
     */
    public function setSecurityPolicyRuleResource($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\SecurityPolicyRule::class);
        $this->security_policy_rule_resource = $var;

        return $this;
    }

    /**
     * Indicates fields to be cleared as part of this request.
     *
     * Generated from protobuf field <code>optional string update_mask = 500079778;</code>
     * @return string
     */
    public function getUpdateMask()
    {
        return isset($this->update_mask) ? $this->update_mask : '';
    }

    public function hasUpdateMask()
    {
        return isset($this->update_mask);
    }

    public function clearUpdateMask()
    {
        unset($this->update_mask);
    }

    /**
     * Indicates fields to be cleared as part of this request.
     *
     * Generated from protobuf field <code>optional string update_mask = 500079778;</code>
     * @param string $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkString($var, True);
        $this->update_mask = $var;

        return $this;
    }

    /**
     * If true, the request will not be committed.
     *
     * Generated from protobuf field <code>optional bool validate_only = 242744629;</code>
     * @return bool
     */
    public function getValidateOnly()
    {
        return isset($this->validate_only) ? $this->validate_only : false;
    }

    public function hasValidateOnly()
    {
        return isset($this->validate_only);
    }

    public function clearValidateOnly()
    {
        unset($this->validate_only);
    }

    /**
     * If true, the request will not be committed.
     *
     * Generated from protobuf field <code>optional bool validate_only = 242744629;</code>
     * @param bool $var
     * @return $this
     */
    public function setValidateOnly($var)
    {
        GPBUtil::checkBool($var);
        $this->validate_only = $var;

        return $this;
    }

}

