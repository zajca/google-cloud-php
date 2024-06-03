<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/cx/v3/test_case.proto

namespace Google\Cloud\Dialogflow\Cx\V3\ConversationTurn;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The output from the virtual agent.
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.cx.v3.ConversationTurn.VirtualAgentOutput</code>
 */
class VirtualAgentOutput extends \Google\Protobuf\Internal\Message
{
    /**
     * The session parameters available to the bot at this point.
     *
     * Generated from protobuf field <code>.google.protobuf.Struct session_parameters = 4;</code>
     */
    protected $session_parameters = null;
    /**
     * Output only. If this is part of a [result conversation
     * turn][TestCaseResult.conversation_turns], the list of differences
     * between the original run and the replay for this output, if any.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.cx.v3.TestRunDifference differences = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $differences;
    /**
     * Required. Input only. The diagnostic
     * [info][Session.DetectIntentResponse.QueryResult.diagnostic_info]
     * output for the turn. Required to calculate the testing coverage.
     *
     * Generated from protobuf field <code>.google.protobuf.Struct diagnostic_info = 6 [(.google.api.field_behavior) = REQUIRED, (.google.api.field_behavior) = INPUT_ONLY];</code>
     */
    protected $diagnostic_info = null;
    /**
     * The [Intent][google.cloud.dialogflow.cx.v3.Intent] that triggered the
     * response. Only name and displayName will be set.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.cx.v3.Intent triggered_intent = 7;</code>
     */
    protected $triggered_intent = null;
    /**
     * The [Page][google.cloud.dialogflow.cx.v3.Page] on which the utterance was
     * spoken. Only name and displayName will be set.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.cx.v3.Page current_page = 8;</code>
     */
    protected $current_page = null;
    /**
     * The [text][google.cloud.dialogflow.cx.v3.ResponseMessage.Text] responses
     * from the agent for the turn.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.cx.v3.ResponseMessage.Text text_responses = 9;</code>
     */
    private $text_responses;
    /**
     * Response error from the agent in the test result. If set, other output
     * is empty.
     *
     * Generated from protobuf field <code>.google.rpc.Status status = 10;</code>
     */
    protected $status = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Struct $session_parameters
     *           The session parameters available to the bot at this point.
     *     @type array<\Google\Cloud\Dialogflow\Cx\V3\TestRunDifference>|\Google\Protobuf\Internal\RepeatedField $differences
     *           Output only. If this is part of a [result conversation
     *           turn][TestCaseResult.conversation_turns], the list of differences
     *           between the original run and the replay for this output, if any.
     *     @type \Google\Protobuf\Struct $diagnostic_info
     *           Required. Input only. The diagnostic
     *           [info][Session.DetectIntentResponse.QueryResult.diagnostic_info]
     *           output for the turn. Required to calculate the testing coverage.
     *     @type \Google\Cloud\Dialogflow\Cx\V3\Intent $triggered_intent
     *           The [Intent][google.cloud.dialogflow.cx.v3.Intent] that triggered the
     *           response. Only name and displayName will be set.
     *     @type \Google\Cloud\Dialogflow\Cx\V3\Page $current_page
     *           The [Page][google.cloud.dialogflow.cx.v3.Page] on which the utterance was
     *           spoken. Only name and displayName will be set.
     *     @type array<\Google\Cloud\Dialogflow\Cx\V3\ResponseMessage\Text>|\Google\Protobuf\Internal\RepeatedField $text_responses
     *           The [text][google.cloud.dialogflow.cx.v3.ResponseMessage.Text] responses
     *           from the agent for the turn.
     *     @type \Google\Rpc\Status $status
     *           Response error from the agent in the test result. If set, other output
     *           is empty.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\Cx\V3\TestCase::initOnce();
        parent::__construct($data);
    }

    /**
     * The session parameters available to the bot at this point.
     *
     * Generated from protobuf field <code>.google.protobuf.Struct session_parameters = 4;</code>
     * @return \Google\Protobuf\Struct|null
     */
    public function getSessionParameters()
    {
        return $this->session_parameters;
    }

    public function hasSessionParameters()
    {
        return isset($this->session_parameters);
    }

    public function clearSessionParameters()
    {
        unset($this->session_parameters);
    }

    /**
     * The session parameters available to the bot at this point.
     *
     * Generated from protobuf field <code>.google.protobuf.Struct session_parameters = 4;</code>
     * @param \Google\Protobuf\Struct $var
     * @return $this
     */
    public function setSessionParameters($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Struct::class);
        $this->session_parameters = $var;

        return $this;
    }

    /**
     * Output only. If this is part of a [result conversation
     * turn][TestCaseResult.conversation_turns], the list of differences
     * between the original run and the replay for this output, if any.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.cx.v3.TestRunDifference differences = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDifferences()
    {
        return $this->differences;
    }

    /**
     * Output only. If this is part of a [result conversation
     * turn][TestCaseResult.conversation_turns], the list of differences
     * between the original run and the replay for this output, if any.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.cx.v3.TestRunDifference differences = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param array<\Google\Cloud\Dialogflow\Cx\V3\TestRunDifference>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDifferences($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dialogflow\Cx\V3\TestRunDifference::class);
        $this->differences = $arr;

        return $this;
    }

    /**
     * Required. Input only. The diagnostic
     * [info][Session.DetectIntentResponse.QueryResult.diagnostic_info]
     * output for the turn. Required to calculate the testing coverage.
     *
     * Generated from protobuf field <code>.google.protobuf.Struct diagnostic_info = 6 [(.google.api.field_behavior) = REQUIRED, (.google.api.field_behavior) = INPUT_ONLY];</code>
     * @return \Google\Protobuf\Struct|null
     */
    public function getDiagnosticInfo()
    {
        return $this->diagnostic_info;
    }

    public function hasDiagnosticInfo()
    {
        return isset($this->diagnostic_info);
    }

    public function clearDiagnosticInfo()
    {
        unset($this->diagnostic_info);
    }

    /**
     * Required. Input only. The diagnostic
     * [info][Session.DetectIntentResponse.QueryResult.diagnostic_info]
     * output for the turn. Required to calculate the testing coverage.
     *
     * Generated from protobuf field <code>.google.protobuf.Struct diagnostic_info = 6 [(.google.api.field_behavior) = REQUIRED, (.google.api.field_behavior) = INPUT_ONLY];</code>
     * @param \Google\Protobuf\Struct $var
     * @return $this
     */
    public function setDiagnosticInfo($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Struct::class);
        $this->diagnostic_info = $var;

        return $this;
    }

    /**
     * The [Intent][google.cloud.dialogflow.cx.v3.Intent] that triggered the
     * response. Only name and displayName will be set.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.cx.v3.Intent triggered_intent = 7;</code>
     * @return \Google\Cloud\Dialogflow\Cx\V3\Intent|null
     */
    public function getTriggeredIntent()
    {
        return $this->triggered_intent;
    }

    public function hasTriggeredIntent()
    {
        return isset($this->triggered_intent);
    }

    public function clearTriggeredIntent()
    {
        unset($this->triggered_intent);
    }

    /**
     * The [Intent][google.cloud.dialogflow.cx.v3.Intent] that triggered the
     * response. Only name and displayName will be set.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.cx.v3.Intent triggered_intent = 7;</code>
     * @param \Google\Cloud\Dialogflow\Cx\V3\Intent $var
     * @return $this
     */
    public function setTriggeredIntent($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dialogflow\Cx\V3\Intent::class);
        $this->triggered_intent = $var;

        return $this;
    }

    /**
     * The [Page][google.cloud.dialogflow.cx.v3.Page] on which the utterance was
     * spoken. Only name and displayName will be set.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.cx.v3.Page current_page = 8;</code>
     * @return \Google\Cloud\Dialogflow\Cx\V3\Page|null
     */
    public function getCurrentPage()
    {
        return $this->current_page;
    }

    public function hasCurrentPage()
    {
        return isset($this->current_page);
    }

    public function clearCurrentPage()
    {
        unset($this->current_page);
    }

    /**
     * The [Page][google.cloud.dialogflow.cx.v3.Page] on which the utterance was
     * spoken. Only name and displayName will be set.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.cx.v3.Page current_page = 8;</code>
     * @param \Google\Cloud\Dialogflow\Cx\V3\Page $var
     * @return $this
     */
    public function setCurrentPage($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dialogflow\Cx\V3\Page::class);
        $this->current_page = $var;

        return $this;
    }

    /**
     * The [text][google.cloud.dialogflow.cx.v3.ResponseMessage.Text] responses
     * from the agent for the turn.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.cx.v3.ResponseMessage.Text text_responses = 9;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTextResponses()
    {
        return $this->text_responses;
    }

    /**
     * The [text][google.cloud.dialogflow.cx.v3.ResponseMessage.Text] responses
     * from the agent for the turn.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.cx.v3.ResponseMessage.Text text_responses = 9;</code>
     * @param array<\Google\Cloud\Dialogflow\Cx\V3\ResponseMessage\Text>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTextResponses($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dialogflow\Cx\V3\ResponseMessage\Text::class);
        $this->text_responses = $arr;

        return $this;
    }

    /**
     * Response error from the agent in the test result. If set, other output
     * is empty.
     *
     * Generated from protobuf field <code>.google.rpc.Status status = 10;</code>
     * @return \Google\Rpc\Status|null
     */
    public function getStatus()
    {
        return $this->status;
    }

    public function hasStatus()
    {
        return isset($this->status);
    }

    public function clearStatus()
    {
        unset($this->status);
    }

    /**
     * Response error from the agent in the test result. If set, other output
     * is empty.
     *
     * Generated from protobuf field <code>.google.rpc.Status status = 10;</code>
     * @param \Google\Rpc\Status $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkMessage($var, \Google\Rpc\Status::class);
        $this->status = $var;

        return $this;
    }

}


