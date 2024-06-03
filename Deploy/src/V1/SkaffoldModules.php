<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/deploy/v1/cloud_deploy.proto

namespace Google\Cloud\Deploy\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Skaffold Config modules and their remote source.
 *
 * Generated from protobuf message <code>google.cloud.deploy.v1.SkaffoldModules</code>
 */
class SkaffoldModules extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. The Skaffold Config modules to use from the specified source.
     *
     * Generated from protobuf field <code>repeated string configs = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $configs;
    protected $source;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $configs
     *           Optional. The Skaffold Config modules to use from the specified source.
     *     @type \Google\Cloud\Deploy\V1\SkaffoldModules\SkaffoldGitSource $git
     *           Remote git repository containing the Skaffold Config modules.
     *     @type \Google\Cloud\Deploy\V1\SkaffoldModules\SkaffoldGCSSource $google_cloud_storage
     *           Cloud Storage bucket containing the Skaffold Config modules.
     *     @type \Google\Cloud\Deploy\V1\SkaffoldModules\SkaffoldGCBRepoSource $google_cloud_build_repo
     *           Cloud Build V2 repository containing the Skaffold Config modules.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Deploy\V1\CloudDeploy::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. The Skaffold Config modules to use from the specified source.
     *
     * Generated from protobuf field <code>repeated string configs = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getConfigs()
    {
        return $this->configs;
    }

    /**
     * Optional. The Skaffold Config modules to use from the specified source.
     *
     * Generated from protobuf field <code>repeated string configs = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setConfigs($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->configs = $arr;

        return $this;
    }

    /**
     * Remote git repository containing the Skaffold Config modules.
     *
     * Generated from protobuf field <code>.google.cloud.deploy.v1.SkaffoldModules.SkaffoldGitSource git = 2;</code>
     * @return \Google\Cloud\Deploy\V1\SkaffoldModules\SkaffoldGitSource|null
     */
    public function getGit()
    {
        return $this->readOneof(2);
    }

    public function hasGit()
    {
        return $this->hasOneof(2);
    }

    /**
     * Remote git repository containing the Skaffold Config modules.
     *
     * Generated from protobuf field <code>.google.cloud.deploy.v1.SkaffoldModules.SkaffoldGitSource git = 2;</code>
     * @param \Google\Cloud\Deploy\V1\SkaffoldModules\SkaffoldGitSource $var
     * @return $this
     */
    public function setGit($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Deploy\V1\SkaffoldModules\SkaffoldGitSource::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Cloud Storage bucket containing the Skaffold Config modules.
     *
     * Generated from protobuf field <code>.google.cloud.deploy.v1.SkaffoldModules.SkaffoldGCSSource google_cloud_storage = 3;</code>
     * @return \Google\Cloud\Deploy\V1\SkaffoldModules\SkaffoldGCSSource|null
     */
    public function getGoogleCloudStorage()
    {
        return $this->readOneof(3);
    }

    public function hasGoogleCloudStorage()
    {
        return $this->hasOneof(3);
    }

    /**
     * Cloud Storage bucket containing the Skaffold Config modules.
     *
     * Generated from protobuf field <code>.google.cloud.deploy.v1.SkaffoldModules.SkaffoldGCSSource google_cloud_storage = 3;</code>
     * @param \Google\Cloud\Deploy\V1\SkaffoldModules\SkaffoldGCSSource $var
     * @return $this
     */
    public function setGoogleCloudStorage($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Deploy\V1\SkaffoldModules\SkaffoldGCSSource::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * Cloud Build V2 repository containing the Skaffold Config modules.
     *
     * Generated from protobuf field <code>.google.cloud.deploy.v1.SkaffoldModules.SkaffoldGCBRepoSource google_cloud_build_repo = 4;</code>
     * @return \Google\Cloud\Deploy\V1\SkaffoldModules\SkaffoldGCBRepoSource|null
     */
    public function getGoogleCloudBuildRepo()
    {
        return $this->readOneof(4);
    }

    public function hasGoogleCloudBuildRepo()
    {
        return $this->hasOneof(4);
    }

    /**
     * Cloud Build V2 repository containing the Skaffold Config modules.
     *
     * Generated from protobuf field <code>.google.cloud.deploy.v1.SkaffoldModules.SkaffoldGCBRepoSource google_cloud_build_repo = 4;</code>
     * @param \Google\Cloud\Deploy\V1\SkaffoldModules\SkaffoldGCBRepoSource $var
     * @return $this
     */
    public function setGoogleCloudBuildRepo($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Deploy\V1\SkaffoldModules\SkaffoldGCBRepoSource::class);
        $this->writeOneof(4, $var);

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

