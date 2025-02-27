<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/recaptchaenterprise/v1/recaptchaenterprise.proto

namespace Google\Cloud\RecaptchaEnterprise\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A reCAPTCHA Enterprise assessment resource.
 *
 * Generated from protobuf message <code>google.cloud.recaptchaenterprise.v1.Assessment</code>
 */
class Assessment extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The resource name for the Assessment in the format
     * `projects/{project}/assessments/{assessment}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $name = '';
    /**
     * The event being assessed.
     *
     * Generated from protobuf field <code>.google.cloud.recaptchaenterprise.v1.Event event = 2;</code>
     */
    private $event = null;
    /**
     * Output only. The risk analysis result for the event being assessed.
     *
     * Generated from protobuf field <code>.google.cloud.recaptchaenterprise.v1.RiskAnalysis risk_analysis = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $risk_analysis = null;
    /**
     * Output only. Properties of the provided event token.
     *
     * Generated from protobuf field <code>.google.cloud.recaptchaenterprise.v1.TokenProperties token_properties = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $token_properties = null;
    /**
     * Account verification information for identity verification. The assessment
     * event must include a token and site key to use this feature.
     *
     * Generated from protobuf field <code>.google.cloud.recaptchaenterprise.v1.AccountVerificationInfo account_verification = 5;</code>
     */
    private $account_verification = null;
    /**
     * Assessment returned by account defender when a hashed_account_id is
     * provided.
     *
     * Generated from protobuf field <code>.google.cloud.recaptchaenterprise.v1.AccountDefenderAssessment account_defender_assessment = 6;</code>
     */
    private $account_defender_assessment = null;
    /**
     * The private password leak verification field contains the parameters that
     * are used to to check for leaks privately without sharing user credentials.
     *
     * Generated from protobuf field <code>.google.cloud.recaptchaenterprise.v1.PrivatePasswordLeakVerification private_password_leak_verification = 8;</code>
     */
    private $private_password_leak_verification = null;
    /**
     * Assessment returned when firewall policies belonging to the project are
     * evaluated using the field firewall_policy_evaluation.
     *
     * Generated from protobuf field <code>.google.cloud.recaptchaenterprise.v1.FirewallPolicyAssessment firewall_policy_assessment = 10;</code>
     */
    private $firewall_policy_assessment = null;
    /**
     * Assessment returned by Fraud Prevention when TransactionData is provided.
     *
     * Generated from protobuf field <code>.google.cloud.recaptchaenterprise.v1.FraudPreventionAssessment fraud_prevention_assessment = 11;</code>
     */
    private $fraud_prevention_assessment = null;
    /**
     * Output only. Fraud Signals specific to the users involved in a payment
     * transaction.
     *
     * Generated from protobuf field <code>.google.cloud.recaptchaenterprise.v1.FraudSignals fraud_signals = 13 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $fraud_signals = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Output only. The resource name for the Assessment in the format
     *           `projects/{project}/assessments/{assessment}`.
     *     @type \Google\Cloud\RecaptchaEnterprise\V1\Event $event
     *           The event being assessed.
     *     @type \Google\Cloud\RecaptchaEnterprise\V1\RiskAnalysis $risk_analysis
     *           Output only. The risk analysis result for the event being assessed.
     *     @type \Google\Cloud\RecaptchaEnterprise\V1\TokenProperties $token_properties
     *           Output only. Properties of the provided event token.
     *     @type \Google\Cloud\RecaptchaEnterprise\V1\AccountVerificationInfo $account_verification
     *           Account verification information for identity verification. The assessment
     *           event must include a token and site key to use this feature.
     *     @type \Google\Cloud\RecaptchaEnterprise\V1\AccountDefenderAssessment $account_defender_assessment
     *           Assessment returned by account defender when a hashed_account_id is
     *           provided.
     *     @type \Google\Cloud\RecaptchaEnterprise\V1\PrivatePasswordLeakVerification $private_password_leak_verification
     *           The private password leak verification field contains the parameters that
     *           are used to to check for leaks privately without sharing user credentials.
     *     @type \Google\Cloud\RecaptchaEnterprise\V1\FirewallPolicyAssessment $firewall_policy_assessment
     *           Assessment returned when firewall policies belonging to the project are
     *           evaluated using the field firewall_policy_evaluation.
     *     @type \Google\Cloud\RecaptchaEnterprise\V1\FraudPreventionAssessment $fraud_prevention_assessment
     *           Assessment returned by Fraud Prevention when TransactionData is provided.
     *     @type \Google\Cloud\RecaptchaEnterprise\V1\FraudSignals $fraud_signals
     *           Output only. Fraud Signals specific to the users involved in a payment
     *           transaction.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Recaptchaenterprise\V1\Recaptchaenterprise::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The resource name for the Assessment in the format
     * `projects/{project}/assessments/{assessment}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. The resource name for the Assessment in the format
     * `projects/{project}/assessments/{assessment}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * The event being assessed.
     *
     * Generated from protobuf field <code>.google.cloud.recaptchaenterprise.v1.Event event = 2;</code>
     * @return \Google\Cloud\RecaptchaEnterprise\V1\Event|null
     */
    public function getEvent()
    {
        return $this->event;
    }

    public function hasEvent()
    {
        return isset($this->event);
    }

    public function clearEvent()
    {
        unset($this->event);
    }

    /**
     * The event being assessed.
     *
     * Generated from protobuf field <code>.google.cloud.recaptchaenterprise.v1.Event event = 2;</code>
     * @param \Google\Cloud\RecaptchaEnterprise\V1\Event $var
     * @return $this
     */
    public function setEvent($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\RecaptchaEnterprise\V1\Event::class);
        $this->event = $var;

        return $this;
    }

    /**
     * Output only. The risk analysis result for the event being assessed.
     *
     * Generated from protobuf field <code>.google.cloud.recaptchaenterprise.v1.RiskAnalysis risk_analysis = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\RecaptchaEnterprise\V1\RiskAnalysis|null
     */
    public function getRiskAnalysis()
    {
        return $this->risk_analysis;
    }

    public function hasRiskAnalysis()
    {
        return isset($this->risk_analysis);
    }

    public function clearRiskAnalysis()
    {
        unset($this->risk_analysis);
    }

    /**
     * Output only. The risk analysis result for the event being assessed.
     *
     * Generated from protobuf field <code>.google.cloud.recaptchaenterprise.v1.RiskAnalysis risk_analysis = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\RecaptchaEnterprise\V1\RiskAnalysis $var
     * @return $this
     */
    public function setRiskAnalysis($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\RecaptchaEnterprise\V1\RiskAnalysis::class);
        $this->risk_analysis = $var;

        return $this;
    }

    /**
     * Output only. Properties of the provided event token.
     *
     * Generated from protobuf field <code>.google.cloud.recaptchaenterprise.v1.TokenProperties token_properties = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\RecaptchaEnterprise\V1\TokenProperties|null
     */
    public function getTokenProperties()
    {
        return $this->token_properties;
    }

    public function hasTokenProperties()
    {
        return isset($this->token_properties);
    }

    public function clearTokenProperties()
    {
        unset($this->token_properties);
    }

    /**
     * Output only. Properties of the provided event token.
     *
     * Generated from protobuf field <code>.google.cloud.recaptchaenterprise.v1.TokenProperties token_properties = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\RecaptchaEnterprise\V1\TokenProperties $var
     * @return $this
     */
    public function setTokenProperties($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\RecaptchaEnterprise\V1\TokenProperties::class);
        $this->token_properties = $var;

        return $this;
    }

    /**
     * Account verification information for identity verification. The assessment
     * event must include a token and site key to use this feature.
     *
     * Generated from protobuf field <code>.google.cloud.recaptchaenterprise.v1.AccountVerificationInfo account_verification = 5;</code>
     * @return \Google\Cloud\RecaptchaEnterprise\V1\AccountVerificationInfo|null
     */
    public function getAccountVerification()
    {
        return $this->account_verification;
    }

    public function hasAccountVerification()
    {
        return isset($this->account_verification);
    }

    public function clearAccountVerification()
    {
        unset($this->account_verification);
    }

    /**
     * Account verification information for identity verification. The assessment
     * event must include a token and site key to use this feature.
     *
     * Generated from protobuf field <code>.google.cloud.recaptchaenterprise.v1.AccountVerificationInfo account_verification = 5;</code>
     * @param \Google\Cloud\RecaptchaEnterprise\V1\AccountVerificationInfo $var
     * @return $this
     */
    public function setAccountVerification($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\RecaptchaEnterprise\V1\AccountVerificationInfo::class);
        $this->account_verification = $var;

        return $this;
    }

    /**
     * Assessment returned by account defender when a hashed_account_id is
     * provided.
     *
     * Generated from protobuf field <code>.google.cloud.recaptchaenterprise.v1.AccountDefenderAssessment account_defender_assessment = 6;</code>
     * @return \Google\Cloud\RecaptchaEnterprise\V1\AccountDefenderAssessment|null
     */
    public function getAccountDefenderAssessment()
    {
        return $this->account_defender_assessment;
    }

    public function hasAccountDefenderAssessment()
    {
        return isset($this->account_defender_assessment);
    }

    public function clearAccountDefenderAssessment()
    {
        unset($this->account_defender_assessment);
    }

    /**
     * Assessment returned by account defender when a hashed_account_id is
     * provided.
     *
     * Generated from protobuf field <code>.google.cloud.recaptchaenterprise.v1.AccountDefenderAssessment account_defender_assessment = 6;</code>
     * @param \Google\Cloud\RecaptchaEnterprise\V1\AccountDefenderAssessment $var
     * @return $this
     */
    public function setAccountDefenderAssessment($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\RecaptchaEnterprise\V1\AccountDefenderAssessment::class);
        $this->account_defender_assessment = $var;

        return $this;
    }

    /**
     * The private password leak verification field contains the parameters that
     * are used to to check for leaks privately without sharing user credentials.
     *
     * Generated from protobuf field <code>.google.cloud.recaptchaenterprise.v1.PrivatePasswordLeakVerification private_password_leak_verification = 8;</code>
     * @return \Google\Cloud\RecaptchaEnterprise\V1\PrivatePasswordLeakVerification|null
     */
    public function getPrivatePasswordLeakVerification()
    {
        return $this->private_password_leak_verification;
    }

    public function hasPrivatePasswordLeakVerification()
    {
        return isset($this->private_password_leak_verification);
    }

    public function clearPrivatePasswordLeakVerification()
    {
        unset($this->private_password_leak_verification);
    }

    /**
     * The private password leak verification field contains the parameters that
     * are used to to check for leaks privately without sharing user credentials.
     *
     * Generated from protobuf field <code>.google.cloud.recaptchaenterprise.v1.PrivatePasswordLeakVerification private_password_leak_verification = 8;</code>
     * @param \Google\Cloud\RecaptchaEnterprise\V1\PrivatePasswordLeakVerification $var
     * @return $this
     */
    public function setPrivatePasswordLeakVerification($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\RecaptchaEnterprise\V1\PrivatePasswordLeakVerification::class);
        $this->private_password_leak_verification = $var;

        return $this;
    }

    /**
     * Assessment returned when firewall policies belonging to the project are
     * evaluated using the field firewall_policy_evaluation.
     *
     * Generated from protobuf field <code>.google.cloud.recaptchaenterprise.v1.FirewallPolicyAssessment firewall_policy_assessment = 10;</code>
     * @return \Google\Cloud\RecaptchaEnterprise\V1\FirewallPolicyAssessment|null
     */
    public function getFirewallPolicyAssessment()
    {
        return $this->firewall_policy_assessment;
    }

    public function hasFirewallPolicyAssessment()
    {
        return isset($this->firewall_policy_assessment);
    }

    public function clearFirewallPolicyAssessment()
    {
        unset($this->firewall_policy_assessment);
    }

    /**
     * Assessment returned when firewall policies belonging to the project are
     * evaluated using the field firewall_policy_evaluation.
     *
     * Generated from protobuf field <code>.google.cloud.recaptchaenterprise.v1.FirewallPolicyAssessment firewall_policy_assessment = 10;</code>
     * @param \Google\Cloud\RecaptchaEnterprise\V1\FirewallPolicyAssessment $var
     * @return $this
     */
    public function setFirewallPolicyAssessment($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\RecaptchaEnterprise\V1\FirewallPolicyAssessment::class);
        $this->firewall_policy_assessment = $var;

        return $this;
    }

    /**
     * Assessment returned by Fraud Prevention when TransactionData is provided.
     *
     * Generated from protobuf field <code>.google.cloud.recaptchaenterprise.v1.FraudPreventionAssessment fraud_prevention_assessment = 11;</code>
     * @return \Google\Cloud\RecaptchaEnterprise\V1\FraudPreventionAssessment|null
     */
    public function getFraudPreventionAssessment()
    {
        return $this->fraud_prevention_assessment;
    }

    public function hasFraudPreventionAssessment()
    {
        return isset($this->fraud_prevention_assessment);
    }

    public function clearFraudPreventionAssessment()
    {
        unset($this->fraud_prevention_assessment);
    }

    /**
     * Assessment returned by Fraud Prevention when TransactionData is provided.
     *
     * Generated from protobuf field <code>.google.cloud.recaptchaenterprise.v1.FraudPreventionAssessment fraud_prevention_assessment = 11;</code>
     * @param \Google\Cloud\RecaptchaEnterprise\V1\FraudPreventionAssessment $var
     * @return $this
     */
    public function setFraudPreventionAssessment($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\RecaptchaEnterprise\V1\FraudPreventionAssessment::class);
        $this->fraud_prevention_assessment = $var;

        return $this;
    }

    /**
     * Output only. Fraud Signals specific to the users involved in a payment
     * transaction.
     *
     * Generated from protobuf field <code>.google.cloud.recaptchaenterprise.v1.FraudSignals fraud_signals = 13 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\RecaptchaEnterprise\V1\FraudSignals|null
     */
    public function getFraudSignals()
    {
        return $this->fraud_signals;
    }

    public function hasFraudSignals()
    {
        return isset($this->fraud_signals);
    }

    public function clearFraudSignals()
    {
        unset($this->fraud_signals);
    }

    /**
     * Output only. Fraud Signals specific to the users involved in a payment
     * transaction.
     *
     * Generated from protobuf field <code>.google.cloud.recaptchaenterprise.v1.FraudSignals fraud_signals = 13 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\RecaptchaEnterprise\V1\FraudSignals $var
     * @return $this
     */
    public function setFraudSignals($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\RecaptchaEnterprise\V1\FraudSignals::class);
        $this->fraud_signals = $var;

        return $this;
    }

}

