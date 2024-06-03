<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/cx/v3/webhook.proto

namespace Google\Cloud\Dialogflow\Cx\V3\PageInfo\FormInfo;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents parameter information.
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.cx.v3.PageInfo.FormInfo.ParameterInfo</code>
 */
class ParameterInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Always present for
     * [WebhookRequest][google.cloud.dialogflow.cx.v3.WebhookRequest].
     * Required for
     * [WebhookResponse][google.cloud.dialogflow.cx.v3.WebhookResponse].
     * The human-readable name of the parameter, unique within the form. This
     * field cannot be modified by the webhook.
     *
     * Generated from protobuf field <code>string display_name = 1;</code>
     */
    protected $display_name = '';
    /**
     * Optional for both
     * [WebhookRequest][google.cloud.dialogflow.cx.v3.WebhookRequest] and
     * [WebhookResponse][google.cloud.dialogflow.cx.v3.WebhookResponse].
     * Indicates whether the parameter is required. Optional parameters will
     * not trigger prompts; however, they are filled if the user specifies
     * them. Required parameters must be filled before form filling concludes.
     *
     * Generated from protobuf field <code>bool required = 2;</code>
     */
    protected $required = false;
    /**
     * Always present for
     * [WebhookRequest][google.cloud.dialogflow.cx.v3.WebhookRequest].
     * Required for
     * [WebhookResponse][google.cloud.dialogflow.cx.v3.WebhookResponse]. The
     * state of the parameter. This field can be set to
     * [INVALID][google.cloud.dialogflow.cx.v3.PageInfo.FormInfo.ParameterInfo.ParameterState.INVALID]
     * by the webhook to invalidate the parameter; other values set by the
     * webhook will be ignored.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.cx.v3.PageInfo.FormInfo.ParameterInfo.ParameterState state = 3;</code>
     */
    protected $state = 0;
    /**
     * Optional for both
     * [WebhookRequest][google.cloud.dialogflow.cx.v3.WebhookRequest] and
     * [WebhookResponse][google.cloud.dialogflow.cx.v3.WebhookResponse]. The
     * value of the parameter. This field can be set by the webhook to change
     * the parameter value.
     *
     * Generated from protobuf field <code>.google.protobuf.Value value = 4;</code>
     */
    protected $value = null;
    /**
     * Optional for
     * [WebhookRequest][google.cloud.dialogflow.cx.v3.WebhookRequest]. Ignored
     * for [WebhookResponse][google.cloud.dialogflow.cx.v3.WebhookResponse].
     * Indicates if the parameter value was just collected on the last
     * conversation turn.
     *
     * Generated from protobuf field <code>bool just_collected = 5;</code>
     */
    protected $just_collected = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $display_name
     *           Always present for
     *           [WebhookRequest][google.cloud.dialogflow.cx.v3.WebhookRequest].
     *           Required for
     *           [WebhookResponse][google.cloud.dialogflow.cx.v3.WebhookResponse].
     *           The human-readable name of the parameter, unique within the form. This
     *           field cannot be modified by the webhook.
     *     @type bool $required
     *           Optional for both
     *           [WebhookRequest][google.cloud.dialogflow.cx.v3.WebhookRequest] and
     *           [WebhookResponse][google.cloud.dialogflow.cx.v3.WebhookResponse].
     *           Indicates whether the parameter is required. Optional parameters will
     *           not trigger prompts; however, they are filled if the user specifies
     *           them. Required parameters must be filled before form filling concludes.
     *     @type int $state
     *           Always present for
     *           [WebhookRequest][google.cloud.dialogflow.cx.v3.WebhookRequest].
     *           Required for
     *           [WebhookResponse][google.cloud.dialogflow.cx.v3.WebhookResponse]. The
     *           state of the parameter. This field can be set to
     *           [INVALID][google.cloud.dialogflow.cx.v3.PageInfo.FormInfo.ParameterInfo.ParameterState.INVALID]
     *           by the webhook to invalidate the parameter; other values set by the
     *           webhook will be ignored.
     *     @type \Google\Protobuf\Value $value
     *           Optional for both
     *           [WebhookRequest][google.cloud.dialogflow.cx.v3.WebhookRequest] and
     *           [WebhookResponse][google.cloud.dialogflow.cx.v3.WebhookResponse]. The
     *           value of the parameter. This field can be set by the webhook to change
     *           the parameter value.
     *     @type bool $just_collected
     *           Optional for
     *           [WebhookRequest][google.cloud.dialogflow.cx.v3.WebhookRequest]. Ignored
     *           for [WebhookResponse][google.cloud.dialogflow.cx.v3.WebhookResponse].
     *           Indicates if the parameter value was just collected on the last
     *           conversation turn.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\Cx\V3\Webhook::initOnce();
        parent::__construct($data);
    }

    /**
     * Always present for
     * [WebhookRequest][google.cloud.dialogflow.cx.v3.WebhookRequest].
     * Required for
     * [WebhookResponse][google.cloud.dialogflow.cx.v3.WebhookResponse].
     * The human-readable name of the parameter, unique within the form. This
     * field cannot be modified by the webhook.
     *
     * Generated from protobuf field <code>string display_name = 1;</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * Always present for
     * [WebhookRequest][google.cloud.dialogflow.cx.v3.WebhookRequest].
     * Required for
     * [WebhookResponse][google.cloud.dialogflow.cx.v3.WebhookResponse].
     * The human-readable name of the parameter, unique within the form. This
     * field cannot be modified by the webhook.
     *
     * Generated from protobuf field <code>string display_name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->display_name = $var;

        return $this;
    }

    /**
     * Optional for both
     * [WebhookRequest][google.cloud.dialogflow.cx.v3.WebhookRequest] and
     * [WebhookResponse][google.cloud.dialogflow.cx.v3.WebhookResponse].
     * Indicates whether the parameter is required. Optional parameters will
     * not trigger prompts; however, they are filled if the user specifies
     * them. Required parameters must be filled before form filling concludes.
     *
     * Generated from protobuf field <code>bool required = 2;</code>
     * @return bool
     */
    public function getRequired()
    {
        return $this->required;
    }

    /**
     * Optional for both
     * [WebhookRequest][google.cloud.dialogflow.cx.v3.WebhookRequest] and
     * [WebhookResponse][google.cloud.dialogflow.cx.v3.WebhookResponse].
     * Indicates whether the parameter is required. Optional parameters will
     * not trigger prompts; however, they are filled if the user specifies
     * them. Required parameters must be filled before form filling concludes.
     *
     * Generated from protobuf field <code>bool required = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setRequired($var)
    {
        GPBUtil::checkBool($var);
        $this->required = $var;

        return $this;
    }

    /**
     * Always present for
     * [WebhookRequest][google.cloud.dialogflow.cx.v3.WebhookRequest].
     * Required for
     * [WebhookResponse][google.cloud.dialogflow.cx.v3.WebhookResponse]. The
     * state of the parameter. This field can be set to
     * [INVALID][google.cloud.dialogflow.cx.v3.PageInfo.FormInfo.ParameterInfo.ParameterState.INVALID]
     * by the webhook to invalidate the parameter; other values set by the
     * webhook will be ignored.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.cx.v3.PageInfo.FormInfo.ParameterInfo.ParameterState state = 3;</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Always present for
     * [WebhookRequest][google.cloud.dialogflow.cx.v3.WebhookRequest].
     * Required for
     * [WebhookResponse][google.cloud.dialogflow.cx.v3.WebhookResponse]. The
     * state of the parameter. This field can be set to
     * [INVALID][google.cloud.dialogflow.cx.v3.PageInfo.FormInfo.ParameterInfo.ParameterState.INVALID]
     * by the webhook to invalidate the parameter; other values set by the
     * webhook will be ignored.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.cx.v3.PageInfo.FormInfo.ParameterInfo.ParameterState state = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Dialogflow\Cx\V3\PageInfo\FormInfo\ParameterInfo\ParameterState::class);
        $this->state = $var;

        return $this;
    }

    /**
     * Optional for both
     * [WebhookRequest][google.cloud.dialogflow.cx.v3.WebhookRequest] and
     * [WebhookResponse][google.cloud.dialogflow.cx.v3.WebhookResponse]. The
     * value of the parameter. This field can be set by the webhook to change
     * the parameter value.
     *
     * Generated from protobuf field <code>.google.protobuf.Value value = 4;</code>
     * @return \Google\Protobuf\Value|null
     */
    public function getValue()
    {
        return $this->value;
    }

    public function hasValue()
    {
        return isset($this->value);
    }

    public function clearValue()
    {
        unset($this->value);
    }

    /**
     * Optional for both
     * [WebhookRequest][google.cloud.dialogflow.cx.v3.WebhookRequest] and
     * [WebhookResponse][google.cloud.dialogflow.cx.v3.WebhookResponse]. The
     * value of the parameter. This field can be set by the webhook to change
     * the parameter value.
     *
     * Generated from protobuf field <code>.google.protobuf.Value value = 4;</code>
     * @param \Google\Protobuf\Value $var
     * @return $this
     */
    public function setValue($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Value::class);
        $this->value = $var;

        return $this;
    }

    /**
     * Optional for
     * [WebhookRequest][google.cloud.dialogflow.cx.v3.WebhookRequest]. Ignored
     * for [WebhookResponse][google.cloud.dialogflow.cx.v3.WebhookResponse].
     * Indicates if the parameter value was just collected on the last
     * conversation turn.
     *
     * Generated from protobuf field <code>bool just_collected = 5;</code>
     * @return bool
     */
    public function getJustCollected()
    {
        return $this->just_collected;
    }

    /**
     * Optional for
     * [WebhookRequest][google.cloud.dialogflow.cx.v3.WebhookRequest]. Ignored
     * for [WebhookResponse][google.cloud.dialogflow.cx.v3.WebhookResponse].
     * Indicates if the parameter value was just collected on the last
     * conversation turn.
     *
     * Generated from protobuf field <code>bool just_collected = 5;</code>
     * @param bool $var
     * @return $this
     */
    public function setJustCollected($var)
    {
        GPBUtil::checkBool($var);
        $this->just_collected = $var;

        return $this;
    }

}


