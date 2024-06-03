<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/dataset_service.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [DatasetService.UpdateDatasetVersion][google.cloud.aiplatform.v1.DatasetService.UpdateDatasetVersion].
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.UpdateDatasetVersionRequest</code>
 */
class UpdateDatasetVersionRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The DatasetVersion which replaces the resource on the server.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.DatasetVersion dataset_version = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $dataset_version = null;
    /**
     * Required. The update mask applies to the resource.
     * For the `FieldMask` definition, see
     * [google.protobuf.FieldMask][google.protobuf.FieldMask]. Updatable fields:
     *   * `display_name`
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $update_mask = null;

    /**
     * @param \Google\Cloud\AIPlatform\V1\DatasetVersion $datasetVersion Required. The DatasetVersion which replaces the resource on the server.
     * @param \Google\Protobuf\FieldMask                 $updateMask     Required. The update mask applies to the resource.
     *                                                                   For the `FieldMask` definition, see
     *                                                                   [google.protobuf.FieldMask][google.protobuf.FieldMask]. Updatable fields:
     *
     *                                                                   * `display_name`
     *
     * @return \Google\Cloud\AIPlatform\V1\UpdateDatasetVersionRequest
     *
     * @experimental
     */
    public static function build(\Google\Cloud\AIPlatform\V1\DatasetVersion $datasetVersion, \Google\Protobuf\FieldMask $updateMask): self
    {
        return (new self())
            ->setDatasetVersion($datasetVersion)
            ->setUpdateMask($updateMask);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\AIPlatform\V1\DatasetVersion $dataset_version
     *           Required. The DatasetVersion which replaces the resource on the server.
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           Required. The update mask applies to the resource.
     *           For the `FieldMask` definition, see
     *           [google.protobuf.FieldMask][google.protobuf.FieldMask]. Updatable fields:
     *             * `display_name`
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\DatasetService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The DatasetVersion which replaces the resource on the server.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.DatasetVersion dataset_version = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\AIPlatform\V1\DatasetVersion|null
     */
    public function getDatasetVersion()
    {
        return $this->dataset_version;
    }

    public function hasDatasetVersion()
    {
        return isset($this->dataset_version);
    }

    public function clearDatasetVersion()
    {
        unset($this->dataset_version);
    }

    /**
     * Required. The DatasetVersion which replaces the resource on the server.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.DatasetVersion dataset_version = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\AIPlatform\V1\DatasetVersion $var
     * @return $this
     */
    public function setDatasetVersion($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\DatasetVersion::class);
        $this->dataset_version = $var;

        return $this;
    }

    /**
     * Required. The update mask applies to the resource.
     * For the `FieldMask` definition, see
     * [google.protobuf.FieldMask][google.protobuf.FieldMask]. Updatable fields:
     *   * `display_name`
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = REQUIRED];</code>
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
     * Required. The update mask applies to the resource.
     * For the `FieldMask` definition, see
     * [google.protobuf.FieldMask][google.protobuf.FieldMask]. Updatable fields:
     *   * `display_name`
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = REQUIRED];</code>
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

