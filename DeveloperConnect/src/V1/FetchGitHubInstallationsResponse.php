<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/developerconnect/v1/developer_connect.proto

namespace Google\Cloud\DeveloperConnect\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response of fetching github installations.
 *
 * Generated from protobuf message <code>google.cloud.developerconnect.v1.FetchGitHubInstallationsResponse</code>
 */
class FetchGitHubInstallationsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * List of installations available to the OAuth user (for github.com)
     * or all the installations (for GitHub enterprise).
     *
     * Generated from protobuf field <code>repeated .google.cloud.developerconnect.v1.FetchGitHubInstallationsResponse.Installation installations = 1;</code>
     */
    private $installations;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\DeveloperConnect\V1\FetchGitHubInstallationsResponse\Installation>|\Google\Protobuf\Internal\RepeatedField $installations
     *           List of installations available to the OAuth user (for github.com)
     *           or all the installations (for GitHub enterprise).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Developerconnect\V1\DeveloperConnect::initOnce();
        parent::__construct($data);
    }

    /**
     * List of installations available to the OAuth user (for github.com)
     * or all the installations (for GitHub enterprise).
     *
     * Generated from protobuf field <code>repeated .google.cloud.developerconnect.v1.FetchGitHubInstallationsResponse.Installation installations = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getInstallations()
    {
        return $this->installations;
    }

    /**
     * List of installations available to the OAuth user (for github.com)
     * or all the installations (for GitHub enterprise).
     *
     * Generated from protobuf field <code>repeated .google.cloud.developerconnect.v1.FetchGitHubInstallationsResponse.Installation installations = 1;</code>
     * @param array<\Google\Cloud\DeveloperConnect\V1\FetchGitHubInstallationsResponse\Installation>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setInstallations($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\DeveloperConnect\V1\FetchGitHubInstallationsResponse\Installation::class);
        $this->installations = $arr;

        return $this;
    }

}

