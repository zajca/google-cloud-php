<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/pubsub/v1/pubsub.proto

namespace Google\Cloud\PubSub\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Configuration for a BigQuery subscription.
 *
 * Generated from protobuf message <code>google.pubsub.v1.BigQueryConfig</code>
 */
class BigQueryConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * The name of the table to which to write data, of the form
     * {projectId}:{datasetId}.{tableId}
     *
     * Generated from protobuf field <code>string table = 1;</code>
     */
    private $table = '';
    /**
     * When true, use the topic's schema as the columns to write to in BigQuery,
     * if it exists.
     *
     * Generated from protobuf field <code>bool use_topic_schema = 2;</code>
     */
    private $use_topic_schema = false;
    /**
     * When true, write the subscription name, message_id, publish_time,
     * attributes, and ordering_key to additional columns in the table. The
     * subscription name, message_id, and publish_time fields are put in their own
     * columns while all other message properties (other than data) are written to
     * a JSON object in the attributes column.
     *
     * Generated from protobuf field <code>bool write_metadata = 3;</code>
     */
    private $write_metadata = false;
    /**
     * When true and use_topic_schema is true, any fields that are a part of the
     * topic schema that are not part of the BigQuery table schema are dropped
     * when writing to BigQuery. Otherwise, the schemas must be kept in sync and
     * any messages with extra fields are not written and remain in the
     * subscription's backlog.
     *
     * Generated from protobuf field <code>bool drop_unknown_fields = 4;</code>
     */
    private $drop_unknown_fields = false;
    /**
     * Output only. An output-only field that indicates whether or not the
     * subscription can receive messages.
     *
     * Generated from protobuf field <code>.google.pubsub.v1.BigQueryConfig.State state = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $state = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $table
     *           The name of the table to which to write data, of the form
     *           {projectId}:{datasetId}.{tableId}
     *     @type bool $use_topic_schema
     *           When true, use the topic's schema as the columns to write to in BigQuery,
     *           if it exists.
     *     @type bool $write_metadata
     *           When true, write the subscription name, message_id, publish_time,
     *           attributes, and ordering_key to additional columns in the table. The
     *           subscription name, message_id, and publish_time fields are put in their own
     *           columns while all other message properties (other than data) are written to
     *           a JSON object in the attributes column.
     *     @type bool $drop_unknown_fields
     *           When true and use_topic_schema is true, any fields that are a part of the
     *           topic schema that are not part of the BigQuery table schema are dropped
     *           when writing to BigQuery. Otherwise, the schemas must be kept in sync and
     *           any messages with extra fields are not written and remain in the
     *           subscription's backlog.
     *     @type int $state
     *           Output only. An output-only field that indicates whether or not the
     *           subscription can receive messages.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Pubsub\V1\Pubsub::initOnce();
        parent::__construct($data);
    }

    /**
     * The name of the table to which to write data, of the form
     * {projectId}:{datasetId}.{tableId}
     *
     * Generated from protobuf field <code>string table = 1;</code>
     * @return string
     */
    public function getTable()
    {
        return $this->table;
    }

    /**
     * The name of the table to which to write data, of the form
     * {projectId}:{datasetId}.{tableId}
     *
     * Generated from protobuf field <code>string table = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setTable($var)
    {
        GPBUtil::checkString($var, True);
        $this->table = $var;

        return $this;
    }

    /**
     * When true, use the topic's schema as the columns to write to in BigQuery,
     * if it exists.
     *
     * Generated from protobuf field <code>bool use_topic_schema = 2;</code>
     * @return bool
     */
    public function getUseTopicSchema()
    {
        return $this->use_topic_schema;
    }

    /**
     * When true, use the topic's schema as the columns to write to in BigQuery,
     * if it exists.
     *
     * Generated from protobuf field <code>bool use_topic_schema = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setUseTopicSchema($var)
    {
        GPBUtil::checkBool($var);
        $this->use_topic_schema = $var;

        return $this;
    }

    /**
     * When true, write the subscription name, message_id, publish_time,
     * attributes, and ordering_key to additional columns in the table. The
     * subscription name, message_id, and publish_time fields are put in their own
     * columns while all other message properties (other than data) are written to
     * a JSON object in the attributes column.
     *
     * Generated from protobuf field <code>bool write_metadata = 3;</code>
     * @return bool
     */
    public function getWriteMetadata()
    {
        return $this->write_metadata;
    }

    /**
     * When true, write the subscription name, message_id, publish_time,
     * attributes, and ordering_key to additional columns in the table. The
     * subscription name, message_id, and publish_time fields are put in their own
     * columns while all other message properties (other than data) are written to
     * a JSON object in the attributes column.
     *
     * Generated from protobuf field <code>bool write_metadata = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setWriteMetadata($var)
    {
        GPBUtil::checkBool($var);
        $this->write_metadata = $var;

        return $this;
    }

    /**
     * When true and use_topic_schema is true, any fields that are a part of the
     * topic schema that are not part of the BigQuery table schema are dropped
     * when writing to BigQuery. Otherwise, the schemas must be kept in sync and
     * any messages with extra fields are not written and remain in the
     * subscription's backlog.
     *
     * Generated from protobuf field <code>bool drop_unknown_fields = 4;</code>
     * @return bool
     */
    public function getDropUnknownFields()
    {
        return $this->drop_unknown_fields;
    }

    /**
     * When true and use_topic_schema is true, any fields that are a part of the
     * topic schema that are not part of the BigQuery table schema are dropped
     * when writing to BigQuery. Otherwise, the schemas must be kept in sync and
     * any messages with extra fields are not written and remain in the
     * subscription's backlog.
     *
     * Generated from protobuf field <code>bool drop_unknown_fields = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setDropUnknownFields($var)
    {
        GPBUtil::checkBool($var);
        $this->drop_unknown_fields = $var;

        return $this;
    }

    /**
     * Output only. An output-only field that indicates whether or not the
     * subscription can receive messages.
     *
     * Generated from protobuf field <code>.google.pubsub.v1.BigQueryConfig.State state = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Output only. An output-only field that indicates whether or not the
     * subscription can receive messages.
     *
     * Generated from protobuf field <code>.google.pubsub.v1.BigQueryConfig.State state = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\PubSub\V1\BigQueryConfig\State::class);
        $this->state = $var;

        return $this;
    }

}

