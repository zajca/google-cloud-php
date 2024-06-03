<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/discoveryengine/v1/search_service.proto

namespace Google\Cloud\DiscoveryEngine\V1\SearchRequest;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A specification for configuring the behavior of content search.
 *
 * Generated from protobuf message <code>google.cloud.discoveryengine.v1.SearchRequest.ContentSearchSpec</code>
 */
class ContentSearchSpec extends \Google\Protobuf\Internal\Message
{
    /**
     * If `snippetSpec` is not specified, snippets are not included in the
     * search response.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1.SearchRequest.ContentSearchSpec.SnippetSpec snippet_spec = 1;</code>
     */
    protected $snippet_spec = null;
    /**
     * If `summarySpec` is not specified, summaries are not included in the
     * search response.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1.SearchRequest.ContentSearchSpec.SummarySpec summary_spec = 2;</code>
     */
    protected $summary_spec = null;
    /**
     * If there is no extractive_content_spec provided, there will be no
     * extractive answer in the search response.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1.SearchRequest.ContentSearchSpec.ExtractiveContentSpec extractive_content_spec = 3;</code>
     */
    protected $extractive_content_spec = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\DiscoveryEngine\V1\SearchRequest\ContentSearchSpec\SnippetSpec $snippet_spec
     *           If `snippetSpec` is not specified, snippets are not included in the
     *           search response.
     *     @type \Google\Cloud\DiscoveryEngine\V1\SearchRequest\ContentSearchSpec\SummarySpec $summary_spec
     *           If `summarySpec` is not specified, summaries are not included in the
     *           search response.
     *     @type \Google\Cloud\DiscoveryEngine\V1\SearchRequest\ContentSearchSpec\ExtractiveContentSpec $extractive_content_spec
     *           If there is no extractive_content_spec provided, there will be no
     *           extractive answer in the search response.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Discoveryengine\V1\SearchService::initOnce();
        parent::__construct($data);
    }

    /**
     * If `snippetSpec` is not specified, snippets are not included in the
     * search response.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1.SearchRequest.ContentSearchSpec.SnippetSpec snippet_spec = 1;</code>
     * @return \Google\Cloud\DiscoveryEngine\V1\SearchRequest\ContentSearchSpec\SnippetSpec|null
     */
    public function getSnippetSpec()
    {
        return $this->snippet_spec;
    }

    public function hasSnippetSpec()
    {
        return isset($this->snippet_spec);
    }

    public function clearSnippetSpec()
    {
        unset($this->snippet_spec);
    }

    /**
     * If `snippetSpec` is not specified, snippets are not included in the
     * search response.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1.SearchRequest.ContentSearchSpec.SnippetSpec snippet_spec = 1;</code>
     * @param \Google\Cloud\DiscoveryEngine\V1\SearchRequest\ContentSearchSpec\SnippetSpec $var
     * @return $this
     */
    public function setSnippetSpec($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DiscoveryEngine\V1\SearchRequest\ContentSearchSpec\SnippetSpec::class);
        $this->snippet_spec = $var;

        return $this;
    }

    /**
     * If `summarySpec` is not specified, summaries are not included in the
     * search response.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1.SearchRequest.ContentSearchSpec.SummarySpec summary_spec = 2;</code>
     * @return \Google\Cloud\DiscoveryEngine\V1\SearchRequest\ContentSearchSpec\SummarySpec|null
     */
    public function getSummarySpec()
    {
        return $this->summary_spec;
    }

    public function hasSummarySpec()
    {
        return isset($this->summary_spec);
    }

    public function clearSummarySpec()
    {
        unset($this->summary_spec);
    }

    /**
     * If `summarySpec` is not specified, summaries are not included in the
     * search response.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1.SearchRequest.ContentSearchSpec.SummarySpec summary_spec = 2;</code>
     * @param \Google\Cloud\DiscoveryEngine\V1\SearchRequest\ContentSearchSpec\SummarySpec $var
     * @return $this
     */
    public function setSummarySpec($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DiscoveryEngine\V1\SearchRequest\ContentSearchSpec\SummarySpec::class);
        $this->summary_spec = $var;

        return $this;
    }

    /**
     * If there is no extractive_content_spec provided, there will be no
     * extractive answer in the search response.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1.SearchRequest.ContentSearchSpec.ExtractiveContentSpec extractive_content_spec = 3;</code>
     * @return \Google\Cloud\DiscoveryEngine\V1\SearchRequest\ContentSearchSpec\ExtractiveContentSpec|null
     */
    public function getExtractiveContentSpec()
    {
        return $this->extractive_content_spec;
    }

    public function hasExtractiveContentSpec()
    {
        return isset($this->extractive_content_spec);
    }

    public function clearExtractiveContentSpec()
    {
        unset($this->extractive_content_spec);
    }

    /**
     * If there is no extractive_content_spec provided, there will be no
     * extractive answer in the search response.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1.SearchRequest.ContentSearchSpec.ExtractiveContentSpec extractive_content_spec = 3;</code>
     * @param \Google\Cloud\DiscoveryEngine\V1\SearchRequest\ContentSearchSpec\ExtractiveContentSpec $var
     * @return $this
     */
    public function setExtractiveContentSpec($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DiscoveryEngine\V1\SearchRequest\ContentSearchSpec\ExtractiveContentSpec::class);
        $this->extractive_content_spec = $var;

        return $this;
    }

}


