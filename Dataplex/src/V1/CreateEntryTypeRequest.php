<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataplex/v1/catalog.proto

namespace Google\Cloud\Dataplex\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Create EntryType Request
 *
 * Generated from protobuf message <code>google.cloud.dataplex.v1.CreateEntryTypeRequest</code>
 */
class CreateEntryTypeRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the EntryType, of the form:
     * projects/{project_number}/locations/{location_id}
     * where `location_id` refers to a GCP region.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $parent = '';
    /**
     * Required. EntryType identifier.
     *
     * Generated from protobuf field <code>string entry_type_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $entry_type_id = '';
    /**
     * Required. EntryType Resource
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.EntryType entry_type = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $entry_type = null;
    /**
     * Optional. Only validate the request, but do not perform mutations.
     * The default is false.
     *
     * Generated from protobuf field <code>bool validate_only = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $validate_only = false;

    /**
     * @param string                              $parent      Required. The resource name of the EntryType, of the form:
     *                                                         projects/{project_number}/locations/{location_id}
     *                                                         where `location_id` refers to a GCP region. Please see
     *                                                         {@see CatalogServiceClient::locationName()} for help formatting this field.
     * @param \Google\Cloud\Dataplex\V1\EntryType $entryType   Required. EntryType Resource
     * @param string                              $entryTypeId Required. EntryType identifier.
     *
     * @return \Google\Cloud\Dataplex\V1\CreateEntryTypeRequest
     *
     * @experimental
     */
    public static function build(string $parent, \Google\Cloud\Dataplex\V1\EntryType $entryType, string $entryTypeId): self
    {
        return (new self())
            ->setParent($parent)
            ->setEntryType($entryType)
            ->setEntryTypeId($entryTypeId);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The resource name of the EntryType, of the form:
     *           projects/{project_number}/locations/{location_id}
     *           where `location_id` refers to a GCP region.
     *     @type string $entry_type_id
     *           Required. EntryType identifier.
     *     @type \Google\Cloud\Dataplex\V1\EntryType $entry_type
     *           Required. EntryType Resource
     *     @type bool $validate_only
     *           Optional. Only validate the request, but do not perform mutations.
     *           The default is false.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataplex\V1\Catalog::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the EntryType, of the form:
     * projects/{project_number}/locations/{location_id}
     * where `location_id` refers to a GCP region.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The resource name of the EntryType, of the form:
     * projects/{project_number}/locations/{location_id}
     * where `location_id` refers to a GCP region.
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
     * Required. EntryType identifier.
     *
     * Generated from protobuf field <code>string entry_type_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getEntryTypeId()
    {
        return $this->entry_type_id;
    }

    /**
     * Required. EntryType identifier.
     *
     * Generated from protobuf field <code>string entry_type_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setEntryTypeId($var)
    {
        GPBUtil::checkString($var, True);
        $this->entry_type_id = $var;

        return $this;
    }

    /**
     * Required. EntryType Resource
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.EntryType entry_type = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Dataplex\V1\EntryType|null
     */
    public function getEntryType()
    {
        return $this->entry_type;
    }

    public function hasEntryType()
    {
        return isset($this->entry_type);
    }

    public function clearEntryType()
    {
        unset($this->entry_type);
    }

    /**
     * Required. EntryType Resource
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.EntryType entry_type = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Dataplex\V1\EntryType $var
     * @return $this
     */
    public function setEntryType($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataplex\V1\EntryType::class);
        $this->entry_type = $var;

        return $this;
    }

    /**
     * Optional. Only validate the request, but do not perform mutations.
     * The default is false.
     *
     * Generated from protobuf field <code>bool validate_only = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getValidateOnly()
    {
        return $this->validate_only;
    }

    /**
     * Optional. Only validate the request, but do not perform mutations.
     * The default is false.
     *
     * Generated from protobuf field <code>bool validate_only = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setValidateOnly($var)
    {
        GPBUtil::checkBool($var);
        $this->validate_only = $var;

        return $this;
    }

}

