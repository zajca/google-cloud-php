<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/cx/v3/environment.proto

namespace Google\Cloud\Dialogflow\Cx\V3\Environment;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The configuration for continuous tests.
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.cx.v3.Environment.TestCasesConfig</code>
 */
class TestCasesConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * A list of test case names to run. They should be under the same agent.
     * Format of each test case name: `projects/<Project ID>/locations/
     * <Location ID>/agents/<AgentID>/testCases/<TestCase ID>`
     *
     * Generated from protobuf field <code>repeated string test_cases = 1 [(.google.api.resource_reference) = {</code>
     */
    private $test_cases;
    /**
     * Whether to run test cases in
     * [TestCasesConfig.test_cases][google.cloud.dialogflow.cx.v3.Environment.TestCasesConfig.test_cases]
     * periodically. Default false. If set to true, run once a day.
     *
     * Generated from protobuf field <code>bool enable_continuous_run = 2;</code>
     */
    protected $enable_continuous_run = false;
    /**
     * Whether to run test cases in
     * [TestCasesConfig.test_cases][google.cloud.dialogflow.cx.v3.Environment.TestCasesConfig.test_cases]
     * before deploying a flow version to the environment. Default false.
     *
     * Generated from protobuf field <code>bool enable_predeployment_run = 3;</code>
     */
    protected $enable_predeployment_run = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $test_cases
     *           A list of test case names to run. They should be under the same agent.
     *           Format of each test case name: `projects/<Project ID>/locations/
     *           <Location ID>/agents/<AgentID>/testCases/<TestCase ID>`
     *     @type bool $enable_continuous_run
     *           Whether to run test cases in
     *           [TestCasesConfig.test_cases][google.cloud.dialogflow.cx.v3.Environment.TestCasesConfig.test_cases]
     *           periodically. Default false. If set to true, run once a day.
     *     @type bool $enable_predeployment_run
     *           Whether to run test cases in
     *           [TestCasesConfig.test_cases][google.cloud.dialogflow.cx.v3.Environment.TestCasesConfig.test_cases]
     *           before deploying a flow version to the environment. Default false.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\Cx\V3\Environment::initOnce();
        parent::__construct($data);
    }

    /**
     * A list of test case names to run. They should be under the same agent.
     * Format of each test case name: `projects/<Project ID>/locations/
     * <Location ID>/agents/<AgentID>/testCases/<TestCase ID>`
     *
     * Generated from protobuf field <code>repeated string test_cases = 1 [(.google.api.resource_reference) = {</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTestCases()
    {
        return $this->test_cases;
    }

    /**
     * A list of test case names to run. They should be under the same agent.
     * Format of each test case name: `projects/<Project ID>/locations/
     * <Location ID>/agents/<AgentID>/testCases/<TestCase ID>`
     *
     * Generated from protobuf field <code>repeated string test_cases = 1 [(.google.api.resource_reference) = {</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTestCases($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->test_cases = $arr;

        return $this;
    }

    /**
     * Whether to run test cases in
     * [TestCasesConfig.test_cases][google.cloud.dialogflow.cx.v3.Environment.TestCasesConfig.test_cases]
     * periodically. Default false. If set to true, run once a day.
     *
     * Generated from protobuf field <code>bool enable_continuous_run = 2;</code>
     * @return bool
     */
    public function getEnableContinuousRun()
    {
        return $this->enable_continuous_run;
    }

    /**
     * Whether to run test cases in
     * [TestCasesConfig.test_cases][google.cloud.dialogflow.cx.v3.Environment.TestCasesConfig.test_cases]
     * periodically. Default false. If set to true, run once a day.
     *
     * Generated from protobuf field <code>bool enable_continuous_run = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setEnableContinuousRun($var)
    {
        GPBUtil::checkBool($var);
        $this->enable_continuous_run = $var;

        return $this;
    }

    /**
     * Whether to run test cases in
     * [TestCasesConfig.test_cases][google.cloud.dialogflow.cx.v3.Environment.TestCasesConfig.test_cases]
     * before deploying a flow version to the environment. Default false.
     *
     * Generated from protobuf field <code>bool enable_predeployment_run = 3;</code>
     * @return bool
     */
    public function getEnablePredeploymentRun()
    {
        return $this->enable_predeployment_run;
    }

    /**
     * Whether to run test cases in
     * [TestCasesConfig.test_cases][google.cloud.dialogflow.cx.v3.Environment.TestCasesConfig.test_cases]
     * before deploying a flow version to the environment. Default false.
     *
     * Generated from protobuf field <code>bool enable_predeployment_run = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setEnablePredeploymentRun($var)
    {
        GPBUtil::checkBool($var);
        $this->enable_predeployment_run = $var;

        return $this;
    }

}


