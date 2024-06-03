<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/apps/meet/v2/resource.proto

namespace Google\Apps\Meet\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Metadata for a transcript generated from a conference. It refers to the ASR
 * (Automatic Speech Recognition) result of user's speech during the conference.
 *
 * Generated from protobuf message <code>google.apps.meet.v2.Transcript</code>
 */
class Transcript extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. Resource name of the transcript.
     * Format: `conferenceRecords/{conference_record}/transcripts/{transcript}`,
     * where `{transcript}` is a 1:1 mapping to each unique transcription session
     * of the conference.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $name = '';
    /**
     * Output only. Current state.
     *
     * Generated from protobuf field <code>.google.apps.meet.v2.Transcript.State state = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $state = 0;
    /**
     * Output only. Timestamp when the transcript started.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $start_time = null;
    /**
     * Output only. Timestamp when the transcript stopped.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $end_time = null;
    protected $destination;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Apps\Meet\V2\DocsDestination $docs_destination
     *           Output only. Where the Google Docs transcript is saved.
     *     @type string $name
     *           Output only. Resource name of the transcript.
     *           Format: `conferenceRecords/{conference_record}/transcripts/{transcript}`,
     *           where `{transcript}` is a 1:1 mapping to each unique transcription session
     *           of the conference.
     *     @type int $state
     *           Output only. Current state.
     *     @type \Google\Protobuf\Timestamp $start_time
     *           Output only. Timestamp when the transcript started.
     *     @type \Google\Protobuf\Timestamp $end_time
     *           Output only. Timestamp when the transcript stopped.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Apps\Meet\V2\Resource::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. Where the Google Docs transcript is saved.
     *
     * Generated from protobuf field <code>.google.apps.meet.v2.DocsDestination docs_destination = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Apps\Meet\V2\DocsDestination|null
     */
    public function getDocsDestination()
    {
        return $this->readOneof(6);
    }

    public function hasDocsDestination()
    {
        return $this->hasOneof(6);
    }

    /**
     * Output only. Where the Google Docs transcript is saved.
     *
     * Generated from protobuf field <code>.google.apps.meet.v2.DocsDestination docs_destination = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Apps\Meet\V2\DocsDestination $var
     * @return $this
     */
    public function setDocsDestination($var)
    {
        GPBUtil::checkMessage($var, \Google\Apps\Meet\V2\DocsDestination::class);
        $this->writeOneof(6, $var);

        return $this;
    }

    /**
     * Output only. Resource name of the transcript.
     * Format: `conferenceRecords/{conference_record}/transcripts/{transcript}`,
     * where `{transcript}` is a 1:1 mapping to each unique transcription session
     * of the conference.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. Resource name of the transcript.
     * Format: `conferenceRecords/{conference_record}/transcripts/{transcript}`,
     * where `{transcript}` is a 1:1 mapping to each unique transcription session
     * of the conference.
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
     * Output only. Current state.
     *
     * Generated from protobuf field <code>.google.apps.meet.v2.Transcript.State state = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Output only. Current state.
     *
     * Generated from protobuf field <code>.google.apps.meet.v2.Transcript.State state = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Apps\Meet\V2\Transcript\State::class);
        $this->state = $var;

        return $this;
    }

    /**
     * Output only. Timestamp when the transcript started.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getStartTime()
    {
        return $this->start_time;
    }

    public function hasStartTime()
    {
        return isset($this->start_time);
    }

    public function clearStartTime()
    {
        unset($this->start_time);
    }

    /**
     * Output only. Timestamp when the transcript started.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setStartTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->start_time = $var;

        return $this;
    }

    /**
     * Output only. Timestamp when the transcript stopped.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getEndTime()
    {
        return $this->end_time;
    }

    public function hasEndTime()
    {
        return isset($this->end_time);
    }

    public function clearEndTime()
    {
        unset($this->end_time);
    }

    /**
     * Output only. Timestamp when the transcript stopped.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setEndTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->end_time = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getDestination()
    {
        return $this->whichOneof("destination");
    }

}

