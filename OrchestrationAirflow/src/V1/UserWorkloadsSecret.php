<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/orchestration/airflow/service/v1/environments.proto

namespace Google\Cloud\Orchestration\Airflow\Service\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * User workloads Secret used by Airflow tasks that run with Kubernetes executor
 * or KubernetesPodOperator.
 *
 * Generated from protobuf message <code>google.cloud.orchestration.airflow.service.v1.UserWorkloadsSecret</code>
 */
class UserWorkloadsSecret extends \Google\Protobuf\Internal\Message
{
    /**
     * Identifier. The resource name of the Secret, in the form:
     * "projects/{projectId}/locations/{locationId}/environments/{environmentId}/userWorkloadsSecrets/{userWorkloadsSecretId}"
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IDENTIFIER];</code>
     */
    private $name = '';
    /**
     * Optional. The "data" field of Kubernetes Secret, organized in key-value
     * pairs, which can contain sensitive values such as a password, a token, or a
     * key. The values for all keys have to be base64-encoded strings. For details
     * see: https://kubernetes.io/docs/concepts/configuration/secret/
     *
     * Generated from protobuf field <code>map<string, string> data = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $data;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Identifier. The resource name of the Secret, in the form:
     *           "projects/{projectId}/locations/{locationId}/environments/{environmentId}/userWorkloadsSecrets/{userWorkloadsSecretId}"
     *     @type array|\Google\Protobuf\Internal\MapField $data
     *           Optional. The "data" field of Kubernetes Secret, organized in key-value
     *           pairs, which can contain sensitive values such as a password, a token, or a
     *           key. The values for all keys have to be base64-encoded strings. For details
     *           see: https://kubernetes.io/docs/concepts/configuration/secret/
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Orchestration\Airflow\Service\V1\Environments::initOnce();
        parent::__construct($data);
    }

    /**
     * Identifier. The resource name of the Secret, in the form:
     * "projects/{projectId}/locations/{locationId}/environments/{environmentId}/userWorkloadsSecrets/{userWorkloadsSecretId}"
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IDENTIFIER];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Identifier. The resource name of the Secret, in the form:
     * "projects/{projectId}/locations/{locationId}/environments/{environmentId}/userWorkloadsSecrets/{userWorkloadsSecretId}"
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IDENTIFIER];</code>
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
     * Optional. The "data" field of Kubernetes Secret, organized in key-value
     * pairs, which can contain sensitive values such as a password, a token, or a
     * key. The values for all keys have to be base64-encoded strings. For details
     * see: https://kubernetes.io/docs/concepts/configuration/secret/
     *
     * Generated from protobuf field <code>map<string, string> data = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Optional. The "data" field of Kubernetes Secret, organized in key-value
     * pairs, which can contain sensitive values such as a password, a token, or a
     * key. The values for all keys have to be base64-encoded strings. For details
     * see: https://kubernetes.io/docs/concepts/configuration/secret/
     *
     * Generated from protobuf field <code>map<string, string> data = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setData($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->data = $arr;

        return $this;
    }

}

