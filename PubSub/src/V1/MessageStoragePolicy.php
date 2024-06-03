<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/pubsub/v1/pubsub.proto

namespace Google\Cloud\PubSub\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A policy constraining the storage of messages published to the topic.
 *
 * Generated from protobuf message <code>google.pubsub.v1.MessageStoragePolicy</code>
 */
class MessageStoragePolicy extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. A list of IDs of Google Cloud regions where messages that are
     * published to the topic may be persisted in storage. Messages published by
     * publishers running in non-allowed Google Cloud regions (or running outside
     * of Google Cloud altogether) are routed for storage in one of the allowed
     * regions. An empty list means that no regions are allowed, and is not a
     * valid configuration.
     *
     * Generated from protobuf field <code>repeated string allowed_persistence_regions = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $allowed_persistence_regions;
    /**
     * Optional. If true, `allowed_persistence_regions` is also used to enforce
     * in-transit guarantees for messages. That is, Pub/Sub will fail
     * Publish operations on this topic and subscribe operations
     * on any subscription attached to this topic in any region that is
     * not in `allowed_persistence_regions`.
     *
     * Generated from protobuf field <code>bool enforce_in_transit = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $enforce_in_transit = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $allowed_persistence_regions
     *           Optional. A list of IDs of Google Cloud regions where messages that are
     *           published to the topic may be persisted in storage. Messages published by
     *           publishers running in non-allowed Google Cloud regions (or running outside
     *           of Google Cloud altogether) are routed for storage in one of the allowed
     *           regions. An empty list means that no regions are allowed, and is not a
     *           valid configuration.
     *     @type bool $enforce_in_transit
     *           Optional. If true, `allowed_persistence_regions` is also used to enforce
     *           in-transit guarantees for messages. That is, Pub/Sub will fail
     *           Publish operations on this topic and subscribe operations
     *           on any subscription attached to this topic in any region that is
     *           not in `allowed_persistence_regions`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Pubsub\V1\Pubsub::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. A list of IDs of Google Cloud regions where messages that are
     * published to the topic may be persisted in storage. Messages published by
     * publishers running in non-allowed Google Cloud regions (or running outside
     * of Google Cloud altogether) are routed for storage in one of the allowed
     * regions. An empty list means that no regions are allowed, and is not a
     * valid configuration.
     *
     * Generated from protobuf field <code>repeated string allowed_persistence_regions = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAllowedPersistenceRegions()
    {
        return $this->allowed_persistence_regions;
    }

    /**
     * Optional. A list of IDs of Google Cloud regions where messages that are
     * published to the topic may be persisted in storage. Messages published by
     * publishers running in non-allowed Google Cloud regions (or running outside
     * of Google Cloud altogether) are routed for storage in one of the allowed
     * regions. An empty list means that no regions are allowed, and is not a
     * valid configuration.
     *
     * Generated from protobuf field <code>repeated string allowed_persistence_regions = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAllowedPersistenceRegions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->allowed_persistence_regions = $arr;

        return $this;
    }

    /**
     * Optional. If true, `allowed_persistence_regions` is also used to enforce
     * in-transit guarantees for messages. That is, Pub/Sub will fail
     * Publish operations on this topic and subscribe operations
     * on any subscription attached to this topic in any region that is
     * not in `allowed_persistence_regions`.
     *
     * Generated from protobuf field <code>bool enforce_in_transit = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getEnforceInTransit()
    {
        return $this->enforce_in_transit;
    }

    /**
     * Optional. If true, `allowed_persistence_regions` is also used to enforce
     * in-transit guarantees for messages. That is, Pub/Sub will fail
     * Publish operations on this topic and subscribe operations
     * on any subscription attached to this topic in any region that is
     * not in `allowed_persistence_regions`.
     *
     * Generated from protobuf field <code>bool enforce_in_transit = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setEnforceInTransit($var)
    {
        GPBUtil::checkBool($var);
        $this->enforce_in_transit = $var;

        return $this;
    }

}

