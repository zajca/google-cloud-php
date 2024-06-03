<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/telcoautomation/v1/telcoautomation.proto

namespace Google\Cloud\TelcoAutomation\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request object for `SearchBlueprintRevisions`.
 *
 * Generated from protobuf message <code>google.cloud.telcoautomation.v1.SearchBlueprintRevisionsRequest</code>
 */
class SearchBlueprintRevisionsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of parent orchestration cluster resource.
     * Format should be -
     * "projects/{project_id}/locations/{location_name}/orchestrationClusters/{orchestration_cluster}".
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Required. Supported queries:
     * 1. ""                       : Lists all revisions across all blueprints.
     * 2. "latest=true"            : Lists latest revisions across all blueprints.
     * 3. "name={name}"            : Lists all revisions of blueprint with name
     * {name}.
     * 4. "name={name} latest=true": Lists latest revision of blueprint with name
     * {name}
     *
     * Generated from protobuf field <code>string query = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $query = '';
    /**
     * Optional. The maximum number of blueprints revisions to return per page.
     * max page size = 100, default page size = 20.
     *
     * Generated from protobuf field <code>int32 page_size = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $page_size = 0;
    /**
     * Optional. The page token, received from a previous search call.
     * It can be provided to retrieve the subsequent page.
     *
     * Generated from protobuf field <code>string page_token = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $page_token = '';

    /**
     * @param string $parent Required. The name of parent orchestration cluster resource.
     *                       Format should be -
     *                       "projects/{project_id}/locations/{location_name}/orchestrationClusters/{orchestration_cluster}". Please see
     *                       {@see TelcoAutomationClient::orchestrationClusterName()} for help formatting this field.
     * @param string $query  Required. Supported queries:
     *                       1. ""                       : Lists all revisions across all blueprints.
     *                       2. "latest=true"            : Lists latest revisions across all blueprints.
     *                       3. "name={name}"            : Lists all revisions of blueprint with name
     *                       {name}.
     *                       4. "name={name} latest=true": Lists latest revision of blueprint with name
     *                       {name}
     *
     * @return \Google\Cloud\TelcoAutomation\V1\SearchBlueprintRevisionsRequest
     *
     * @experimental
     */
    public static function build(string $parent, string $query): self
    {
        return (new self())
            ->setParent($parent)
            ->setQuery($query);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The name of parent orchestration cluster resource.
     *           Format should be -
     *           "projects/{project_id}/locations/{location_name}/orchestrationClusters/{orchestration_cluster}".
     *     @type string $query
     *           Required. Supported queries:
     *           1. ""                       : Lists all revisions across all blueprints.
     *           2. "latest=true"            : Lists latest revisions across all blueprints.
     *           3. "name={name}"            : Lists all revisions of blueprint with name
     *           {name}.
     *           4. "name={name} latest=true": Lists latest revision of blueprint with name
     *           {name}
     *     @type int $page_size
     *           Optional. The maximum number of blueprints revisions to return per page.
     *           max page size = 100, default page size = 20.
     *     @type string $page_token
     *           Optional. The page token, received from a previous search call.
     *           It can be provided to retrieve the subsequent page.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Telcoautomation\V1\Telcoautomation::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of parent orchestration cluster resource.
     * Format should be -
     * "projects/{project_id}/locations/{location_name}/orchestrationClusters/{orchestration_cluster}".
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The name of parent orchestration cluster resource.
     * Format should be -
     * "projects/{project_id}/locations/{location_name}/orchestrationClusters/{orchestration_cluster}".
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Required. Supported queries:
     * 1. ""                       : Lists all revisions across all blueprints.
     * 2. "latest=true"            : Lists latest revisions across all blueprints.
     * 3. "name={name}"            : Lists all revisions of blueprint with name
     * {name}.
     * 4. "name={name} latest=true": Lists latest revision of blueprint with name
     * {name}
     *
     * Generated from protobuf field <code>string query = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getQuery()
    {
        return $this->query;
    }

    /**
     * Required. Supported queries:
     * 1. ""                       : Lists all revisions across all blueprints.
     * 2. "latest=true"            : Lists latest revisions across all blueprints.
     * 3. "name={name}"            : Lists all revisions of blueprint with name
     * {name}.
     * 4. "name={name} latest=true": Lists latest revision of blueprint with name
     * {name}
     *
     * Generated from protobuf field <code>string query = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setQuery($var)
    {
        GPBUtil::checkString($var, True);
        $this->query = $var;

        return $this;
    }

    /**
     * Optional. The maximum number of blueprints revisions to return per page.
     * max page size = 100, default page size = 20.
     *
     * Generated from protobuf field <code>int32 page_size = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * Optional. The maximum number of blueprints revisions to return per page.
     * max page size = 100, default page size = 20.
     *
     * Generated from protobuf field <code>int32 page_size = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;

        return $this;
    }

    /**
     * Optional. The page token, received from a previous search call.
     * It can be provided to retrieve the subsequent page.
     *
     * Generated from protobuf field <code>string page_token = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * Optional. The page token, received from a previous search call.
     * It can be provided to retrieve the subsequent page.
     *
     * Generated from protobuf field <code>string page_token = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

}

