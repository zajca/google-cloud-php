<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/discoveryengine/v1beta/completion.proto

namespace Google\Cloud\DiscoveryEngine\V1beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Suggestion deny list entry identifying the phrase to block from suggestions
 * and the applied operation for the phrase.
 *
 * Generated from protobuf message <code>google.cloud.discoveryengine.v1beta.SuggestionDenyListEntry</code>
 */
class SuggestionDenyListEntry extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Phrase to block from suggestions served. Can be maximum 125
     * characters.
     *
     * Generated from protobuf field <code>string block_phrase = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $block_phrase = '';
    /**
     * Required. The match operator to apply for this phrase. Whether to block the
     * exact phrase, or block any suggestions containing this phrase.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1beta.SuggestionDenyListEntry.MatchOperator match_operator = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $match_operator = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $block_phrase
     *           Required. Phrase to block from suggestions served. Can be maximum 125
     *           characters.
     *     @type int $match_operator
     *           Required. The match operator to apply for this phrase. Whether to block the
     *           exact phrase, or block any suggestions containing this phrase.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Discoveryengine\V1Beta\Completion::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Phrase to block from suggestions served. Can be maximum 125
     * characters.
     *
     * Generated from protobuf field <code>string block_phrase = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getBlockPhrase()
    {
        return $this->block_phrase;
    }

    /**
     * Required. Phrase to block from suggestions served. Can be maximum 125
     * characters.
     *
     * Generated from protobuf field <code>string block_phrase = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setBlockPhrase($var)
    {
        GPBUtil::checkString($var, True);
        $this->block_phrase = $var;

        return $this;
    }

    /**
     * Required. The match operator to apply for this phrase. Whether to block the
     * exact phrase, or block any suggestions containing this phrase.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1beta.SuggestionDenyListEntry.MatchOperator match_operator = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return int
     */
    public function getMatchOperator()
    {
        return $this->match_operator;
    }

    /**
     * Required. The match operator to apply for this phrase. Whether to block the
     * exact phrase, or block any suggestions containing this phrase.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1beta.SuggestionDenyListEntry.MatchOperator match_operator = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param int $var
     * @return $this
     */
    public function setMatchOperator($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\DiscoveryEngine\V1beta\SuggestionDenyListEntry\MatchOperator::class);
        $this->match_operator = $var;

        return $this;
    }

}

