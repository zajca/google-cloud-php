<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/discoveryengine/v1beta/conversational_search_service.proto

namespace Google\Cloud\DiscoveryEngine\V1beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request for UpdateSession method.
 *
 * Generated from protobuf message <code>google.cloud.discoveryengine.v1beta.UpdateSessionRequest</code>
 */
class UpdateSessionRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The Session to update.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1beta.Session session = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $session = null;
    /**
     * Indicates which fields in the provided
     * [Session][google.cloud.discoveryengine.v1beta.Session] to update. The
     * following are NOT supported:
     * * [Session.name][google.cloud.discoveryengine.v1beta.Session.name]
     * If not set or empty, all supported fields are updated.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     */
    protected $update_mask = null;

    /**
     * @param \Google\Cloud\DiscoveryEngine\V1beta\Session $session    Required. The Session to update.
     * @param \Google\Protobuf\FieldMask                   $updateMask Indicates which fields in the provided
     *                                                                 [Session][google.cloud.discoveryengine.v1beta.Session] to update. The
     *                                                                 following are NOT supported:
     *
     *                                                                 * [Session.name][google.cloud.discoveryengine.v1beta.Session.name]
     *
     *                                                                 If not set or empty, all supported fields are updated.
     *
     * @return \Google\Cloud\DiscoveryEngine\V1beta\UpdateSessionRequest
     *
     * @experimental
     */
    public static function build(\Google\Cloud\DiscoveryEngine\V1beta\Session $session, \Google\Protobuf\FieldMask $updateMask): self
    {
        return (new self())
            ->setSession($session)
            ->setUpdateMask($updateMask);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\DiscoveryEngine\V1beta\Session $session
     *           Required. The Session to update.
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           Indicates which fields in the provided
     *           [Session][google.cloud.discoveryengine.v1beta.Session] to update. The
     *           following are NOT supported:
     *           * [Session.name][google.cloud.discoveryengine.v1beta.Session.name]
     *           If not set or empty, all supported fields are updated.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Discoveryengine\V1Beta\ConversationalSearchService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The Session to update.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1beta.Session session = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\DiscoveryEngine\V1beta\Session|null
     */
    public function getSession()
    {
        return $this->session;
    }

    public function hasSession()
    {
        return isset($this->session);
    }

    public function clearSession()
    {
        unset($this->session);
    }

    /**
     * Required. The Session to update.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1beta.Session session = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\DiscoveryEngine\V1beta\Session $var
     * @return $this
     */
    public function setSession($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DiscoveryEngine\V1beta\Session::class);
        $this->session = $var;

        return $this;
    }

    /**
     * Indicates which fields in the provided
     * [Session][google.cloud.discoveryengine.v1beta.Session] to update. The
     * following are NOT supported:
     * * [Session.name][google.cloud.discoveryengine.v1beta.Session.name]
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
     * [Session][google.cloud.discoveryengine.v1beta.Session] to update. The
     * following are NOT supported:
     * * [Session.name][google.cloud.discoveryengine.v1beta.Session.name]
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

