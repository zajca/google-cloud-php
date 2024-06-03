<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/securitycenter/v2/securitycenter_service.proto

namespace Google\Cloud\SecurityCenter\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for updating a source.
 *
 * Generated from protobuf message <code>google.cloud.securitycenter.v2.UpdateSourceRequest</code>
 */
class UpdateSourceRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The source resource to update.
     *
     * Generated from protobuf field <code>.google.cloud.securitycenter.v2.Source source = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $source = null;
    /**
     * The FieldMask to use when updating the source resource.
     * If empty all mutable fields will be updated.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     */
    private $update_mask = null;

    /**
     * @param \Google\Cloud\SecurityCenter\V2\Source $source     Required. The source resource to update.
     * @param \Google\Protobuf\FieldMask             $updateMask The FieldMask to use when updating the source resource.
     *
     *                                                           If empty all mutable fields will be updated.
     *
     * @return \Google\Cloud\SecurityCenter\V2\UpdateSourceRequest
     *
     * @experimental
     */
    public static function build(\Google\Cloud\SecurityCenter\V2\Source $source, \Google\Protobuf\FieldMask $updateMask): self
    {
        return (new self())
            ->setSource($source)
            ->setUpdateMask($updateMask);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\SecurityCenter\V2\Source $source
     *           Required. The source resource to update.
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           The FieldMask to use when updating the source resource.
     *           If empty all mutable fields will be updated.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Securitycenter\V2\SecuritycenterService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The source resource to update.
     *
     * Generated from protobuf field <code>.google.cloud.securitycenter.v2.Source source = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\SecurityCenter\V2\Source|null
     */
    public function getSource()
    {
        return $this->source;
    }

    public function hasSource()
    {
        return isset($this->source);
    }

    public function clearSource()
    {
        unset($this->source);
    }

    /**
     * Required. The source resource to update.
     *
     * Generated from protobuf field <code>.google.cloud.securitycenter.v2.Source source = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\SecurityCenter\V2\Source $var
     * @return $this
     */
    public function setSource($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\SecurityCenter\V2\Source::class);
        $this->source = $var;

        return $this;
    }

    /**
     * The FieldMask to use when updating the source resource.
     * If empty all mutable fields will be updated.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     * @return \Google\Protobuf\FieldMask|null
     */
    public function getUpdateMask()
    {
        return $this->update_mask;
    }

    public function hasUpdateMask()
    {
        return isset($this->update_mask);
    }

    public function clearUpdateMask()
    {
        unset($this->update_mask);
    }

    /**
     * The FieldMask to use when updating the source resource.
     * If empty all mutable fields will be updated.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;

        return $this;
    }

}

