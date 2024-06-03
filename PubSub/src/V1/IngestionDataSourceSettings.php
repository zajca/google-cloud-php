<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/pubsub/v1/pubsub.proto

namespace Google\Cloud\PubSub\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Settings for an ingestion data source on a topic.
 *
 * Generated from protobuf message <code>google.pubsub.v1.IngestionDataSourceSettings</code>
 */
class IngestionDataSourceSettings extends \Google\Protobuf\Internal\Message
{
    protected $source;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\PubSub\V1\IngestionDataSourceSettings\AwsKinesis $aws_kinesis
     *           Optional. Amazon Kinesis Data Streams.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Pubsub\V1\Pubsub::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. Amazon Kinesis Data Streams.
     *
     * Generated from protobuf field <code>.google.pubsub.v1.IngestionDataSourceSettings.AwsKinesis aws_kinesis = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\PubSub\V1\IngestionDataSourceSettings\AwsKinesis|null
     */
    public function getAwsKinesis()
    {
        return $this->readOneof(1);
    }

    public function hasAwsKinesis()
    {
        return $this->hasOneof(1);
    }

    /**
     * Optional. Amazon Kinesis Data Streams.
     *
     * Generated from protobuf field <code>.google.pubsub.v1.IngestionDataSourceSettings.AwsKinesis aws_kinesis = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\PubSub\V1\IngestionDataSourceSettings\AwsKinesis $var
     * @return $this
     */
    public function setAwsKinesis($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\PubSub\V1\IngestionDataSourceSettings\AwsKinesis::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getSource()
    {
        return $this->whichOneof("source");
    }

}

