<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/discoveryengine/v1/engine.proto

namespace Google\Cloud\DiscoveryEngine\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Metadata that describes the training and serving parameters of an
 * [Engine][google.cloud.discoveryengine.v1.Engine].
 *
 * Generated from protobuf message <code>google.cloud.discoveryengine.v1.Engine</code>
 */
class Engine extends \Google\Protobuf\Internal\Message
{
    /**
     * Immutable. The fully qualified resource name of the engine.
     * This field must be a UTF-8 encoded string with a length limit of 1024
     * characters.
     * Format:
     * `projects/{project_number}/locations/{location}/collections/{collection}/engines/{engine}`
     * engine should be 1-63 characters, and valid characters are
     * /[a-z0-9][a-z0-9-_]*&#47;. Otherwise, an INVALID_ARGUMENT error is returned.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IMMUTABLE];</code>
     */
    protected $name = '';
    /**
     * Required. The display name of the engine. Should be human readable. UTF-8
     * encoded string with limit of 1024 characters.
     *
     * Generated from protobuf field <code>string display_name = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $display_name = '';
    /**
     * Output only. Timestamp the Recommendation Engine was created at.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $create_time = null;
    /**
     * Output only. Timestamp the Recommendation Engine was last updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $update_time = null;
    /**
     * The data stores associated with this engine.
     * For
     * [SOLUTION_TYPE_SEARCH][google.cloud.discoveryengine.v1.SolutionType.SOLUTION_TYPE_SEARCH]
     * and
     * [SOLUTION_TYPE_RECOMMENDATION][google.cloud.discoveryengine.v1.SolutionType.SOLUTION_TYPE_RECOMMENDATION]
     * type of engines, they can only associate with at most one data store.
     * If [solution_type][google.cloud.discoveryengine.v1.Engine.solution_type] is
     * [SOLUTION_TYPE_CHAT][google.cloud.discoveryengine.v1.SolutionType.SOLUTION_TYPE_CHAT],
     * multiple [DataStore][google.cloud.discoveryengine.v1.DataStore]s in the
     * same [Collection][google.cloud.discoveryengine.v1.Collection] can be
     * associated here.
     * Note that when used in
     * [CreateEngineRequest][google.cloud.discoveryengine.v1.CreateEngineRequest],
     * one DataStore id must be provided as the system will use it for necessary
     * initializations.
     *
     * Generated from protobuf field <code>repeated string data_store_ids = 5;</code>
     */
    private $data_store_ids;
    /**
     * Required. The solutions of the engine.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1.SolutionType solution_type = 6 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $solution_type = 0;
    /**
     * The industry vertical that the engine registers.
     * The restriction of the Engine industry vertical is based on
     * [DataStore][google.cloud.discoveryengine.v1.DataStore]: If unspecified,
     * default to `GENERIC`. Vertical on Engine has to match vertical of the
     * DataStore linked to the engine.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1.IndustryVertical industry_vertical = 16;</code>
     */
    protected $industry_vertical = 0;
    /**
     * Common config spec that specifies the metadata of the engine.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1.Engine.CommonConfig common_config = 15;</code>
     */
    protected $common_config = null;
    protected $engine_config;
    protected $engine_metadata;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\DiscoveryEngine\V1\Engine\ChatEngineConfig $chat_engine_config
     *           Configurations for the Chat Engine. Only applicable if
     *           [solution_type][google.cloud.discoveryengine.v1.Engine.solution_type] is
     *           [SOLUTION_TYPE_CHAT][google.cloud.discoveryengine.v1.SolutionType.SOLUTION_TYPE_CHAT].
     *     @type \Google\Cloud\DiscoveryEngine\V1\Engine\SearchEngineConfig $search_engine_config
     *           Configurations for the Search Engine. Only applicable if
     *           [solution_type][google.cloud.discoveryengine.v1.Engine.solution_type] is
     *           [SOLUTION_TYPE_SEARCH][google.cloud.discoveryengine.v1.SolutionType.SOLUTION_TYPE_SEARCH].
     *     @type \Google\Cloud\DiscoveryEngine\V1\Engine\ChatEngineMetadata $chat_engine_metadata
     *           Output only. Additional information of the Chat Engine. Only applicable
     *           if [solution_type][google.cloud.discoveryengine.v1.Engine.solution_type]
     *           is
     *           [SOLUTION_TYPE_CHAT][google.cloud.discoveryengine.v1.SolutionType.SOLUTION_TYPE_CHAT].
     *     @type string $name
     *           Immutable. The fully qualified resource name of the engine.
     *           This field must be a UTF-8 encoded string with a length limit of 1024
     *           characters.
     *           Format:
     *           `projects/{project_number}/locations/{location}/collections/{collection}/engines/{engine}`
     *           engine should be 1-63 characters, and valid characters are
     *           /[a-z0-9][a-z0-9-_]*&#47;. Otherwise, an INVALID_ARGUMENT error is returned.
     *     @type string $display_name
     *           Required. The display name of the engine. Should be human readable. UTF-8
     *           encoded string with limit of 1024 characters.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. Timestamp the Recommendation Engine was created at.
     *     @type \Google\Protobuf\Timestamp $update_time
     *           Output only. Timestamp the Recommendation Engine was last updated.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $data_store_ids
     *           The data stores associated with this engine.
     *           For
     *           [SOLUTION_TYPE_SEARCH][google.cloud.discoveryengine.v1.SolutionType.SOLUTION_TYPE_SEARCH]
     *           and
     *           [SOLUTION_TYPE_RECOMMENDATION][google.cloud.discoveryengine.v1.SolutionType.SOLUTION_TYPE_RECOMMENDATION]
     *           type of engines, they can only associate with at most one data store.
     *           If [solution_type][google.cloud.discoveryengine.v1.Engine.solution_type] is
     *           [SOLUTION_TYPE_CHAT][google.cloud.discoveryengine.v1.SolutionType.SOLUTION_TYPE_CHAT],
     *           multiple [DataStore][google.cloud.discoveryengine.v1.DataStore]s in the
     *           same [Collection][google.cloud.discoveryengine.v1.Collection] can be
     *           associated here.
     *           Note that when used in
     *           [CreateEngineRequest][google.cloud.discoveryengine.v1.CreateEngineRequest],
     *           one DataStore id must be provided as the system will use it for necessary
     *           initializations.
     *     @type int $solution_type
     *           Required. The solutions of the engine.
     *     @type int $industry_vertical
     *           The industry vertical that the engine registers.
     *           The restriction of the Engine industry vertical is based on
     *           [DataStore][google.cloud.discoveryengine.v1.DataStore]: If unspecified,
     *           default to `GENERIC`. Vertical on Engine has to match vertical of the
     *           DataStore linked to the engine.
     *     @type \Google\Cloud\DiscoveryEngine\V1\Engine\CommonConfig $common_config
     *           Common config spec that specifies the metadata of the engine.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Discoveryengine\V1\Engine::initOnce();
        parent::__construct($data);
    }

    /**
     * Configurations for the Chat Engine. Only applicable if
     * [solution_type][google.cloud.discoveryengine.v1.Engine.solution_type] is
     * [SOLUTION_TYPE_CHAT][google.cloud.discoveryengine.v1.SolutionType.SOLUTION_TYPE_CHAT].
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1.Engine.ChatEngineConfig chat_engine_config = 11;</code>
     * @return \Google\Cloud\DiscoveryEngine\V1\Engine\ChatEngineConfig|null
     */
    public function getChatEngineConfig()
    {
        return $this->readOneof(11);
    }

    public function hasChatEngineConfig()
    {
        return $this->hasOneof(11);
    }

    /**
     * Configurations for the Chat Engine. Only applicable if
     * [solution_type][google.cloud.discoveryengine.v1.Engine.solution_type] is
     * [SOLUTION_TYPE_CHAT][google.cloud.discoveryengine.v1.SolutionType.SOLUTION_TYPE_CHAT].
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1.Engine.ChatEngineConfig chat_engine_config = 11;</code>
     * @param \Google\Cloud\DiscoveryEngine\V1\Engine\ChatEngineConfig $var
     * @return $this
     */
    public function setChatEngineConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DiscoveryEngine\V1\Engine\ChatEngineConfig::class);
        $this->writeOneof(11, $var);

        return $this;
    }

    /**
     * Configurations for the Search Engine. Only applicable if
     * [solution_type][google.cloud.discoveryengine.v1.Engine.solution_type] is
     * [SOLUTION_TYPE_SEARCH][google.cloud.discoveryengine.v1.SolutionType.SOLUTION_TYPE_SEARCH].
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1.Engine.SearchEngineConfig search_engine_config = 13;</code>
     * @return \Google\Cloud\DiscoveryEngine\V1\Engine\SearchEngineConfig|null
     */
    public function getSearchEngineConfig()
    {
        return $this->readOneof(13);
    }

    public function hasSearchEngineConfig()
    {
        return $this->hasOneof(13);
    }

    /**
     * Configurations for the Search Engine. Only applicable if
     * [solution_type][google.cloud.discoveryengine.v1.Engine.solution_type] is
     * [SOLUTION_TYPE_SEARCH][google.cloud.discoveryengine.v1.SolutionType.SOLUTION_TYPE_SEARCH].
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1.Engine.SearchEngineConfig search_engine_config = 13;</code>
     * @param \Google\Cloud\DiscoveryEngine\V1\Engine\SearchEngineConfig $var
     * @return $this
     */
    public function setSearchEngineConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DiscoveryEngine\V1\Engine\SearchEngineConfig::class);
        $this->writeOneof(13, $var);

        return $this;
    }

    /**
     * Output only. Additional information of the Chat Engine. Only applicable
     * if [solution_type][google.cloud.discoveryengine.v1.Engine.solution_type]
     * is
     * [SOLUTION_TYPE_CHAT][google.cloud.discoveryengine.v1.SolutionType.SOLUTION_TYPE_CHAT].
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1.Engine.ChatEngineMetadata chat_engine_metadata = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\DiscoveryEngine\V1\Engine\ChatEngineMetadata|null
     */
    public function getChatEngineMetadata()
    {
        return $this->readOneof(12);
    }

    public function hasChatEngineMetadata()
    {
        return $this->hasOneof(12);
    }

    /**
     * Output only. Additional information of the Chat Engine. Only applicable
     * if [solution_type][google.cloud.discoveryengine.v1.Engine.solution_type]
     * is
     * [SOLUTION_TYPE_CHAT][google.cloud.discoveryengine.v1.SolutionType.SOLUTION_TYPE_CHAT].
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1.Engine.ChatEngineMetadata chat_engine_metadata = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\DiscoveryEngine\V1\Engine\ChatEngineMetadata $var
     * @return $this
     */
    public function setChatEngineMetadata($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DiscoveryEngine\V1\Engine\ChatEngineMetadata::class);
        $this->writeOneof(12, $var);

        return $this;
    }

    /**
     * Immutable. The fully qualified resource name of the engine.
     * This field must be a UTF-8 encoded string with a length limit of 1024
     * characters.
     * Format:
     * `projects/{project_number}/locations/{location}/collections/{collection}/engines/{engine}`
     * engine should be 1-63 characters, and valid characters are
     * /[a-z0-9][a-z0-9-_]*&#47;. Otherwise, an INVALID_ARGUMENT error is returned.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Immutable. The fully qualified resource name of the engine.
     * This field must be a UTF-8 encoded string with a length limit of 1024
     * characters.
     * Format:
     * `projects/{project_number}/locations/{location}/collections/{collection}/engines/{engine}`
     * engine should be 1-63 characters, and valid characters are
     * /[a-z0-9][a-z0-9-_]*&#47;. Otherwise, an INVALID_ARGUMENT error is returned.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IMMUTABLE];</code>
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
     * Required. The display name of the engine. Should be human readable. UTF-8
     * encoded string with limit of 1024 characters.
     *
     * Generated from protobuf field <code>string display_name = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * Required. The display name of the engine. Should be human readable. UTF-8
     * encoded string with limit of 1024 characters.
     *
     * Generated from protobuf field <code>string display_name = 2 [(.google.api.field_behavior) = REQUIRED];</code>
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
     * Output only. Timestamp the Recommendation Engine was created at.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCreateTime()
    {
        return $this->create_time;
    }

    public function hasCreateTime()
    {
        return isset($this->create_time);
    }

    public function clearCreateTime()
    {
        unset($this->create_time);
    }

    /**
     * Output only. Timestamp the Recommendation Engine was created at.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->create_time = $var;

        return $this;
    }

    /**
     * Output only. Timestamp the Recommendation Engine was last updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getUpdateTime()
    {
        return $this->update_time;
    }

    public function hasUpdateTime()
    {
        return isset($this->update_time);
    }

    public function clearUpdateTime()
    {
        unset($this->update_time);
    }

    /**
     * Output only. Timestamp the Recommendation Engine was last updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setUpdateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->update_time = $var;

        return $this;
    }

    /**
     * The data stores associated with this engine.
     * For
     * [SOLUTION_TYPE_SEARCH][google.cloud.discoveryengine.v1.SolutionType.SOLUTION_TYPE_SEARCH]
     * and
     * [SOLUTION_TYPE_RECOMMENDATION][google.cloud.discoveryengine.v1.SolutionType.SOLUTION_TYPE_RECOMMENDATION]
     * type of engines, they can only associate with at most one data store.
     * If [solution_type][google.cloud.discoveryengine.v1.Engine.solution_type] is
     * [SOLUTION_TYPE_CHAT][google.cloud.discoveryengine.v1.SolutionType.SOLUTION_TYPE_CHAT],
     * multiple [DataStore][google.cloud.discoveryengine.v1.DataStore]s in the
     * same [Collection][google.cloud.discoveryengine.v1.Collection] can be
     * associated here.
     * Note that when used in
     * [CreateEngineRequest][google.cloud.discoveryengine.v1.CreateEngineRequest],
     * one DataStore id must be provided as the system will use it for necessary
     * initializations.
     *
     * Generated from protobuf field <code>repeated string data_store_ids = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDataStoreIds()
    {
        return $this->data_store_ids;
    }

    /**
     * The data stores associated with this engine.
     * For
     * [SOLUTION_TYPE_SEARCH][google.cloud.discoveryengine.v1.SolutionType.SOLUTION_TYPE_SEARCH]
     * and
     * [SOLUTION_TYPE_RECOMMENDATION][google.cloud.discoveryengine.v1.SolutionType.SOLUTION_TYPE_RECOMMENDATION]
     * type of engines, they can only associate with at most one data store.
     * If [solution_type][google.cloud.discoveryengine.v1.Engine.solution_type] is
     * [SOLUTION_TYPE_CHAT][google.cloud.discoveryengine.v1.SolutionType.SOLUTION_TYPE_CHAT],
     * multiple [DataStore][google.cloud.discoveryengine.v1.DataStore]s in the
     * same [Collection][google.cloud.discoveryengine.v1.Collection] can be
     * associated here.
     * Note that when used in
     * [CreateEngineRequest][google.cloud.discoveryengine.v1.CreateEngineRequest],
     * one DataStore id must be provided as the system will use it for necessary
     * initializations.
     *
     * Generated from protobuf field <code>repeated string data_store_ids = 5;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDataStoreIds($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->data_store_ids = $arr;

        return $this;
    }

    /**
     * Required. The solutions of the engine.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1.SolutionType solution_type = 6 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return int
     */
    public function getSolutionType()
    {
        return $this->solution_type;
    }

    /**
     * Required. The solutions of the engine.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1.SolutionType solution_type = 6 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param int $var
     * @return $this
     */
    public function setSolutionType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\DiscoveryEngine\V1\SolutionType::class);
        $this->solution_type = $var;

        return $this;
    }

    /**
     * The industry vertical that the engine registers.
     * The restriction of the Engine industry vertical is based on
     * [DataStore][google.cloud.discoveryengine.v1.DataStore]: If unspecified,
     * default to `GENERIC`. Vertical on Engine has to match vertical of the
     * DataStore linked to the engine.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1.IndustryVertical industry_vertical = 16;</code>
     * @return int
     */
    public function getIndustryVertical()
    {
        return $this->industry_vertical;
    }

    /**
     * The industry vertical that the engine registers.
     * The restriction of the Engine industry vertical is based on
     * [DataStore][google.cloud.discoveryengine.v1.DataStore]: If unspecified,
     * default to `GENERIC`. Vertical on Engine has to match vertical of the
     * DataStore linked to the engine.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1.IndustryVertical industry_vertical = 16;</code>
     * @param int $var
     * @return $this
     */
    public function setIndustryVertical($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\DiscoveryEngine\V1\IndustryVertical::class);
        $this->industry_vertical = $var;

        return $this;
    }

    /**
     * Common config spec that specifies the metadata of the engine.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1.Engine.CommonConfig common_config = 15;</code>
     * @return \Google\Cloud\DiscoveryEngine\V1\Engine\CommonConfig|null
     */
    public function getCommonConfig()
    {
        return $this->common_config;
    }

    public function hasCommonConfig()
    {
        return isset($this->common_config);
    }

    public function clearCommonConfig()
    {
        unset($this->common_config);
    }

    /**
     * Common config spec that specifies the metadata of the engine.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1.Engine.CommonConfig common_config = 15;</code>
     * @param \Google\Cloud\DiscoveryEngine\V1\Engine\CommonConfig $var
     * @return $this
     */
    public function setCommonConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DiscoveryEngine\V1\Engine\CommonConfig::class);
        $this->common_config = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getEngineConfig()
    {
        return $this->whichOneof("engine_config");
    }

    /**
     * @return string
     */
    public function getEngineMetadata()
    {
        return $this->whichOneof("engine_metadata");
    }

}

