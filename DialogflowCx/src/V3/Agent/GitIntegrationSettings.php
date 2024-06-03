<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/cx/v3/agent.proto

namespace Google\Cloud\Dialogflow\Cx\V3\Agent;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Settings for connecting to Git repository for an agent.
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.cx.v3.Agent.GitIntegrationSettings</code>
 */
class GitIntegrationSettings extends \Google\Protobuf\Internal\Message
{
    protected $git_settings;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Dialogflow\Cx\V3\Agent\GitIntegrationSettings\GithubSettings $github_settings
     *           GitHub settings.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\Cx\V3\Agent::initOnce();
        parent::__construct($data);
    }

    /**
     * GitHub settings.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.cx.v3.Agent.GitIntegrationSettings.GithubSettings github_settings = 1;</code>
     * @return \Google\Cloud\Dialogflow\Cx\V3\Agent\GitIntegrationSettings\GithubSettings|null
     */
    public function getGithubSettings()
    {
        return $this->readOneof(1);
    }

    public function hasGithubSettings()
    {
        return $this->hasOneof(1);
    }

    /**
     * GitHub settings.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.cx.v3.Agent.GitIntegrationSettings.GithubSettings github_settings = 1;</code>
     * @param \Google\Cloud\Dialogflow\Cx\V3\Agent\GitIntegrationSettings\GithubSettings $var
     * @return $this
     */
    public function setGithubSettings($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dialogflow\Cx\V3\Agent\GitIntegrationSettings\GithubSettings::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getGitSettings()
    {
        return $this->whichOneof("git_settings");
    }

}


