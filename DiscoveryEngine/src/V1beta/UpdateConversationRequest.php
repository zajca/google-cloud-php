<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/discoveryengine/v1beta/conversational_search_service.proto

namespace Google\Cloud\DiscoveryEngine\V1beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request for UpdateConversation method.
 *
 * Generated from protobuf message <code>google.cloud.discoveryengine.v1beta.UpdateConversationRequest</code>
 */
class UpdateConversationRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The Conversation to update.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1beta.Conversation conversation = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $conversation = null;
    /**
     * Indicates which fields in the provided
     * [Conversation][google.cloud.discoveryengine.v1beta.Conversation] to update.
     * The following are NOT supported:
     * * [Conversation.name][google.cloud.discoveryengine.v1beta.Conversation.name]
     * If not set or empty, all supported fields are updated.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     */
    protected $update_mask = null;

    /**
     * @param \Google\Cloud\DiscoveryEngine\V1beta\Conversation $conversation Required. The Conversation to update.
     * @param \Google\Protobuf\FieldMask                        $updateMask   Indicates which fields in the provided
     *                                                                        [Conversation][google.cloud.discoveryengine.v1beta.Conversation] to update.
     *                                                                        The following are NOT supported:
     *
     *                                                                        * [Conversation.name][google.cloud.discoveryengine.v1beta.Conversation.name]
     *
     *                                                                        If not set or empty, all supported fields are updated.
     *
     * @return \Google\Cloud\DiscoveryEngine\V1beta\UpdateConversationRequest
     *
     * @experimental
     */
    public static function build(\Google\Cloud\DiscoveryEngine\V1beta\Conversation $conversation, \Google\Protobuf\FieldMask $updateMask): self
    {
        return (new self())
            ->setConversation($conversation)
            ->setUpdateMask($updateMask);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\DiscoveryEngine\V1beta\Conversation $conversation
     *           Required. The Conversation to update.
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           Indicates which fields in the provided
     *           [Conversation][google.cloud.discoveryengine.v1beta.Conversation] to update.
     *           The following are NOT supported:
     *           * [Conversation.name][google.cloud.discoveryengine.v1beta.Conversation.name]
     *           If not set or empty, all supported fields are updated.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Discoveryengine\V1Beta\ConversationalSearchService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The Conversation to update.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1beta.Conversation conversation = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\DiscoveryEngine\V1beta\Conversation|null
     */
    public function getConversation()
    {
        return $this->conversation;
    }

    public function hasConversation()
    {
        return isset($this->conversation);
    }

    public function clearConversation()
    {
        unset($this->conversation);
    }

    /**
     * Required. The Conversation to update.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1beta.Conversation conversation = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\DiscoveryEngine\V1beta\Conversation $var
     * @return $this
     */
    public function setConversation($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DiscoveryEngine\V1beta\Conversation::class);
        $this->conversation = $var;

        return $this;
    }

    /**
     * Indicates which fields in the provided
     * [Conversation][google.cloud.discoveryengine.v1beta.Conversation] to update.
     * The following are NOT supported:
     * * [Conversation.name][google.cloud.discoveryengine.v1beta.Conversation.name]
     * If not set or empty, all supported fields are updated.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     * @return \Google\Protobuf\FieldMask|null
     */
    public function getUpdateMask()
    {
        return $this->update_mask;
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
     * Indicates which fields in the provided
     * [Conversation][google.cloud.discoveryengine.v1beta.Conversation] to update.
     * The following are NOT supported:
     * * [Conversation.name][google.cloud.discoveryengine.v1beta.Conversation.name]
     * If not set or empty, all supported fields are updated.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;

        return $this;
    }

}

