<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/discoveryengine/v1beta/search_service.proto

namespace Google\Cloud\DiscoveryEngine\V1beta\SearchRequest\BoostSpec;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Boost applies to documents which match a condition.
 *
 * Generated from protobuf message <code>google.cloud.discoveryengine.v1beta.SearchRequest.BoostSpec.ConditionBoostSpec</code>
 */
class ConditionBoostSpec extends \Google\Protobuf\Internal\Message
{
    /**
     * An expression which specifies a boost condition. The syntax and
     * supported fields are the same as a filter expression. See
     * [SearchRequest.filter][google.cloud.discoveryengine.v1beta.SearchRequest.filter]
     * for detail syntax and limitations.
     * Examples:
     * * To boost documents with document ID "doc_1" or "doc_2", and
     * color "Red" or "Blue":
     * `(document_id: ANY("doc_1", "doc_2")) AND (color: ANY("Red", "Blue"))`
     *
     * Generated from protobuf field <code>string condition = 1;</code>
     */
    protected $condition = '';
    /**
     * Strength of the condition boost, which should be in [-1, 1]. Negative
     * boost means demotion. Default is 0.0.
     * Setting to 1.0 gives the document a big promotion. However, it does
     * not necessarily mean that the boosted document will be the top result
     * at all times, nor that other documents will be excluded. Results
     * could still be shown even when none of them matches the condition.
     * And results that are significantly more relevant to the search query
     * can still trump your heavily favored but irrelevant documents.
     * Setting to -1.0 gives the document a big demotion. However, results
     * that are deeply relevant might still be shown. The document will have
     * an upstream battle to get a fairly high ranking, but it is not
     * blocked out completely.
     * Setting to 0.0 means no boost applied. The boosting condition is
     * ignored. Only one of the (condition, boost) combination or the
     * boost_control_spec below are set. If both are set then the global boost
     * is ignored and the more fine-grained boost_control_spec is applied.
     *
     * Generated from protobuf field <code>float boost = 2;</code>
     */
    protected $boost = 0.0;
    /**
     * Complex specification for custom ranking based on customer defined
     * attribute value.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1beta.SearchRequest.BoostSpec.ConditionBoostSpec.BoostControlSpec boost_control_spec = 3;</code>
     */
    protected $boost_control_spec = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $condition
     *           An expression which specifies a boost condition. The syntax and
     *           supported fields are the same as a filter expression. See
     *           [SearchRequest.filter][google.cloud.discoveryengine.v1beta.SearchRequest.filter]
     *           for detail syntax and limitations.
     *           Examples:
     *           * To boost documents with document ID "doc_1" or "doc_2", and
     *           color "Red" or "Blue":
     *           `(document_id: ANY("doc_1", "doc_2")) AND (color: ANY("Red", "Blue"))`
     *     @type float $boost
     *           Strength of the condition boost, which should be in [-1, 1]. Negative
     *           boost means demotion. Default is 0.0.
     *           Setting to 1.0 gives the document a big promotion. However, it does
     *           not necessarily mean that the boosted document will be the top result
     *           at all times, nor that other documents will be excluded. Results
     *           could still be shown even when none of them matches the condition.
     *           And results that are significantly more relevant to the search query
     *           can still trump your heavily favored but irrelevant documents.
     *           Setting to -1.0 gives the document a big demotion. However, results
     *           that are deeply relevant might still be shown. The document will have
     *           an upstream battle to get a fairly high ranking, but it is not
     *           blocked out completely.
     *           Setting to 0.0 means no boost applied. The boosting condition is
     *           ignored. Only one of the (condition, boost) combination or the
     *           boost_control_spec below are set. If both are set then the global boost
     *           is ignored and the more fine-grained boost_control_spec is applied.
     *     @type \Google\Cloud\DiscoveryEngine\V1beta\SearchRequest\BoostSpec\ConditionBoostSpec\BoostControlSpec $boost_control_spec
     *           Complex specification for custom ranking based on customer defined
     *           attribute value.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Discoveryengine\V1Beta\SearchService::initOnce();
        parent::__construct($data);
    }

    /**
     * An expression which specifies a boost condition. The syntax and
     * supported fields are the same as a filter expression. See
     * [SearchRequest.filter][google.cloud.discoveryengine.v1beta.SearchRequest.filter]
     * for detail syntax and limitations.
     * Examples:
     * * To boost documents with document ID "doc_1" or "doc_2", and
     * color "Red" or "Blue":
     * `(document_id: ANY("doc_1", "doc_2")) AND (color: ANY("Red", "Blue"))`
     *
     * Generated from protobuf field <code>string condition = 1;</code>
     * @return string
     */
    public function getCondition()
    {
        return $this->condition;
    }

    /**
     * An expression which specifies a boost condition. The syntax and
     * supported fields are the same as a filter expression. See
     * [SearchRequest.filter][google.cloud.discoveryengine.v1beta.SearchRequest.filter]
     * for detail syntax and limitations.
     * Examples:
     * * To boost documents with document ID "doc_1" or "doc_2", and
     * color "Red" or "Blue":
     * `(document_id: ANY("doc_1", "doc_2")) AND (color: ANY("Red", "Blue"))`
     *
     * Generated from protobuf field <code>string condition = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setCondition($var)
    {
        GPBUtil::checkString($var, True);
        $this->condition = $var;

        return $this;
    }

    /**
     * Strength of the condition boost, which should be in [-1, 1]. Negative
     * boost means demotion. Default is 0.0.
     * Setting to 1.0 gives the document a big promotion. However, it does
     * not necessarily mean that the boosted document will be the top result
     * at all times, nor that other documents will be excluded. Results
     * could still be shown even when none of them matches the condition.
     * And results that are significantly more relevant to the search query
     * can still trump your heavily favored but irrelevant documents.
     * Setting to -1.0 gives the document a big demotion. However, results
     * that are deeply relevant might still be shown. The document will have
     * an upstream battle to get a fairly high ranking, but it is not
     * blocked out completely.
     * Setting to 0.0 means no boost applied. The boosting condition is
     * ignored. Only one of the (condition, boost) combination or the
     * boost_control_spec below are set. If both are set then the global boost
     * is ignored and the more fine-grained boost_control_spec is applied.
     *
     * Generated from protobuf field <code>float boost = 2;</code>
     * @return float
     */
    public function getBoost()
    {
        return $this->boost;
    }

    /**
     * Strength of the condition boost, which should be in [-1, 1]. Negative
     * boost means demotion. Default is 0.0.
     * Setting to 1.0 gives the document a big promotion. However, it does
     * not necessarily mean that the boosted document will be the top result
     * at all times, nor that other documents will be excluded. Results
     * could still be shown even when none of them matches the condition.
     * And results that are significantly more relevant to the search query
     * can still trump your heavily favored but irrelevant documents.
     * Setting to -1.0 gives the document a big demotion. However, results
     * that are deeply relevant might still be shown. The document will have
     * an upstream battle to get a fairly high ranking, but it is not
     * blocked out completely.
     * Setting to 0.0 means no boost applied. The boosting condition is
     * ignored. Only one of the (condition, boost) combination or the
     * boost_control_spec below are set. If both are set then the global boost
     * is ignored and the more fine-grained boost_control_spec is applied.
     *
     * Generated from protobuf field <code>float boost = 2;</code>
     * @param float $var
     * @return $this
     */
    public function setBoost($var)
    {
        GPBUtil::checkFloat($var);
        $this->boost = $var;

        return $this;
    }

    /**
     * Complex specification for custom ranking based on customer defined
     * attribute value.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1beta.SearchRequest.BoostSpec.ConditionBoostSpec.BoostControlSpec boost_control_spec = 3;</code>
     * @return \Google\Cloud\DiscoveryEngine\V1beta\SearchRequest\BoostSpec\ConditionBoostSpec\BoostControlSpec|null
     */
    public function getBoostControlSpec()
    {
        return $this->boost_control_spec;
    }

    public function hasBoostControlSpec()
    {
        return isset($this->boost_control_spec);
    }

    public function clearBoostControlSpec()
    {
        unset($this->boost_control_spec);
    }

    /**
     * Complex specification for custom ranking based on customer defined
     * attribute value.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1beta.SearchRequest.BoostSpec.ConditionBoostSpec.BoostControlSpec boost_control_spec = 3;</code>
     * @param \Google\Cloud\DiscoveryEngine\V1beta\SearchRequest\BoostSpec\ConditionBoostSpec\BoostControlSpec $var
     * @return $this
     */
    public function setBoostControlSpec($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DiscoveryEngine\V1beta\SearchRequest\BoostSpec\ConditionBoostSpec\BoostControlSpec::class);
        $this->boost_control_spec = $var;

        return $this;
    }

}


