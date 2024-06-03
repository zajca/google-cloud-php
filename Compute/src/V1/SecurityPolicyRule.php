<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents a rule that describes one or more match conditions along with the action to be taken when traffic matches this condition (allow or deny).
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.SecurityPolicyRule</code>
 */
class SecurityPolicyRule extends \Google\Protobuf\Internal\Message
{
    /**
     * The Action to perform when the rule is matched. The following are the valid actions: - allow: allow access to target. - deny(STATUS): deny access to target, returns the HTTP response code specified. Valid values for `STATUS` are 403, 404, and 502. - rate_based_ban: limit client traffic to the configured threshold and ban the client if the traffic exceeds the threshold. Configure parameters for this action in RateLimitOptions. Requires rate_limit_options to be set. - redirect: redirect to a different target. This can either be an internal reCAPTCHA redirect, or an external URL-based redirect via a 302 response. Parameters for this action can be configured via redirectOptions. This action is only supported in Global Security Policies of type CLOUD_ARMOR. - throttle: limit client traffic to the configured threshold. Configure parameters for this action in rateLimitOptions. Requires rate_limit_options to be set for this. 
     *
     * Generated from protobuf field <code>optional string action = 187661878;</code>
     */
    private $action = null;
    /**
     * An optional description of this resource. Provide this property when you create the resource.
     *
     * Generated from protobuf field <code>optional string description = 422937596;</code>
     */
    private $description = null;
    /**
     * Optional, additional actions that are performed on headers. This field is only supported in Global Security Policies of type CLOUD_ARMOR.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.SecurityPolicyRuleHttpHeaderAction header_action = 328077352;</code>
     */
    private $header_action = null;
    /**
     * [Output only] Type of the resource. Always compute#securityPolicyRule for security policy rules
     *
     * Generated from protobuf field <code>optional string kind = 3292052;</code>
     */
    private $kind = null;
    /**
     * A match condition that incoming traffic is evaluated against. If it evaluates to true, the corresponding 'action' is enforced.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.SecurityPolicyRuleMatcher match = 103668165;</code>
     */
    private $match = null;
    /**
     * A match condition that incoming packets are evaluated against for CLOUD_ARMOR_NETWORK security policies. If it matches, the corresponding 'action' is enforced. The match criteria for a rule consists of built-in match fields (like 'srcIpRanges') and potentially multiple user-defined match fields ('userDefinedFields'). Field values may be extracted directly from the packet or derived from it (e.g. 'srcRegionCodes'). Some fields may not be present in every packet (e.g. 'srcPorts'). A user-defined field is only present if the base header is found in the packet and the entire field is in bounds. Each match field may specify which values can match it, listing one or more ranges, prefixes, or exact values that are considered a match for the field. A field value must be present in order to match a specified match field. If no match values are specified for a match field, then any field value is considered to match it, and it's not required to be present. For strings specifying '*' is also equivalent to match all. For a packet to match a rule, all specified match fields must match the corresponding field values derived from the packet. Example: networkMatch: srcIpRanges: - "192.0.2.0/24" - "198.51.100.0/24" userDefinedFields: - name: "ipv4_fragment_offset" values: - "1-0x1fff" The above match condition matches packets with a source IP in 192.0.2.0/24 or 198.51.100.0/24 and a user-defined field named "ipv4_fragment_offset" with a value between 1 and 0x1fff inclusive.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.SecurityPolicyRuleNetworkMatcher network_match = 463387764;</code>
     */
    private $network_match = null;
    /**
     * Preconfigured WAF configuration to be applied for the rule. If the rule does not evaluate preconfigured WAF rules, i.e., if evaluatePreconfiguredWaf() is not used, this field will have no effect.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.SecurityPolicyRulePreconfiguredWafConfig preconfigured_waf_config = 117805027;</code>
     */
    private $preconfigured_waf_config = null;
    /**
     * If set to true, the specified action is not enforced.
     *
     * Generated from protobuf field <code>optional bool preview = 218686408;</code>
     */
    private $preview = null;
    /**
     * An integer indicating the priority of a rule in the list. The priority must be a positive value between 0 and 2147483647. Rules are evaluated from highest to lowest priority where 0 is the highest priority and 2147483647 is the lowest priority.
     *
     * Generated from protobuf field <code>optional int32 priority = 445151652;</code>
     */
    private $priority = null;
    /**
     * Must be specified if the action is "rate_based_ban" or "throttle". Cannot be specified for any other actions.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.SecurityPolicyRuleRateLimitOptions rate_limit_options = 67544315;</code>
     */
    private $rate_limit_options = null;
    /**
     * Parameters defining the redirect action. Cannot be specified for any other actions. This field is only supported in Global Security Policies of type CLOUD_ARMOR.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.SecurityPolicyRuleRedirectOptions redirect_options = 163285307;</code>
     */
    private $redirect_options = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $action
     *           The Action to perform when the rule is matched. The following are the valid actions: - allow: allow access to target. - deny(STATUS): deny access to target, returns the HTTP response code specified. Valid values for `STATUS` are 403, 404, and 502. - rate_based_ban: limit client traffic to the configured threshold and ban the client if the traffic exceeds the threshold. Configure parameters for this action in RateLimitOptions. Requires rate_limit_options to be set. - redirect: redirect to a different target. This can either be an internal reCAPTCHA redirect, or an external URL-based redirect via a 302 response. Parameters for this action can be configured via redirectOptions. This action is only supported in Global Security Policies of type CLOUD_ARMOR. - throttle: limit client traffic to the configured threshold. Configure parameters for this action in rateLimitOptions. Requires rate_limit_options to be set for this. 
     *     @type string $description
     *           An optional description of this resource. Provide this property when you create the resource.
     *     @type \Google\Cloud\Compute\V1\SecurityPolicyRuleHttpHeaderAction $header_action
     *           Optional, additional actions that are performed on headers. This field is only supported in Global Security Policies of type CLOUD_ARMOR.
     *     @type string $kind
     *           [Output only] Type of the resource. Always compute#securityPolicyRule for security policy rules
     *     @type \Google\Cloud\Compute\V1\SecurityPolicyRuleMatcher $match
     *           A match condition that incoming traffic is evaluated against. If it evaluates to true, the corresponding 'action' is enforced.
     *     @type \Google\Cloud\Compute\V1\SecurityPolicyRuleNetworkMatcher $network_match
     *           A match condition that incoming packets are evaluated against for CLOUD_ARMOR_NETWORK security policies. If it matches, the corresponding 'action' is enforced. The match criteria for a rule consists of built-in match fields (like 'srcIpRanges') and potentially multiple user-defined match fields ('userDefinedFields'). Field values may be extracted directly from the packet or derived from it (e.g. 'srcRegionCodes'). Some fields may not be present in every packet (e.g. 'srcPorts'). A user-defined field is only present if the base header is found in the packet and the entire field is in bounds. Each match field may specify which values can match it, listing one or more ranges, prefixes, or exact values that are considered a match for the field. A field value must be present in order to match a specified match field. If no match values are specified for a match field, then any field value is considered to match it, and it's not required to be present. For strings specifying '*' is also equivalent to match all. For a packet to match a rule, all specified match fields must match the corresponding field values derived from the packet. Example: networkMatch: srcIpRanges: - "192.0.2.0/24" - "198.51.100.0/24" userDefinedFields: - name: "ipv4_fragment_offset" values: - "1-0x1fff" The above match condition matches packets with a source IP in 192.0.2.0/24 or 198.51.100.0/24 and a user-defined field named "ipv4_fragment_offset" with a value between 1 and 0x1fff inclusive.
     *     @type \Google\Cloud\Compute\V1\SecurityPolicyRulePreconfiguredWafConfig $preconfigured_waf_config
     *           Preconfigured WAF configuration to be applied for the rule. If the rule does not evaluate preconfigured WAF rules, i.e., if evaluatePreconfiguredWaf() is not used, this field will have no effect.
     *     @type bool $preview
     *           If set to true, the specified action is not enforced.
     *     @type int $priority
     *           An integer indicating the priority of a rule in the list. The priority must be a positive value between 0 and 2147483647. Rules are evaluated from highest to lowest priority where 0 is the highest priority and 2147483647 is the lowest priority.
     *     @type \Google\Cloud\Compute\V1\SecurityPolicyRuleRateLimitOptions $rate_limit_options
     *           Must be specified if the action is "rate_based_ban" or "throttle". Cannot be specified for any other actions.
     *     @type \Google\Cloud\Compute\V1\SecurityPolicyRuleRedirectOptions $redirect_options
     *           Parameters defining the redirect action. Cannot be specified for any other actions. This field is only supported in Global Security Policies of type CLOUD_ARMOR.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * The Action to perform when the rule is matched. The following are the valid actions: - allow: allow access to target. - deny(STATUS): deny access to target, returns the HTTP response code specified. Valid values for `STATUS` are 403, 404, and 502. - rate_based_ban: limit client traffic to the configured threshold and ban the client if the traffic exceeds the threshold. Configure parameters for this action in RateLimitOptions. Requires rate_limit_options to be set. - redirect: redirect to a different target. This can either be an internal reCAPTCHA redirect, or an external URL-based redirect via a 302 response. Parameters for this action can be configured via redirectOptions. This action is only supported in Global Security Policies of type CLOUD_ARMOR. - throttle: limit client traffic to the configured threshold. Configure parameters for this action in rateLimitOptions. Requires rate_limit_options to be set for this. 
     *
     * Generated from protobuf field <code>optional string action = 187661878;</code>
     * @return string
     */
    public function getAction()
    {
        return isset($this->action) ? $this->action : '';
    }

    public function hasAction()
    {
        return isset($this->action);
    }

    public function clearAction()
    {
        unset($this->action);
    }

    /**
     * The Action to perform when the rule is matched. The following are the valid actions: - allow: allow access to target. - deny(STATUS): deny access to target, returns the HTTP response code specified. Valid values for `STATUS` are 403, 404, and 502. - rate_based_ban: limit client traffic to the configured threshold and ban the client if the traffic exceeds the threshold. Configure parameters for this action in RateLimitOptions. Requires rate_limit_options to be set. - redirect: redirect to a different target. This can either be an internal reCAPTCHA redirect, or an external URL-based redirect via a 302 response. Parameters for this action can be configured via redirectOptions. This action is only supported in Global Security Policies of type CLOUD_ARMOR. - throttle: limit client traffic to the configured threshold. Configure parameters for this action in rateLimitOptions. Requires rate_limit_options to be set for this. 
     *
     * Generated from protobuf field <code>optional string action = 187661878;</code>
     * @param string $var
     * @return $this
     */
    public function setAction($var)
    {
        GPBUtil::checkString($var, True);
        $this->action = $var;

        return $this;
    }

    /**
     * An optional description of this resource. Provide this property when you create the resource.
     *
     * Generated from protobuf field <code>optional string description = 422937596;</code>
     * @return string
     */
    public function getDescription()
    {
        return isset($this->description) ? $this->description : '';
    }

    public function hasDescription()
    {
        return isset($this->description);
    }

    public function clearDescription()
    {
        unset($this->description);
    }

    /**
     * An optional description of this resource. Provide this property when you create the resource.
     *
     * Generated from protobuf field <code>optional string description = 422937596;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * Optional, additional actions that are performed on headers. This field is only supported in Global Security Policies of type CLOUD_ARMOR.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.SecurityPolicyRuleHttpHeaderAction header_action = 328077352;</code>
     * @return \Google\Cloud\Compute\V1\SecurityPolicyRuleHttpHeaderAction|null
     */
    public function getHeaderAction()
    {
        return $this->header_action;
    }

    public function hasHeaderAction()
    {
        return isset($this->header_action);
    }

    public function clearHeaderAction()
    {
        unset($this->header_action);
    }

    /**
     * Optional, additional actions that are performed on headers. This field is only supported in Global Security Policies of type CLOUD_ARMOR.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.SecurityPolicyRuleHttpHeaderAction header_action = 328077352;</code>
     * @param \Google\Cloud\Compute\V1\SecurityPolicyRuleHttpHeaderAction $var
     * @return $this
     */
    public function setHeaderAction($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\SecurityPolicyRuleHttpHeaderAction::class);
        $this->header_action = $var;

        return $this;
    }

    /**
     * [Output only] Type of the resource. Always compute#securityPolicyRule for security policy rules
     *
     * Generated from protobuf field <code>optional string kind = 3292052;</code>
     * @return string
     */
    public function getKind()
    {
        return isset($this->kind) ? $this->kind : '';
    }

    public function hasKind()
    {
        return isset($this->kind);
    }

    public function clearKind()
    {
        unset($this->kind);
    }

    /**
     * [Output only] Type of the resource. Always compute#securityPolicyRule for security policy rules
     *
     * Generated from protobuf field <code>optional string kind = 3292052;</code>
     * @param string $var
     * @return $this
     */
    public function setKind($var)
    {
        GPBUtil::checkString($var, True);
        $this->kind = $var;

        return $this;
    }

    /**
     * A match condition that incoming traffic is evaluated against. If it evaluates to true, the corresponding 'action' is enforced.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.SecurityPolicyRuleMatcher match = 103668165;</code>
     * @return \Google\Cloud\Compute\V1\SecurityPolicyRuleMatcher|null
     */
    public function getMatch()
    {
        return $this->match;
    }

    public function hasMatch()
    {
        return isset($this->match);
    }

    public function clearMatch()
    {
        unset($this->match);
    }

    /**
     * A match condition that incoming traffic is evaluated against. If it evaluates to true, the corresponding 'action' is enforced.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.SecurityPolicyRuleMatcher match = 103668165;</code>
     * @param \Google\Cloud\Compute\V1\SecurityPolicyRuleMatcher $var
     * @return $this
     */
    public function setMatch($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\SecurityPolicyRuleMatcher::class);
        $this->match = $var;

        return $this;
    }

    /**
     * A match condition that incoming packets are evaluated against for CLOUD_ARMOR_NETWORK security policies. If it matches, the corresponding 'action' is enforced. The match criteria for a rule consists of built-in match fields (like 'srcIpRanges') and potentially multiple user-defined match fields ('userDefinedFields'). Field values may be extracted directly from the packet or derived from it (e.g. 'srcRegionCodes'). Some fields may not be present in every packet (e.g. 'srcPorts'). A user-defined field is only present if the base header is found in the packet and the entire field is in bounds. Each match field may specify which values can match it, listing one or more ranges, prefixes, or exact values that are considered a match for the field. A field value must be present in order to match a specified match field. If no match values are specified for a match field, then any field value is considered to match it, and it's not required to be present. For strings specifying '*' is also equivalent to match all. For a packet to match a rule, all specified match fields must match the corresponding field values derived from the packet. Example: networkMatch: srcIpRanges: - "192.0.2.0/24" - "198.51.100.0/24" userDefinedFields: - name: "ipv4_fragment_offset" values: - "1-0x1fff" The above match condition matches packets with a source IP in 192.0.2.0/24 or 198.51.100.0/24 and a user-defined field named "ipv4_fragment_offset" with a value between 1 and 0x1fff inclusive.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.SecurityPolicyRuleNetworkMatcher network_match = 463387764;</code>
     * @return \Google\Cloud\Compute\V1\SecurityPolicyRuleNetworkMatcher|null
     */
    public function getNetworkMatch()
    {
        return $this->network_match;
    }

    public function hasNetworkMatch()
    {
        return isset($this->network_match);
    }

    public function clearNetworkMatch()
    {
        unset($this->network_match);
    }

    /**
     * A match condition that incoming packets are evaluated against for CLOUD_ARMOR_NETWORK security policies. If it matches, the corresponding 'action' is enforced. The match criteria for a rule consists of built-in match fields (like 'srcIpRanges') and potentially multiple user-defined match fields ('userDefinedFields'). Field values may be extracted directly from the packet or derived from it (e.g. 'srcRegionCodes'). Some fields may not be present in every packet (e.g. 'srcPorts'). A user-defined field is only present if the base header is found in the packet and the entire field is in bounds. Each match field may specify which values can match it, listing one or more ranges, prefixes, or exact values that are considered a match for the field. A field value must be present in order to match a specified match field. If no match values are specified for a match field, then any field value is considered to match it, and it's not required to be present. For strings specifying '*' is also equivalent to match all. For a packet to match a rule, all specified match fields must match the corresponding field values derived from the packet. Example: networkMatch: srcIpRanges: - "192.0.2.0/24" - "198.51.100.0/24" userDefinedFields: - name: "ipv4_fragment_offset" values: - "1-0x1fff" The above match condition matches packets with a source IP in 192.0.2.0/24 or 198.51.100.0/24 and a user-defined field named "ipv4_fragment_offset" with a value between 1 and 0x1fff inclusive.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.SecurityPolicyRuleNetworkMatcher network_match = 463387764;</code>
     * @param \Google\Cloud\Compute\V1\SecurityPolicyRuleNetworkMatcher $var
     * @return $this
     */
    public function setNetworkMatch($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\SecurityPolicyRuleNetworkMatcher::class);
        $this->network_match = $var;

        return $this;
    }

    /**
     * Preconfigured WAF configuration to be applied for the rule. If the rule does not evaluate preconfigured WAF rules, i.e., if evaluatePreconfiguredWaf() is not used, this field will have no effect.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.SecurityPolicyRulePreconfiguredWafConfig preconfigured_waf_config = 117805027;</code>
     * @return \Google\Cloud\Compute\V1\SecurityPolicyRulePreconfiguredWafConfig|null
     */
    public function getPreconfiguredWafConfig()
    {
        return $this->preconfigured_waf_config;
    }

    public function hasPreconfiguredWafConfig()
    {
        return isset($this->preconfigured_waf_config);
    }

    public function clearPreconfiguredWafConfig()
    {
        unset($this->preconfigured_waf_config);
    }

    /**
     * Preconfigured WAF configuration to be applied for the rule. If the rule does not evaluate preconfigured WAF rules, i.e., if evaluatePreconfiguredWaf() is not used, this field will have no effect.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.SecurityPolicyRulePreconfiguredWafConfig preconfigured_waf_config = 117805027;</code>
     * @param \Google\Cloud\Compute\V1\SecurityPolicyRulePreconfiguredWafConfig $var
     * @return $this
     */
    public function setPreconfiguredWafConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\SecurityPolicyRulePreconfiguredWafConfig::class);
        $this->preconfigured_waf_config = $var;

        return $this;
    }

    /**
     * If set to true, the specified action is not enforced.
     *
     * Generated from protobuf field <code>optional bool preview = 218686408;</code>
     * @return bool
     */
    public function getPreview()
    {
        return isset($this->preview) ? $this->preview : false;
    }

    public function hasPreview()
    {
        return isset($this->preview);
    }

    public function clearPreview()
    {
        unset($this->preview);
    }

    /**
     * If set to true, the specified action is not enforced.
     *
     * Generated from protobuf field <code>optional bool preview = 218686408;</code>
     * @param bool $var
     * @return $this
     */
    public function setPreview($var)
    {
        GPBUtil::checkBool($var);
        $this->preview = $var;

        return $this;
    }

    /**
     * An integer indicating the priority of a rule in the list. The priority must be a positive value between 0 and 2147483647. Rules are evaluated from highest to lowest priority where 0 is the highest priority and 2147483647 is the lowest priority.
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
     * An integer indicating the priority of a rule in the list. The priority must be a positive value between 0 and 2147483647. Rules are evaluated from highest to lowest priority where 0 is the highest priority and 2147483647 is the lowest priority.
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
     * Must be specified if the action is "rate_based_ban" or "throttle". Cannot be specified for any other actions.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.SecurityPolicyRuleRateLimitOptions rate_limit_options = 67544315;</code>
     * @return \Google\Cloud\Compute\V1\SecurityPolicyRuleRateLimitOptions|null
     */
    public function getRateLimitOptions()
    {
        return $this->rate_limit_options;
    }

    public function hasRateLimitOptions()
    {
        return isset($this->rate_limit_options);
    }

    public function clearRateLimitOptions()
    {
        unset($this->rate_limit_options);
    }

    /**
     * Must be specified if the action is "rate_based_ban" or "throttle". Cannot be specified for any other actions.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.SecurityPolicyRuleRateLimitOptions rate_limit_options = 67544315;</code>
     * @param \Google\Cloud\Compute\V1\SecurityPolicyRuleRateLimitOptions $var
     * @return $this
     */
    public function setRateLimitOptions($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\SecurityPolicyRuleRateLimitOptions::class);
        $this->rate_limit_options = $var;

        return $this;
    }

    /**
     * Parameters defining the redirect action. Cannot be specified for any other actions. This field is only supported in Global Security Policies of type CLOUD_ARMOR.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.SecurityPolicyRuleRedirectOptions redirect_options = 163285307;</code>
     * @return \Google\Cloud\Compute\V1\SecurityPolicyRuleRedirectOptions|null
     */
    public function getRedirectOptions()
    {
        return $this->redirect_options;
    }

    public function hasRedirectOptions()
    {
        return isset($this->redirect_options);
    }

    public function clearRedirectOptions()
    {
        unset($this->redirect_options);
    }

    /**
     * Parameters defining the redirect action. Cannot be specified for any other actions. This field is only supported in Global Security Policies of type CLOUD_ARMOR.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.SecurityPolicyRuleRedirectOptions redirect_options = 163285307;</code>
     * @param \Google\Cloud\Compute\V1\SecurityPolicyRuleRedirectOptions $var
     * @return $this
     */
    public function setRedirectOptions($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\SecurityPolicyRuleRedirectOptions::class);
        $this->redirect_options = $var;

        return $this;
    }

}

