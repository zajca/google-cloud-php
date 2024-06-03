<?php
/*
 * Copyright 2023 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/*
 * GENERATED CODE WARNING
 * Generated by gapic-generator-php from the file
 * https://github.com/googleapis/googleapis/blob/master/google/cloud/bigquery/connection/v1/connection.proto
 * Updates to the above are reflected here through a refresh process.
 */

namespace Google\Cloud\BigQuery\Connection\V1\Client;

use Google\ApiCore\ApiException;
use Google\ApiCore\CredentialsWrapper;
use Google\ApiCore\GapicClientTrait;
use Google\ApiCore\PagedListResponse;
use Google\ApiCore\ResourceHelperTrait;
use Google\ApiCore\RetrySettings;
use Google\ApiCore\Transport\TransportInterface;
use Google\ApiCore\ValidationException;
use Google\Auth\FetchAuthTokenInterface;
use Google\Cloud\BigQuery\Connection\V1\Connection;
use Google\Cloud\BigQuery\Connection\V1\CreateConnectionRequest;
use Google\Cloud\BigQuery\Connection\V1\DeleteConnectionRequest;
use Google\Cloud\BigQuery\Connection\V1\GetConnectionRequest;
use Google\Cloud\BigQuery\Connection\V1\ListConnectionsRequest;
use Google\Cloud\BigQuery\Connection\V1\UpdateConnectionRequest;
use Google\Cloud\Iam\V1\GetIamPolicyRequest;
use Google\Cloud\Iam\V1\Policy;
use Google\Cloud\Iam\V1\SetIamPolicyRequest;
use Google\Cloud\Iam\V1\TestIamPermissionsRequest;
use Google\Cloud\Iam\V1\TestIamPermissionsResponse;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * Service Description: Manages external data source connections and credentials.
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods.
 *
 * Many parameters require resource names to be formatted in a particular way. To
 * assist with these names, this class includes a format method for each type of
 * name, and additionally a parseName method to extract the individual identifiers
 * contained within formatted names that are returned by the API.
 *
 * @method PromiseInterface createConnectionAsync(CreateConnectionRequest $request, array $optionalArgs = [])
 * @method PromiseInterface deleteConnectionAsync(DeleteConnectionRequest $request, array $optionalArgs = [])
 * @method PromiseInterface getConnectionAsync(GetConnectionRequest $request, array $optionalArgs = [])
 * @method PromiseInterface getIamPolicyAsync(GetIamPolicyRequest $request, array $optionalArgs = [])
 * @method PromiseInterface listConnectionsAsync(ListConnectionsRequest $request, array $optionalArgs = [])
 * @method PromiseInterface setIamPolicyAsync(SetIamPolicyRequest $request, array $optionalArgs = [])
 * @method PromiseInterface testIamPermissionsAsync(TestIamPermissionsRequest $request, array $optionalArgs = [])
 * @method PromiseInterface updateConnectionAsync(UpdateConnectionRequest $request, array $optionalArgs = [])
 */
final class ConnectionServiceClient
{
    use GapicClientTrait;
    use ResourceHelperTrait;

    /** The name of the service. */
    private const SERVICE_NAME = 'google.cloud.bigquery.connection.v1.ConnectionService';

    /**
     * The default address of the service.
     *
     * @deprecated SERVICE_ADDRESS_TEMPLATE should be used instead.
     */
    private const SERVICE_ADDRESS = 'bigqueryconnection.googleapis.com';

    /** The address template of the service. */
    private const SERVICE_ADDRESS_TEMPLATE = 'bigqueryconnection.UNIVERSE_DOMAIN';

    /** The default port of the service. */
    private const DEFAULT_SERVICE_PORT = 443;

    /** The name of the code generator, to be included in the agent header. */
    private const CODEGEN_NAME = 'gapic';

    /** The default scopes required by the service. */
    public static $serviceScopes = [
        'https://www.googleapis.com/auth/bigquery',
        'https://www.googleapis.com/auth/cloud-platform',
    ];

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'apiEndpoint' => self::SERVICE_ADDRESS . ':' . self::DEFAULT_SERVICE_PORT,
            'clientConfig' => __DIR__ . '/../resources/connection_service_client_config.json',
            'descriptorsConfigPath' => __DIR__ . '/../resources/connection_service_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__ . '/../resources/connection_service_grpc_config.json',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__ . '/../resources/connection_service_rest_client_config.php',
                ],
            ],
        ];
    }

    /**
     * Formats a string containing the fully-qualified path to represent a cluster
     * resource.
     *
     * @param string $project
     * @param string $region
     * @param string $cluster
     *
     * @return string The formatted cluster resource.
     */
    public static function clusterName(string $project, string $region, string $cluster): string
    {
        return self::getPathTemplate('cluster')->render([
            'project' => $project,
            'region' => $region,
            'cluster' => $cluster,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a connection
     * resource.
     *
     * @param string $project
     * @param string $location
     * @param string $connection
     *
     * @return string The formatted connection resource.
     */
    public static function connectionName(string $project, string $location, string $connection): string
    {
        return self::getPathTemplate('connection')->render([
            'project' => $project,
            'location' => $location,
            'connection' => $connection,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a location
     * resource.
     *
     * @param string $project
     * @param string $location
     *
     * @return string The formatted location resource.
     */
    public static function locationName(string $project, string $location): string
    {
        return self::getPathTemplate('location')->render([
            'project' => $project,
            'location' => $location,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a service
     * resource.
     *
     * @param string $project
     * @param string $location
     * @param string $service
     *
     * @return string The formatted service resource.
     */
    public static function serviceName(string $project, string $location, string $service): string
    {
        return self::getPathTemplate('service')->render([
            'project' => $project,
            'location' => $location,
            'service' => $service,
        ]);
    }

    /**
     * Parses a formatted name string and returns an associative array of the components in the name.
     * The following name formats are supported:
     * Template: Pattern
     * - cluster: projects/{project}/regions/{region}/clusters/{cluster}
     * - connection: projects/{project}/locations/{location}/connections/{connection}
     * - location: projects/{project}/locations/{location}
     * - service: projects/{project}/locations/{location}/services/{service}
     *
     * The optional $template argument can be supplied to specify a particular pattern,
     * and must match one of the templates listed above. If no $template argument is
     * provided, or if the $template argument does not match one of the templates
     * listed, then parseName will check each of the supported templates, and return
     * the first match.
     *
     * @param string $formattedName The formatted name string
     * @param string $template      Optional name of template to match
     *
     * @return array An associative array from name component IDs to component values.
     *
     * @throws ValidationException If $formattedName could not be matched.
     */
    public static function parseName(string $formattedName, string $template = null): array
    {
        return self::parseFormattedName($formattedName, $template);
    }

    /**
     * Constructor.
     *
     * @param array $options {
     *     Optional. Options for configuring the service API wrapper.
     *
     *     @type string $apiEndpoint
     *           The address of the API remote host. May optionally include the port, formatted
     *           as "<uri>:<port>". Default 'bigqueryconnection.googleapis.com:443'.
     *     @type string|array|FetchAuthTokenInterface|CredentialsWrapper $credentials
     *           The credentials to be used by the client to authorize API calls. This option
     *           accepts either a path to a credentials file, or a decoded credentials file as a
     *           PHP array.
     *           *Advanced usage*: In addition, this option can also accept a pre-constructed
     *           {@see \Google\Auth\FetchAuthTokenInterface} object or
     *           {@see \Google\ApiCore\CredentialsWrapper} object. Note that when one of these
     *           objects are provided, any settings in $credentialsConfig will be ignored.
     *     @type array $credentialsConfig
     *           Options used to configure credentials, including auth token caching, for the
     *           client. For a full list of supporting configuration options, see
     *           {@see \Google\ApiCore\CredentialsWrapper::build()} .
     *     @type bool $disableRetries
     *           Determines whether or not retries defined by the client configuration should be
     *           disabled. Defaults to `false`.
     *     @type string|array $clientConfig
     *           Client method configuration, including retry settings. This option can be either
     *           a path to a JSON file, or a PHP array containing the decoded JSON data. By
     *           default this settings points to the default client config file, which is
     *           provided in the resources folder.
     *     @type string|TransportInterface $transport
     *           The transport used for executing network requests. May be either the string
     *           `rest` or `grpc`. Defaults to `grpc` if gRPC support is detected on the system.
     *           *Advanced usage*: Additionally, it is possible to pass in an already
     *           instantiated {@see \Google\ApiCore\Transport\TransportInterface} object. Note
     *           that when this object is provided, any settings in $transportConfig, and any
     *           $apiEndpoint setting, will be ignored.
     *     @type array $transportConfig
     *           Configuration options that will be used to construct the transport. Options for
     *           each supported transport type should be passed in a key for that transport. For
     *           example:
     *           $transportConfig = [
     *               'grpc' => [...],
     *               'rest' => [...],
     *           ];
     *           See the {@see \Google\ApiCore\Transport\GrpcTransport::build()} and
     *           {@see \Google\ApiCore\Transport\RestTransport::build()} methods for the
     *           supported options.
     *     @type callable $clientCertSource
     *           A callable which returns the client cert as a string. This can be used to
     *           provide a certificate and private key to the transport layer for mTLS.
     * }
     *
     * @throws ValidationException
     */
    public function __construct(array $options = [])
    {
        $clientOptions = $this->buildClientOptions($options);
        $this->setClientOptions($clientOptions);
    }

    /** Handles execution of the async variants for each documented method. */
    public function __call($method, $args)
    {
        if (substr($method, -5) !== 'Async') {
            trigger_error('Call to undefined method ' . __CLASS__ . "::$method()", E_USER_ERROR);
        }

        array_unshift($args, substr($method, 0, -5));
        return call_user_func_array([$this, 'startAsyncCall'], $args);
    }

    /**
     * Creates a new connection.
     *
     * The async variant is {@see ConnectionServiceClient::createConnectionAsync()} .
     *
     * @example samples/V1/ConnectionServiceClient/create_connection.php
     *
     * @param CreateConnectionRequest $request     A request to house fields associated with the call.
     * @param array                   $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Connection
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function createConnection(CreateConnectionRequest $request, array $callOptions = []): Connection
    {
        return $this->startApiCall('CreateConnection', $request, $callOptions)->wait();
    }

    /**
     * Deletes connection and associated credential.
     *
     * The async variant is {@see ConnectionServiceClient::deleteConnectionAsync()} .
     *
     * @example samples/V1/ConnectionServiceClient/delete_connection.php
     *
     * @param DeleteConnectionRequest $request     A request to house fields associated with the call.
     * @param array                   $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function deleteConnection(DeleteConnectionRequest $request, array $callOptions = []): void
    {
        $this->startApiCall('DeleteConnection', $request, $callOptions)->wait();
    }

    /**
     * Returns specified connection.
     *
     * The async variant is {@see ConnectionServiceClient::getConnectionAsync()} .
     *
     * @example samples/V1/ConnectionServiceClient/get_connection.php
     *
     * @param GetConnectionRequest $request     A request to house fields associated with the call.
     * @param array                $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Connection
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getConnection(GetConnectionRequest $request, array $callOptions = []): Connection
    {
        return $this->startApiCall('GetConnection', $request, $callOptions)->wait();
    }

    /**
     * Gets the access control policy for a resource.
     * Returns an empty policy if the resource exists and does not have a policy
     * set.
     *
     * The async variant is {@see ConnectionServiceClient::getIamPolicyAsync()} .
     *
     * @example samples/V1/ConnectionServiceClient/get_iam_policy.php
     *
     * @param GetIamPolicyRequest $request     A request to house fields associated with the call.
     * @param array               $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Policy
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getIamPolicy(GetIamPolicyRequest $request, array $callOptions = []): Policy
    {
        return $this->startApiCall('GetIamPolicy', $request, $callOptions)->wait();
    }

    /**
     * Returns a list of connections in the given project.
     *
     * The async variant is {@see ConnectionServiceClient::listConnectionsAsync()} .
     *
     * @example samples/V1/ConnectionServiceClient/list_connections.php
     *
     * @param ListConnectionsRequest $request     A request to house fields associated with the call.
     * @param array                  $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return PagedListResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function listConnections(ListConnectionsRequest $request, array $callOptions = []): PagedListResponse
    {
        return $this->startApiCall('ListConnections', $request, $callOptions);
    }

    /**
     * Sets the access control policy on the specified resource. Replaces any
     * existing policy.
     *
     * Can return `NOT_FOUND`, `INVALID_ARGUMENT`, and `PERMISSION_DENIED` errors.
     *
     * The async variant is {@see ConnectionServiceClient::setIamPolicyAsync()} .
     *
     * @example samples/V1/ConnectionServiceClient/set_iam_policy.php
     *
     * @param SetIamPolicyRequest $request     A request to house fields associated with the call.
     * @param array               $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Policy
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function setIamPolicy(SetIamPolicyRequest $request, array $callOptions = []): Policy
    {
        return $this->startApiCall('SetIamPolicy', $request, $callOptions)->wait();
    }

    /**
     * Returns permissions that a caller has on the specified resource.
     * If the resource does not exist, this will return an empty set of
     * permissions, not a `NOT_FOUND` error.
     *
     * Note: This operation is designed to be used for building permission-aware
     * UIs and command-line tools, not for authorization checking. This operation
     * may "fail open" without warning.
     *
     * The async variant is {@see ConnectionServiceClient::testIamPermissionsAsync()} .
     *
     * @example samples/V1/ConnectionServiceClient/test_iam_permissions.php
     *
     * @param TestIamPermissionsRequest $request     A request to house fields associated with the call.
     * @param array                     $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return TestIamPermissionsResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function testIamPermissions(TestIamPermissionsRequest $request, array $callOptions = []): TestIamPermissionsResponse
    {
        return $this->startApiCall('TestIamPermissions', $request, $callOptions)->wait();
    }

    /**
     * Updates the specified connection. For security reasons, also resets
     * credential if connection properties are in the update field mask.
     *
     * The async variant is {@see ConnectionServiceClient::updateConnectionAsync()} .
     *
     * @example samples/V1/ConnectionServiceClient/update_connection.php
     *
     * @param UpdateConnectionRequest $request     A request to house fields associated with the call.
     * @param array                   $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Connection
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function updateConnection(UpdateConnectionRequest $request, array $callOptions = []): Connection
    {
        return $this->startApiCall('UpdateConnection', $request, $callOptions)->wait();
    }
}
